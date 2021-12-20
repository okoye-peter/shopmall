@extends('layouts.layout')
@section('title', 'product')
@push('styles')
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css'/>
@endpush
@section('content')
    <div class="container mt-3">
        <div class="row my-4">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb-3">
                <div class="row px-0">
                    <div class="col-lg-5 col-md-12 pl-4">
                        <div class="display_wrapper">
                            <div class="owl-carousel owl-theme grid_container" uk-lightbox="animation: scale" id="grid_container">
                                <a class="item" href='{{ asset("$product->url") }}' data-dot="<button role='button'><img src='{{ asset("$product->url") }}'></button>">
                                    <img src='{{ asset("$product->url") }}' alt="">
                                </a>
                                @foreach ($product->files as $file)    
                                    <a class="item" href='{{ asset("$file->url") }}'data-dot="<button role='button'><img src='{{ asset("$file->url") }}'></button>">
                                        <img src='{{ asset("$file->url") }}' alt="">
                                    </a>
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="row ml-4 details_wrapper pb-1">
                            <div class="col-lg-10">
                                <h2 class="pr-5">{{ $product->name }}</h2>
                            </div>
                            <div class="col-lg-2">
                                <add-to-wishlist-component :product="{{ collect($product->only(['id','name'])) }}">
                            </div>
                        </div>
                        <div class="description">
                            <div class="d-flex align-items-center">
                                <p class="ratings">
                                    <span class="half"></span>
                                    <span class="full"></span>
                                    <span class="half"></span>
                                    <span class="full"></span>
                                    <span class="half"></span>
                                    <span class="full"></span>
                                    <span class="half"></span>
                                    <span class="full"></span>
                                    <span class="half"></span>
                                    <span class="full"></span>
                                </p>
                                (<span class="total_review">15000 review</span>)
                            </div>
                            <h4>DESCRIPTION</h4>
                            <p>
                                {{ $product->description }}
                            </p>
                            <div class="price_wrapper">
                                <span class="currrency">$</span> 
                                <span class="price">{{ $product->price }}</span>
                            </div>
                            <add-to-cart-component :product="{{ collect($product->only(['name','id'])) }}"></add-to-cart-component>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                <img src="{{asset('assets/images/svg/Basket 06.jpg')}}" class="sales_off">
            </div>
        </div>
        <div class="related_products mt-4">
            <div class="slick_container shadow" id="related_product">
                <div class="item animate__animated animate__zoomIn">
                    <a href="" class="shadow">
                        <img src="{{ asset('assets/images/watch.jpg') }}">
                        <p class="product_name">Casio MTP-E320RL-2EVDF Men's Multifunction Blue Dial, Leather Watch</p>
                        <span class="price">$9.99</span>
                    </a>
                </div>
                <div class="item animate__animated animate__zoomIn">
                    <a href="" class="shadow">
                        <img src="{{ asset('assets/images/irene-kredenets-dwKiHoqqxk8-unsplash.jpg') }}">
                        <p class="product_name">Men Casual Shoes Fashion Male Sneakers-Black</p>
                        <span class="price">$14.99</span>
                    </a>
                </div>
                <div class="item animate__animated animate__zoomIn">
                    <a href="" class="shadow">
                        <img src="{{ asset('assets/images/arno-senoner-oCXVxwTFwqE-unsplash.jpg') }}">
                        <p class="product_name">Hand Bag Women Shoulder Bags Female Top-handle Bags</p>
                        <span class="price">$11.99</span>
                    </a>
                </div>
                <div class="item animate__animated animate__zoomIn">
                    <a href="" class="shadow">
                        <img src="{{ asset('assets/images/robbie-noble-JGcaxNi2fQ8-unsplash.jpg') }}">
                        <p class="product_name">Unisex Face Caps Design To Users Request</p>
                        <span class="price">$7.99</span>
                    </a>
                </div>
                <div class="item animate__animated animate__zoomIn">
                    <a href="" class="shadow">
                        <img src="{{ asset('assets/images/lea-ochel-nsRBbE6-YLs-unsplash.jpg') }}">
                        <p class="product_name">Unisex Face Caps Design To Users Request</p>
                        <span class="price">$9.99</span>
                    </a>
                </div>
                <div class="item animate__animated animate__zoomIn">
                    <a href="" class="shadow">
                        <img src="{{ asset('assets/images/djordje_jovicic-l1mVJnG7a84-unsplash.jpg') }}">
                        <p class="product_name">Unisex Face Caps Design To Users Request</p>
                        <span class="price">$9.99</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <script src="{{ asset('assets/js/product.js') }}"  defer></script>
@endpush