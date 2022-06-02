<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', function () {
    return view('index');
});


Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/product_details', [HomeController::class, 'product_details'])->name('product_details');
Route::get('/blog_single', [HomeController::class, 'blog_single'])->name('blog_single');
Route::get('/contact_us', [HomeController::class, 'contact_us'])->name('contact_us');
//Route::get('contact', [HomeController::class, 'contact'])->name('contact');



