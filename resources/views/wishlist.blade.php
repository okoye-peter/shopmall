@extends('layouts.layout')
@section('title', 'WishList')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/wishlist.css') }}">
@endpush
@section('content')
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                <div class="shadow">
                    <div class="image_wrapper">
                        <img src="{{ asset('assets/images/pat-taylor-12V36G17IbQ-unsplash.jpg') }}" alt="">
                    </div>
                    <div class="name_wrapper">
                        <a href="#" class="name">Junming Watch Man Business Vogue Male Form Machine Form Wris</a>
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
        </div>
    </div>
@endsection
@push('script')
    
@endpush