<?php

namespace App\Http\Controllers\Auth\Custom;

use App\Http\Controllers\Controller;
use Facade\FlareClient\View;

class CustomController extends Controller
{

    public function index(): View
    {
        return view('index');

    }

    public function login()
    {
        \Auth::logout();
        return view('login_1');
    }

    public function register()
    {
        return view('register');
    }

    public function forgotPassword()
    {
        return view('forgot-password');
    }

    public function updatePassword()
    {
        return view('reset-password');
    }
}
