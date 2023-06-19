<?php

namespace App\Http\Controllers;

use App\Http\Admin\Categories;
use App\Http\Admin\Products;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Notifications\NewMessage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $users = User::all();
        $products = Product::all();
        $brands = Brand::all();
        $categories = Category::query()
            ->with('products')
            ->get();

        return view('index', [
            'users' => $users,
            'products' => $products,
            'recProducts' => $products->chunk(3),
            'categories' => $categories,
            'brands' => $brands
        ]);
    }

    public function notFound()
    {

        return view('404');
    }

    public function checkout(Request $request)
    {
        $user = User::all();
        return view('checkout', [
            'user' => $user,
            'cart' => session()->get('cart', [])
        ]);

    }

    public function blog( )
    {
        return view('blog');
    }

    public function blogSingle( )
    {
        return view('blog_single');

    }

    public function contactUs( )
    {

        return view('contact_us');
    }

    public function login( )
    {
        \Auth::logout();

        return view('login');
    }

    public function shop( )
    {
        return view('shop');
    }

    public function productDetails( )
    {
        return view('product_details');
    }







}
