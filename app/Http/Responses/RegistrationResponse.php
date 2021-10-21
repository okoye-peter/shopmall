<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegistrationResponse implements RegisterResponseContract
{
    public function toResponse($request)
    {
        if (url()->previous() == route('login')) {
            return auth()->user() ? redirect()->intended('/') : back()->withErrors(['error' => 'Whoops! something went wrong']);
        }

        return auth()->user()
            ? redirect('/')->with('success','registration successful, check your email for email verification mail')
            : back();
    }
}
