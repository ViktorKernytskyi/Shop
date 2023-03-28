<?php

use App\Http\Controllers\Auth\Custom\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" midd leware group. Now create something great!
|
*/
//Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');

//Route::get('login/github', function () {
//    return Socialite::driver('github')->redirect();
//
//});

Route::get('login/github/callback', [GithubController::class, 'githubRedirect'])->name('callback.github.login');
Route::get('login/github', [GithubController::class, 'github'])->name('github.login');
//



Route::prefix('custom')->group(function () {
//   Route::get('login')

    Route::get('register', [UserController::class, 'register'])->name('register');

    Route::get('login_1', [UserController::class, 'login'])->name('login_1');
    Route::post('login_1', [UserController::class, 'loginValidate'])->name('login_1');

    Route::get('forgot-password', [UserController::class, 'forgotPassword'])->name('forgot-password');
    Route::get('forgot-password/{token}', [UserController::class, 'forgotPasswordValidate']);
    Route::post('forgot-password', [UserController::class, 'resetPassword'])->name('forgot-password');

    Route::put('reset-password', [UserController::class, 'updatePassword'])->name('reset-password');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/notFound', [HomeController::class, 'notFound'])->name('404');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/product_details', [HomeController::class, 'productDetails'])->name('product_details');
Route::get('/blog_single', [HomeController::class, 'blogSingle'])->name('blog_single');
Route::get('/contact_us', [HomeController::class, 'contactUs'])->name('contact_us');
//Route::get('contact', [HomeController::class, 'contact'])->name('contact');


Route::post('/addToCart', [CartController::class, 'addToCart'])->name('addToCart');
Route::post('/cartDelete', [CartController::class, 'cartDelete'])->name('cartDelete');
//Route::post('/calcCart', [CartController::class, 'calcCart'])->name('calcCart');
