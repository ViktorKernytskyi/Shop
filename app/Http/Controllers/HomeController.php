<?php

namespace App\Http\Controllers;

use App\Http\Admin\Categories;
use App\Http\Admin\Products;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('index', [
            'products' => $products
        ]);
    }

    public function cart()
    {
        $products = Product::all();

        return view('cart', [
            'products' => $products
        ]);
    }
    public function notFound()
    {

        return view('404');
    }

    public function checkout(Request $request)
    {
        return view('checkout');
    }

//    public function cart()
//    {
//        return view('cart');
//    }
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
