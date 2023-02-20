<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {

        $this->setSidebarCategories();
        $this->setSidebarBrands();
    }

    protected function setSidebarCategories()
    {
        \View::share('sidebar', Product::query()
            ->select(['categories.name', 'products.brand'])
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->get()->groupBy('name'));
    }
    protected function setSidebarBrands()
    {
        \View::share('side_bar', Brand::query()
            ->select(['brands.name'])

            ->get()->groupBy('name'));
    }
}
