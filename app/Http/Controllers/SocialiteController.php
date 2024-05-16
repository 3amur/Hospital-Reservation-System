<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function login($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function redirect($provider){
        $githubData = Socialite::driver($provider)->user();

        $user = User::firstOrCreate([
            'provider' => $provider,
            'provider_id' => $githubData->getId(),
        ],[
            'name' => $githubData->getName(),
            'email' => $githubData->getEmail(),
        ]);

        Auth::login($user,true);

        return to_route('home');
    }
}
