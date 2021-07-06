<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DateTime;

class ShopController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * show shop index page
     */
    public function index()
    {
        return view('shop/index');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * show product detail
     */
    public function showProductDetail()
    {
        return view('shop/product_detail');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * show user shopping cart
     */
    public function showShoppingCart()
    {
        return view('shop/shopping_cart');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * show user wishlist
     */
    public function showWishList()
    {
        return view('shop/wishlist');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * product quick view __(about product)
     */
    public function quickView()
    {
        return view('shop/quick_view');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showProductList(Request $request)
    {
        $data = $request->data;
        $list = $request->type;
        if ($data == 'NewArrivals'){
            $date = Carbon::now()->subDays(7);
            $products = Product::with('Category')->where('created_at', '>=', $date)->orWhere('updated_at', '>=', $date)->paginate(15);
            if ($list == 'list'){
                return view('shop/list',compact('products','data'));
            }else{
                return view('shop/grid',compact('products','data'));
            }
        }elseif($data == 'Special'){
            dd($data);
        }else{
            // todo vercnel esorva vacharvac aprqanqner@
//            $date = Carbon::now()->startOfDay();
//            $todayProduct = Product::where('created_at', '>=', $date)->get();
            dd($data);
        }
        return view('shop/list');
    }

}
