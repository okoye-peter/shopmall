@extends('layouts.layout')
@section('title', 'Home')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@endpush
@section('content')
    <div class="content_wrapper">
        <div id="slider" class="carousel slide" data-ride="carousel">
            <!-- slide show -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/sincerely-media-qeDcKFADdp8-unsplash.jpg') }}" alt="">
                    <div class="carousel-caption">
                        <h1 class="wow bounceInRight" data-wow-offset="300">GREAT RANGE OF <br> EXCLUSIVE T-SHIRTS <br> PACKAGES</h1>
                        <p class="wow bounceInLeft">Exclusive T-shirts Packages to Suit every need</p>
                        <p class="wow fadeInUp">Starting at: <span class="price">$9.99</span></p>
                        <a class="wow fadeInUp" href="">Shop Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/content-pixie-ZB4eQcNqVUs-unsplash.jpg') }}" alt="">
                    <div class="carousel-caption">
                        <h1 class="wow bounceInRight" data-wow-offset="300">All New Hand Bags <br> Affordable for all </h1>
                        <p>up to 25% Flat Sale</p>
                        <p class="wow fadeInUp">@ <span class="price">$29.99</span></p>
                        <a class="wow fadeInUp" href="">Shop Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/isabel-garza-wQbHY0M-YOk-unsplash.jpg') }}" alt="">
                    <div class="carousel-caption">
                        <h1>EXTRA 25% OFF <br><span>Online Payment <span></span></span></h1>
                        <p>Accessories to complete <br> your everyday Outfit.</p>
                        <a class="wow fadeInUp" href="">Shop Now</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#slider" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slider" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <div class="product_category">
            <div class="category_intro">
                <div class="intro_header">
                    PRODUCT CATEGORY
                </div>
                <div class="intro_body">
                    <img src="{{ asset('assets/images/lesther-argueta-AiqsbpRacCg-unsplash.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>    
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script>
        wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        }
        );
        wow.init();
    </script>
@endpush