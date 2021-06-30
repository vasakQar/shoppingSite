<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\isEmpty;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $products = Product::with('category')->paginate(6);
        return view('admin/products_list', compact('products'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin/create_new_product', compact('categories'));
    }

    /**
     * @param ProductCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductCreateRequest $request)
    {
        if ($request->hasFile('images'))
        {
            foreach ($request->file('images') as $image)
            {
                $image->store('public/images');
                $data[] = $image->hashName();
            }
        }
        Product::create(array_merge($request->except(['images','_token']),['images' => $data]));

        return back()->with('message', 'Product has been created successfully!');
    }

    /**
     * @param Product $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function show(Product $product)
    {
        if ($product->images){
            return view('admin/show_product_images', compact('product'));
        }else{
            return redirect()->back()->with('success','product have not images!');
        }
    }

    /**
     * @param Product $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin/edit_product', compact('product','categories'));
    }

    /**
     * @param ProductUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductUpdateRequest $request)
    {
        /**
         * find prod by id
         */
        $product = Product::findOrFail($request->id);
        /**
         * move new images in images folder
         */
        $oldImages = $product->images;
        $data = $oldImages ? $oldImages : [];

        if ($request->file('images'))
        {
            foreach ($request->file('images') as $image)
            {
                $image->store('public/images');
                $data[] = $image->hashName();
            }
        }

        $product->update(array_merge($request->except(['images','_token']),['images' => $data]));

        return redirect()->route('products.index')->with('success', 'Product has been updated successfully!');
    }

    /**
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $productImages = $product->images;
        foreach ($productImages as $productImage)
        {
            if (is_file(storage_path('app/public/images/'.$productImage))){
                Storage::delete('/public/images/'.$productImage);
            }
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
        $product  = Product::findOrFail($id);
        $images = $product->images;
        if (count($images) > 1){
            foreach ($images as $image){
                if ( $image == $imgName ){
                    if (is_file(storage_path('app/public/images/'.$imgName))) {
                        Storage::delete('/public/images/' . $imgName);
                    }
                }else{
                    $data[] = $image;
                }
            }
            $product->images = $data;
            $product->save();
            return redirect()->back()->with('massege','image deleted successfully!');
        }else{
            return redirect()->back()->with('massege','You can not delete the last image, you  should delete product !');
        }
    }

}
