<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthenticationController extends Controller
{

    public function getCredentials()
    {
        return Socialite::driver('google')->redirect();
    }

    public function store()
    {
        $googleUser = Socialite::driver('google')->user();
        $user = User::firstOrCreate(
            ['email' => $googleUser->email],
            [
                'name' => $googleUser->name,
                'profile_photo_url' => $googleUser->avatar,
                'password' => Hash::make(Str::random(15))
            ]
        );
        Auth::login($user);

        if (!$user->email_verified_at) {
            $user->markEmailAsVerified();
        }

        return redirect('/');
    }

}
