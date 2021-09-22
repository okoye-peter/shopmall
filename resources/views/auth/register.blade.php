{{-- <x-guest-layout>
    @section('css')
        <style>
            .form_wrapper{
                padding: 0em 4em;
            }
        </style>
    @endsection
    <div class="container-fluid form_wrapper">
        <div class="row">

            <x-jet-authentication-card>
                <x-slot name="logo">
                    <x-jet-authentication-card-logo />
                </x-slot>
        
                <x-jet-validation-errors class="mb-4" />
        
                <form method="POST" action="{{ route('register') }}">
                    @csrf
        
                    <div>
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
        
                        <x-jet-button class="ml-4">
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </form>
            </x-jet-authentication-card>
        </div>
    </div>
</x-guest-layout> --}}
@extends('layouts.layout')
@section('title', 'Register')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
@endpush
@section('content')
    <div class="form_wrapper">
        <div class="container">
            <div class="shadow rounded">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <h3 class="text-center">
                            Register
                        </h3>
                        <x-jet-validation-errors class="mb-4 pl-3" />
                        <form action="{{ route('register') }}" method="post" class="form-inline">
                            @csrf
        
                            <div class="form-group">
                                <label class="font-medium text-sm text-gray-700" for="name">Name</label>
                                <input id="name" class="mt-1 ml-2 form-control" type="text" name="name" value="{{old('name')}}" required autofocus autocomplete="name" />
                            </div>
                
                            <div class="mt-4 form-group">
                                <label class="font-medium text-sm text-gray-700" for="email">Email</label>
                                <input id="email" class="mt-1 ml-2 form-control" type="email" name="email" value="{{old('email')}}" required />
                            </div>
                
                            <div class="mt-4 form-group">
                                <label class="font-medium text-sm text-gray-700" for="password">Password</label>
                                <input id="password" class="mt-1 ml-2 form-control" type="password" name="password" required autocomplete="new-password" />
                            </div>
                
                            <div class="mt-4 form-group">
                                <label class="font-medium text-sm text-gray-700" for="password_confirmation">Confirm Password</label>
                                <input id="password_confirmation" class="mt-1 ml-2 form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>
                
                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                
                                <x-jet-button class="ml-4">
                                    {{ __('Register') }}
                                </x-jet-button>
                            </div>  
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <img src="{{ asset('assets/images/freestocks-_3Q3tsJ01nc-unsplash.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

