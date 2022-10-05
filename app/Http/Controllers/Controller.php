<?php

namespace App\Http\Controllers;

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
    }

    protected function setSidebarCategories()
    {
        \View::share('sidebar', Product::query()
            ->select(['categories.name', 'products.brand'])
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->get()->groupBy('name'));
    }
}
