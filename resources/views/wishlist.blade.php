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
            @forelse ($wishlists as $wishlist)
                <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                    <div class="shadow">
                        <div class="image_wrapper">
                            <img src="{{ asset($wishlist->product->url) }}" alt="">
                        </div>
                        <div class="name_wrapper">
                            <a href="#" class="name">{{ $wishlist->product->name }} <span class="price">$ {{$wishlist->product->price}}</span></a>
                        </div>
                        <div class="grid">
                            <form action="" method="post">
                                <button type="submit">submit</button>
                            </form>
                            <form action="{{ route('wishlists.delete') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $wishlist->id }}">
                                <button type="submit">
                                    <i class="fa fa-trash"></i>
                                    <span>Remove</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="h-screen grid grid-cols-1 gap-4 content-center">
                    <h1 class="text-5xl text-gray-800 opacity-50 mt-5 text-center" style="height: fit-content;font-family: 'Calistoga';">No items in your wishlist</h1>
                </div>        
            @endforelse
        </div>
    </div>
@endsection
@push('script')
    
@endpush