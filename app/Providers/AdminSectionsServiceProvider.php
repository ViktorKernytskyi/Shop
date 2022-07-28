<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;

use SleepingOwl\Admin\Admin;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     *
     * Модель - Путь до Секции
     */
    protected $sections = [
        // Модель   -  Путь к секции  \  Имя секции
        User::class => 'App\Http\Admin\Users',
        Product::class => 'App\Http\Admin\Products',
        Category::class => 'App\Http\Admin\Categories',
    ];


    /**
     * Register sections.
     *
     * @param Admin $admin
     * @return void
     */
    public function boot(Admin $admin)
    {
        parent::boot($admin);
    }

}
