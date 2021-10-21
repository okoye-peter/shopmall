@extends('layouts.layout')
@section('title', 'WishList')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/wishlist.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200&display=swap" rel="stylesheet">
@endpush
@section('content')
    <div class="container">
        <div class="row my-4">
            {{-- @forelse ([] as $item) --}}
                <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                    <div class="shadow">
                        <div class="image_wrapper">
                            <img src="{{ asset('assets/images/pat-taylor-12V36G17IbQ-unsplash.jpg') }}" alt="">
                        </div>
                        <div class="name_wrapper">
                            <a href="#" class="name">Junming Watch Man Business Vogue Male Form Machine Form Wris <span class="price">$ 11.99</span></a>
                        </div>
                        <div class="grid">
                            <form action="" method="post">
                                <button type="submit">submit</button>
                            </form>
                            <form action="" method="post">
                                <button type="submit">
                                    <i class="fa fa-trash"></i>
                                    <span>Remove</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            {{-- @empty
                    
            @endforelse --}}
        </div>
        <client-chat-component></client-chat-component>
    </div>
@endsection
@push('script')
    
@endpush