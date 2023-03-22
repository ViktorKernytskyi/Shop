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
        $products = Product::all();
        $brands = Brand::all();
        $categories = Category::query()
            ->with('products')
            ->get();

        return view('index', [
            'products' => $products,
            'recProducts' => $products->chunk(3),
            'categories' => $categories,
            'brands' => $brands
        ]);
    }

//    public function cart()
//    {
//        $products = Product::all();
//
//        return view('cart', [
//            'products' => $products
//        ]);
//    }
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
        \Auth::logout();
//        dd(auth()->user());
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
