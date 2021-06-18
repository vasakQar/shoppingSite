<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCreateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->get();
        return view('admin/products_list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin/create_new_product', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $request)
    {

        if ($request->hasFile('images'))
        {
            foreach ($request->file('images') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->storeAs('images', $name, 'public');
                $data[] = $name;
            }
        }


        $product = new Product();
        $product->name = $request->name;
        $product->description_en = $request->description_en;
        $product->description_ru = $request->description_ru;
        $product->description_am = $request->description_am;
        $product->price = $request->price;
        $product->old_price = $request->old_price;
        $product->images = $data;
        $product->category_id = $request->category_id;
        $product->save();

        return back()->with('message', 'Product has been created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id',$id)->first();
        $productImages = $product->images;
        return view('admin/show_product_images', compact('productImages','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::where('id',$id)->first();
        return view('admin/edit_product', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductCreateRequest $request)
    {
        /**
         * find prod by id
         */
        $product = Product::where('id', $request->id)->first();
        /**
         * delete images path
         */
        $productImages = $product->images ;
        if (is_array($productImages )){
            foreach ($productImages as $productImage)
            {
                Storage::delete('/public/images/'.$productImage);
            }
        }

        /**
         * move images in images folder
         */
        if ($request->hasFile('images'))
        {
            foreach ($request->file('images') as $image)
            {
                $name = time().$image->getClientOriginalName();
                $image->storeAs('images', $name, 'public');
                $data[] = $name;
            }
        }

        $product->name = $request->name;
        $product->description_en = $request->description_en;
        $product->description_ru = $request->description_ru;
        $product->description_am = $request->description_am;
        $product->price = $request->price;
        $product->old_price = $request->old_price;
        $product->images = $data;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id',$id)->first();
        $productImages = $product->images;
        foreach ($productImages as $productImage)
        {
            Storage::delete('/public/images/'.$productImage);
        }
        $product->delete();
        return redirect()->back()->with('success','Product deleted successfully');
    }

    /**
     * @param $imgName
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteProductImage($imgName,$id)
    {
        $product  = Product::where('id',$id)->first();
        $images = $product->images;
        foreach ($images as $image){
            if ( $image == $imgName ){
                Storage::delete('/public/images/'.$imgName);
            }else{
                $data[] = $image;
            }
        }
        $product->images = $data;
        $product->save();
        return redirect()->back()->with('massege','image deleted successfully!');
    }
}
