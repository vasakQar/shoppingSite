<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserSubscribeRequest;
use App\Models\Admin\ContactInfo\HeaderInfo;
use App\Models\Admin\ContactInfo\ContactUs;
use App\Models\Admin\ContactInfo\SocialSite;
use App\Models\Admin\Subscribe;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\DB;
use View;
use App;
use Route;

class ShopController extends Controller
{
    public function __construct()
    {
        $contact     = ContactUs::all();
        $socialSites = SocialSite::all();
        $headerInfo  = HeaderInfo::all();
        View::share('contact', $contact);
        View::share('socialSites',$socialSites);
        View::share('headerInfo',$headerInfo);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * show shop index page
     */
    public function index()
    {

        $bestSellers = Order::with('product')->select('orders.*', DB::raw('SUM(quantity) as count'))->groupBy('product_id')->orderBy('count','DESC')->get();

        $date = Carbon::now()->subDays(7);
        $newArrivalsProducts = Product::with('Category')->where('created_at', '>=', $date)->orWhere('updated_at', '>=', $date)->get();

//         todo vercnel esorva vacharvac aprqanqner@
//            $date = Carbon::now()->startOfDay();
//            $todayProduct = Product::where('created_at', '>=', $date)->get();



        return view('shop/index',compact('bestSellers','newArrivalsProducts'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * show product detail
     */
    public function showProductDetail($id)
    {
        $product = Product::findOrFail($id);
        return view('shop/product_detail',compact('product'));
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

        $sortBy = $request->sortBy;
        $data   = $request->data;
        $list   = $request->type;
        if ($data == 'NewArrivals'){
            $date = Carbon::now()->subDays(40);
            if ($sortBy == 'name'){
                $products = Product::with('Category')->where('created_at', '>=', $date)->orWhere('updated_at', '>=', $date)->orderBy('name','ASC')->paginate(15);
            }elseif ($sortBy == 'price'){
                $products = Product::with('Category')->where('created_at', '>=', $date)->orWhere('updated_at', '>=', $date)->orderBy('price','ASC')->paginate(15);
            }else{
                $products = Product::with('Category')->where('created_at', '>=', $date)->orWhere('updated_at', '>=', $date)->paginate(15);
            }

            if ($list == 'list'){
                return view('shop/list',compact('products','data'));
            }else{
                return view('shop/grid',compact('products','data'));
            }
        }elseif($data == 'Special'){
            dd($data,55555555);
        }else{
            // todo vercnel esorva vacharvac aprqanqner@
//            $date = Carbon::now()->startOfDay();
//            $todayProduct = Product::where('created_at', '>=', $date)->get();
            dd($data,66666666666666);
        }
        return view('shop/list');
    }

    public function userSubscribe(UserSubscribeRequest $request)
    {
        Subscribe::create($request->all());
        return back();
    }

}
