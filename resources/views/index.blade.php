@extends('layouts.layout')
@section('title', 'Home')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
{{-- Add the new slick-theme.css if you want the default styling --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@endpush
@section('content')
    <div class="content_wrapper">
        <div class="owl-carousel owl-theme carousel-section" id="carousel">
            <div class="item">
                <img src="{{ asset('assets/images/sincerely-media-qeDcKFADdp8-unsplash.jpg') }}" alt="">
                <div class="carousel-caption">
                    <h1 class="animated animate__fadeInLeft">GREAT RANGE OF <br> EXCLUSIVE T-SHIRTS <br> PACKAGES</h1>
                    <p class="animated animate__flipInX">Exclusive T-shirts Packages to Suit every need</p>
                    <p class="animated animate__fadeInDownBig">Starting at: <span class="price">$9.99</span></p>
                    <a class="animated animate__fadeInUp" href="">Shop Now</a>
                </div>    
            </div>
            <div class="item">
                <img src="{{ asset('assets/images/content-pixie-ZB4eQcNqVUs-unsplash.jpg') }}" alt="">
                <div class="carousel-caption">
                    <h1 class="animated" style="animation-delay: 0.5s">All New Hand Bags <br> Affordable for all </h1>
                    <p class="animated" style="animation-delay: 0.5s">up to 25% Flat Sale</p>
                    <p class="animated" style="animation-delay: 0.5s">@ <span class="price">$29.99</span></p>
                    <a class="animated" href="" style="animation-delay: 0.5s">Shop Now</a>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('assets/images/isabel-garza-wQbHY0M-YOk-unsplash.jpg') }}" alt="">
                <div class="carousel-caption">
                    <h1 class="animated" style="animation-delay: 0.5s">EXTRA 25% OFF <br><span>Online Payment <span></span></span></h1>
                    <p class="animated" style="animation-delay: 0.5s">Accessories to complete <br> your everyday Outfit.</p>
                    <a class="animated" style="animation-delay: 0.5s" href="">Shop Now</a>
                </div>
            </div>
        </div>

        <div class="container-fluid about_section">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                        <div class="about_img">
                            <figure><img src="assets/images/about.png" alt="img"></figure>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                        <div class="about_box">
                            <h3>About Us</h3>
                            <span>Our Mobile Shop</span>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the </p>

                        </div>
                
                </div>
            </div>
        </div>

        <div class="img_wrapper">
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <figure>
                        <img src="{{ asset('assets/images/digital-electronic-banner.jpg') }}" alt="">
                    </figure>
                </div>
            </div>
        </div>

        <div class="product_category">
            <div class="category_body">
                <div class="container">
                    <div class="content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active owl-carousel owl-theme" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/asmaa-elmasrey-Cex2C1ABarg-unsplash.jpg') }}">
                                        <p class="product_name">Manala Pilot Wrist Watch Black Costumed MD-011</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="price">$24.00</span>
                                    </a>
                                </div>
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/irene-kredenets-dwKiHoqqxk8-unsplash.jpg') }}">
                                        <p class="product_name">Men's Merrell Moab 2 Vent Hiking Shoe</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="reduced_price">$99.00</span>
                                        <span class="cancelled_price">$99.00</span>
                                    </a>
                                </div>
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/stil-D4jRahaUaIc-unsplash.jpg') }}">
                                        <p class="product_name">Trending Quality Black Shoulder Hand Bag</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="price">$35.50</span>
                                    </a>
                                </div>
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/aubrey-hicks-BLvJZdPkP94-unsplash.jpg') }}">
                                        <p class="product_name">Unisex Face Caps Design To Users Request</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="price">$9.99</span>
                                    </a>
                                </div>
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/xps-Gi3iUJ1FwxI-unsplash.jpg') }}">
                                        <p class="product_name">Hp Stream 11 Intel Celeron <i class="far fa-registered"></i> 4GB RAM 32GB</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="price">$250.00</span>
                                    </a>
                                </div>
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/brdnk-vision-RB-mwU3gjsk-unsplash.jpg') }}">
                                        <p class="product_name">Lois Caron LCS-4027 Analog Watch - For Men</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="price">$24.00</span>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade owl-carousel owl-theme" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/asmaa-elmasrey-Cex2C1ABarg-unsplash.jpg') }}">
                                        <p class="product_name">Manala Pilot Wrist Watch Black Costumed MD-011</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="price">$24.00</span>
                                    </a>
                                </div>
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/irene-kredenets-dwKiHoqqxk8-unsplash.jpg') }}">
                                        <p class="product_name">Men's Merrell Moab 2 Vent Hiking Shoe</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="reduced_price">$99.00</span>
                                        <span class="cancelled_price">$99.00</span>
                                    </a>
                                </div>
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/stil-D4jRahaUaIc-unsplash.jpg') }}">
                                        <p class="product_name">Trending Quality Black Shoulder Hand Bag</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="price">$35.50</span>
                                    </a>
                                </div>
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/aubrey-hicks-BLvJZdPkP94-unsplash.jpg') }}">
                                        <p class="product_name">Unisex Face Caps Design To Users Request</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="price">$9.99</span>
                                    </a>
                                </div>
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/xps-Gi3iUJ1FwxI-unsplash.jpg') }}">
                                        <p class="product_name">Hp Stream 11 Intel Celeron <i class="far fa-registered"></i> 4GB RAM 32GB</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="price">$250.00</span>
                                    </a>
                                </div>
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/brdnk-vision-RB-mwU3gjsk-unsplash.jpg') }}">
                                        <p class="product_name">Lois Caron LCS-4027 Analog Watch - For Men</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="price">$24.00</span>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade owl-carousel owl-theme" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/asmaa-elmasrey-Cex2C1ABarg-unsplash.jpg') }}">
                                        <p class="product_name">Manala Pilot Wrist Watch Black Costumed MD-011</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="price">$24.00</span>
                                    </a>
                                </div>
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/irene-kredenets-dwKiHoqqxk8-unsplash.jpg') }}">
                                        <p class="product_name">Men's Merrell Moab 2 Vent Hiking Shoe</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="reduced_price">$99.00</span>
                                        <span class="cancelled_price">$99.00</span>
                                    </a>
                                </div>
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/stil-D4jRahaUaIc-unsplash.jpg') }}">
                                        <p class="product_name">Trending Quality Black Shoulder Hand Bag</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="price">$35.50</span>
                                    </a>
                                </div>
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/aubrey-hicks-BLvJZdPkP94-unsplash.jpg') }}">
                                        <p class="product_name">Unisex Face Caps Design To Users Request</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="price">$9.99</span>
                                    </a>
                                </div>
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/xps-Gi3iUJ1FwxI-unsplash.jpg') }}">
                                        <p class="product_name">Hp Stream 11 Intel Celeron <i class="far fa-registered"></i> 4GB RAM 32GB</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="price">$250.00</span>
                                    </a>
                                </div>
                                <div class="item animate__animated animate__zoomIn">
                                    <a href="">
                                        <img src="{{ asset('assets/images/brdnk-vision-RB-mwU3gjsk-unsplash.jpg') }}">
                                        <p class="product_name">Lois Caron LCS-4027 Analog Watch - For Men</p>
                                        <p class="rating">
                                            <i class="fa fa-star" data-index="0"></i>
                                            <i class="fa fa-star" data-index="1"></i>
                                            <i class="fa fa-star" data-index="2"></i>
                                            <i class="fa fa-star" data-index="3"></i>
                                            <i class="fa fa-star" data-index="4"></i>
                                        </p>
                                        <span class="price">$24.00</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category_intro container">
                <div class="intro_header">
                    PRODUCT CATEGORY
                </div>
                <div class="intro_body">
                    <figure>
                        <img src="{{ asset('assets/images/mnz-ToLMORRb97Q-unsplash.jpg') }}" alt="">
                        <div class="text">
                            <p>New Fall Season 2020</p>
                            <p>Women's & Men's</p>
                            <p>PRINTED FASHION</p>
                            <button type="button">Amazing collection</button>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="container">
                <div class="slick_container shadow">
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
        <div class="container">
            <img src="{{ asset('assets/images/brandfest_adidas_BrandDay_TopStrip.gif') }}" alt="" class="adidas">
        </div>
    </div>    
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
@endpush