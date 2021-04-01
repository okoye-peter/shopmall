@extends('layouts.layout')
@section('title', 'Home')
@section('content')
    <div class="content_wrapper">
        <div id="slider" class="carousel slide" data-ride="carousel">
            <!-- slide show -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/sincerely-media-qeDcKFADdp8-unsplash.jpg') }}" alt="">
                    <div class="carousel-caption">
                        <h1>GREAT RANGE OF <br> EXCLUSIVE T-SHIRTS <br> PACKAGES</h1>
                        <p>Exclusive T-shirts Packages to Suit every need</p>
                        <p>Starting at: <span class="price">$9.99</span></p>
                        <a href="">Shop Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/content-pixie-ZB4eQcNqVUs-unsplash.jpg') }}" alt="">
                    <div class="carousel-caption">
                        <h1>GREAT RANGE OF <br> EXCLUSIVE T-SHIRTS <br> PACKAGES</h1>
                        <p>Exclusive T-shirts Packages to Suit every need</p>
                        <p>Starting at: <span class="price">$9.99</span></p>
                        <a href="">Shop Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/isabel-garza-wQbHY0M-YOk-unsplash.jpg') }}" alt="">
                    <div class="carousel-caption">
                        <h1>GREAT RANGE OF <br> EXCLUSIVE T-SHIRTS <br> PACKAGES</h1>
                        <p>Exclusive T-shirts Packages to Suit every need</p>
                        <p>Starting at: <span class="price">$9.99</span></p>
                        <a href="">Shop Now</a>
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
    </div>    
@endsection