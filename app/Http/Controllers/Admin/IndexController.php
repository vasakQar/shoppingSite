<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        return view('admin.index');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * show categories
     */
//    public function showCategories()
//    {
//        $categories = Category::paginate(4);
//        return view('admin/categories_list', compact('categories'));
//    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
//    public function createCategory(Request $request)
//    {
//        /**
//         * validate
//         */
//        $request->validate([
//            'name_en' => 'required',
//            'name_ru' => 'required',
//            'name_am' => 'required',
//        ]);
//
//
//        $category = new Category();
//        $category->name_en = $request->name_en;
//        $category->name_ru = $request->name_ru;
//        $category->name_am = $request->name_am;
//        $category->save();
//
//        return back()->with('message', 'Category has been created successfully!');
//    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * delete category
     */
//    public function deleteCategory($id)
//    {
//        $category = Category::where('id',$id)->first();
//        $category->delete();
//
//        return back()->with('success', 'Category has been deleted successfully!');
//    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * update Category
     */
//    public function updateCategory(Request $request)
//    {
//        $id = $request->id;
//        $category = Category::where('id',$id)->first();
//        $category->name_en = $request->name_en;
//        $category->name_ru = $request->name_ru;
//        $category->name_am = $request->name_am;
//        $category->save();
//
//        return back()->with('success', 'Category has been updated successfully!');
//    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * 'admin'   show product list
     */
//    public function showProducts()
//    {
//        $products = Product::with('category')->get();
//        return view('admin/products_list', compact('products'));
//    }

//    public function showProductImages($id)
//    {
//        $product = Product::where('id',$id)->first();
//        $productImages = $product->images;
//        return view('admin/show_product_images', compact('productImages','product'));
//    }

//    /**
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
//     * form for creating new product
//     */
//    public function createNewProduct()
//    {
//        $categories = Category::all();
//        return view('admin/create_new_product', compact('categories'));
//    }

    /**
     * @param Request $request
     * create new product
     */
//    public function createProduct(Request $request)
//    {
//        /**
//         * validate
//         */
//        $request->validate([
//            'name'           => 'required',
//            'description_en' => 'required',
//            'description_ru' => 'required',
//            'description_am' => 'required',
//            'price'          => 'required',
//            'price'          => 'required',
//            'old_price'      => 'required',
//            'images'         => 'required',
//        ]);
//
//
//        if ($request->hasFile('images'))
//        {
//            foreach ($request->file('images') as $image)
//            {
//                $name = $image->getClientOriginalName();
//                $image->storeAs('images', $name, 'public');
//                $data[] = $name;
//            }
//        }
//
//
//        $product = new Product();
//        $product->name = $request->name;
//        $product->description_en = $request->description_en;
//        $product->description_ru = $request->description_ru;
//        $product->description_am = $request->description_am;
//        $product->price = $request->price;
//        $product->old_price = $request->old_price;
//        $product->images = $data;
//        $product->category_id = $request->category_id;
//        $product->save();
//
//        return back()->with('message', 'Product has been created successfully!');
//    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * 'admin'  delete product
     */
//    public function deleteProduct($id)
//    {
//        $product = Product::where('id',$id)->first();
//        $productImages = $product->images;
//        foreach ($productImages as $productImage)
//        {
//            Storage::delete('/public/images/'.$productImage);
//        }
//
//        $product->delete();
//        return redirect()->route('show.products')->with('success','Product deleted successfully');
//
//    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * edit product
     */
//    public function editProduct($id)
//    {
//        $categories = Category::all();
//        $product = Product::where('id',$id)->first();
//        return view('admin/edit_product', compact('product','categories'));
//    }

//    public function updateProduct(Request $request)
//    {
//        $request->validate([
//            'name'           => 'required',
//            'description_en' => 'required',
//            'description_ru' => 'required',
//            'description_am' => 'required',
//            'price'          => 'required',
//            'price'          => 'required',
//            'old_price'      => 'required',
//            'images'         => 'required',
//        ]);
//
//        /**
//         * find prod by id
//         */
//        $product = Product::where('id', $request->id)->first();
//        /**
//         * delete images path
//         */
//        $productImages = $product->images ;
//        if (is_array($productImages )){
//            foreach ($productImages as $productImage)
//            {
//                Storage::delete('/public/images/'.$productImage);
//            }
//        }
//
//        /**
//         * move images in images folder
//         */
//        if ($request->hasFile('images'))
//        {
//            foreach ($request->file('images') as $image)
//            {
//                $name = time().$image->getClientOriginalName();
//                $image->storeAs('images', $name, 'public');
//                $data[] = $name;
//            }
//        }
////        dd($data);
//
//        $product->name = $request->name;
//        $product->description_en = $request->description_en;
//        $product->description_ru = $request->description_ru;
//        $product->description_am = $request->description_am;
//        $product->price = $request->price;
//        $product->old_price = $request->old_price;
//        $product->images = $data;
//        $product->category_id = $request->category_id;
//        $product->save();
//
//        return redirect()->route('show.products')->with('message', 'Product has been updated successfully!');
//    }

//    /**
//     * @param $imgName
//     * @param $id
//     * @return \Illuminate\Http\RedirectResponse
//     */
//    public function deleteProductImage($imgName,$id)
//    {
//        $product  = Product::where('id',$id)->first();
//        $images = $product->images;
//        foreach ($images as $image){
//            if ( $image == $imgName ){
//                Storage::delete('/public/images/'.$imgName);
//            }else{
//                $data[] = $image;
//            }
//        }
//        $product->images = $data;
//        $product->save();
//        return redirect()->back()->with('massege','image deleted successfully!');
//    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * 'admin'  show user list
     */
    public function showUserList()
    {
        $users = User::all();
        return view('admin/user_list',compact('users'));
    }
}
