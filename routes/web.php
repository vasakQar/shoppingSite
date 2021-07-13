<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shop\ShopController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\LoginController;
use App\Mail\SubscribeMail;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/shop')->group(function () {
    Route::get('/index', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/product_detail/{id?}', [ShopController::class, 'showProductDetail'])->name('shop.product.detail');
    Route::get('/wish_list', [ShopController::class, 'showWishList'])->name('products.wish.list');
    Route::get('/shopping_cart', [ShopController::class, 'showShoppingCart'])->name('shop.shopping.cart');
    Route::get('/quick_view', [ShopController::class, 'quickView'])->name('quick.view');
    Route::get('/product_list/{data?}',[ShopController::class, 'showProductList'])->name('product.list');
    Route::post('/subscribe',[ShopController::class,'userSubscribe'])->name('user.subscribe');
//    Route::get('/subscribe', function() {
//        return new SubscribeMail();
//    });
    Route::get('/send_email',[App\Http\Controllers\Mail\MailController::class,'sendEmail'])->name('send.email');
});

/**
 * admin routes
 */
Route::prefix("admin")->group(function (){

    Route::get('/dashboard',[App\Http\Controllers\Admin\IndexController::class,'index'])->name('admin.dashboard');
    Route::get('/login', [LoginController::class,'showLoginForm'])->name('admin.login');
    Route::post('/login', [LoginController::class,'login'])->name('admin.login.submit');
    Route::post('/logout', [LoginController::class,'logout'])->name('admin.logout');
    Route::get('/user_list', [App\Http\Controllers\Admin\IndexController::class, 'showUserList'])->name('admin.user.list');
    Route::delete('user/{user}', [App\Http\Controllers\Admin\IndexController::class, 'deleteUser'])->name('user.destroy');
    Route::post('user/{user}', [App\Http\Controllers\Admin\IndexController::class, 'blockUser'])->name('user.block');
    /**
     * resource for admin categories
     */
    Route::resource('/categories','App\Http\Controllers\Admin\CategoryController');
    /**
     * resource for admin products
     */
    Route::resource('/products' , 'App\Http\Controllers\Admin\ProductController' );
    Route::delete('/delete_product_image/{imgName}/{id}', [App\Http\Controllers\Admin\ProductController::class, 'deleteProductImage'])->name('delete.product.image');
    /**
     * resource for contact info
     */
    Route::resource('contactUs','App\Http\Controllers\Admin\ContactController');
    Route::resource('socialSites','App\Http\Controllers\Admin\SocialSitesController');
    Route::resource('headerInfo','App\Http\Controllers\Admin\HeaderInfoController');


});

