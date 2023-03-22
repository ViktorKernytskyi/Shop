<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    public function github()
    {
        //send the user's request to github
        return Socialite::driver('github')->redirect();
    }

    public function githubRedirect()
    {
        //get oauth request back from github to autenticate user
        $githubUser = Socialite::driver('github')->user();

        $user = User::updateOrCreate([
            'github_id' => $githubUser->id
        ], [
            'name' => $githubUser->nickname,
            'email' => $githubUser->email,
            'password' => Hash::make(Str::random(24)),
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
        ]);

        Auth::login($user, true);
        return redirect('/');
    }
}


