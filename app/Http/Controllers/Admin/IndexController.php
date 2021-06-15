<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

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
    public function showCategoreies()
    {
        $categories = Category::paginate(4);
        return view('admin/categories_list', compact('categories'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createCategory(Request $request)
    {
        /**
         * validate
         */
        $request->validate([
            'name_en' => 'required',
            'name_ru' => 'required',
            'name_am' => 'required',
        ]);


        $category = new Category();
        $category->name_en = $request->name_en;
        $category->name_ru = $request->name_ru;
        $category->name_am = $request->name_am;
        $category->save();

        return back()->with('message', 'Category has been created successfully!');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * delete category
     */
    public function deleteCategory($id)
    {
        $category = Category::where('id',$id)->first();
        $category->delete();

        return back()->with('success', 'Category has been deleted successfully!');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * update Category
     */
    public function updateCategory(Request $request)
    {
        $id = $request->id;
        $category = Category::where('id',$id)->first();
        $category->name_en = $request->name_en;
        $category->name_ru = $request->name_ru;
        $category->name_am = $request->name_am;
        $category->save();

        return back()->with('success', 'Category has been updated successfully!');
    }

    public function showProducts()
    {
//        dd(4545564546666);
        return view('admin/products_list');
    }

    public function createNewProduct()
    {
        return view('admin/create_new_product');
    }
    public function createProduct(Request $request)
    {
        dd("create products");
    }

}
