@extends('layouts.layout')
@section('title', 'WishList')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/wishlist.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
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
        <client-chat-component source={{asset('assets/images/karsten-winegeart-KSqfFHtHpro-unsplash.jpg')}}></client-chat-component>
    </div>
@endsection
@push('script')
    
@endpush