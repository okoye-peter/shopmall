<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegistrationResponse implements RegisterResponseContract
{
    public function toResponse($request)
    {
        // below is the existing response
        // replace this with your own code

        return auth()->user()
            ? redirect('/')->with('success','registration successful, check your email for email verification mail')
            : back();
    }
}
