<?php

namespace App\Http\Controllers\Auth\Facebook;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use League\Flysystem\Exception;

class FacebookController extends Controller
{
    public function facebook()
    {
        return Socialite::driver('facebook')->redirect();

    }

    public function facebookRedirect()
    {

        try {
            $user = Socialite::driver('facebook')->user();
            //dd($user);

            $isUser = User::where('fb_id', $user->id)->first();
            //dd($isUser);
            //если  такой пользователь есть авторизуемся
            /**иначе регистрируемся*/

            if($isUser)
            {
                Auth::login($isUser);
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    'password' => encrypt('123456789')
                ]);
                Auth::login($newUser);

            return redirect('/');
            }
        } catch (Exception $e) {
           // throw $e;
            dd($e->getMessage());
        }
    }
}
