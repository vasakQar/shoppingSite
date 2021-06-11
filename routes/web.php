<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shop\ShopController;
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

Route::prefix('shop')->group(function () {
    Route::get('/index', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/product-detail', [ShopController::class, 'showProductDetail'])->name('shop.product.detail');
    Route::get('/shopping-cart', [ShopController::class, 'showShoppingCart'])->name('shop.shopping.cart');
    Route::get('wishlist', [ShopController::class, 'showWishlist'])->name('products.wishlist');
    Route::get('quick_view', [ShopController::class, 'quickView'])->name('quick.view');
});
/**
 * admin routes
 */
Route::prefix("admin")->group(function (){
    Route::get('/dashboard',[App\Http\Controllers\Admin\IndexController::class,'index'])->name('admin.dashboard');
    Route::get('/login', [App\Http\Controllers\Admin\LoginController::class,'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Admin\LoginController::class,'login'])->name('admin.login.submit');
    Route::get('/logout', [App\Http\Controllers\Admin\LoginController::class,'logout'])->name('admin.logout');


});
