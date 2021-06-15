<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shop\ShopController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\LoginController;

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
    Route::get('/product_detail', [ShopController::class, 'showProductDetail'])->name('shop.product.detail');
    Route::get('/shopping-cart', [ShopController::class, 'showShoppingCart'])->name('shop.shopping.cart');
    Route::get('/wish_list', [ShopController::class, 'showWishList'])->name('products.wish.list');
    Route::get('/quick_view', [ShopController::class, 'quickView'])->name('quick.view');
});
/**
 * admin routes
 */
Route::prefix("admin")->group(function (){
    Route::get('/dashboard',[IndexController::class,'index'])->name('admin.dashboard');
    Route::get('/login', [LoginController::class,'showLoginForm'])->name('admin.login');
    Route::post('/login', [LoginController::class,'login'])->name('admin.login.submit');
    Route::post('/logout', [LoginController::class,'logout'])->name('admin.logout');
    Route::get('/categories', [IndexController::class, 'showCategories'])->name('show.categories');
    Route::post('/create_category',[IndexController::class,'createCategory'])->name('create.category');
    Route::delete('/delete_category/{id}', [IndexController::class, 'deleteCategory'])->name('delete.category');
    Route::patch('/update_category/{id}', [IndexController::class, 'updateCategory'])->name('update.category');
});
