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
                {{-- <div class="carousel-item active">
                    <img src="{{ asset('assets/images/sincerely-media-qeDcKFADdp8-unsplash.jpg') }}" alt="">
                    <div class="carousel-caption">
                        <h1 class="wow bounceInRight" data-wow-offset="300">GREAT RANGE OF <br> EXCLUSIVE T-SHIRTS <br> PACKAGES</h1>
                        <p class="wow bounceInLeft">Exclusive T-shirts Packages to Suit every need</p>
                        <p class="wow fadeInUp">Starting at: <span class="price">$9.99</span></p>
                        <a class="wow fadeInUp" href="">Shop Now</a>
                    </div>
                </div> --}}
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/content-pixie-ZB4eQcNqVUs-unsplash.jpg') }}" alt="">
                    <div class="carousel-caption">
                        <h1 class="wow bounceInRight" data-wow-offset="300">All New Hand Bags </h1>
                        <p>up to 25% Flat Sale</p>
                        <p class="wow fadeInUp">At: <span class="price">$29.99</span></p>
                    </div>
                </div>
                {{-- <div class="carousel-item">
                    <img src="{{ asset('assets/images/isabel-garza-wQbHY0M-YOk-unsplash.jpg') }}" alt="">
                    <div class="carousel-caption">
                        <h1>GREAT RANGE OF <br> EXCLUSIVE T-SHIRTS <br> PACKAGES</h1>
                        <p>Exclusive T-shirts Packages to Suit every need</p>
                        <p>Starting at: <span class="price">$9.99</span></p>
                        <a href="">Shop Now</a>
                    </div>
                </div> --}}
            </div>
            <a class="carousel-control-prev" href="#slider" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slider" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
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