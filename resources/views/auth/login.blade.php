@extends('layouts.layout')
@section('title', 'Login')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@endpush
@section('content')
        <div class="container">
            <div class="shadow">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <h2 class="text-center">Login</h2>
                        <x-jet-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            </div>

                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                            <x-jet-button class="ml-4 block btn-block">
                                {{ __('Login') }}
                            </x-jet-button>
                            <a href="{{ route('google.register') }}" class="google">
                                <img src="{{ asset('assets/images/google.png') }}" alt="" class="mr-3">sign-in with google
                            </a>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <img src="{{asset('assets/images/svg/Sale 04.jpg')}}" alt="">
                    </div>    
                </div>
            </div>
        </div>
    @endsection

@push('scripts')
@endpush
