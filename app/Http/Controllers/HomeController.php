<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function notFound()
    {

        return view('404');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function cart()
    {
        return view('cart');
    }
    public function blog( )
    {
        return view('blog');
}

    public function blog_single( )
    {
        return view('blog_single');

    }
    public function contact_us( )
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
    public function product_details( )
    {
        return view('product_details');
    }

}
