@extends('layouts.layout')
@section('title', 'Home')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
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
                        <h1 class="wow bounceInLeft" data-wow-offset="300">GREAT RANGE OF <br> EXCLUSIVE T-SHIRTS <br> PACKAGES</h1>
                        <p class="wow bounceInRight">Exclusive T-shirts Packages to Suit every need</p>
                        <p class="wow fadeInUp">Starting at: <span class="price">$9.99</span></p>
                        <a class="wow fadeInUp" href="">Shop Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/content-pixie-ZB4eQcNqVUs-unsplash.jpg') }}" alt="">
                    <div class="carousel-caption">
                        <h1 class="wow bounceInLeft" data-wow-offset="300" style="animation-delay: 2s">All New Hand Bags <br> Affordable for all </h1>
                        <p class="wow bounceInRight" style="animation-delay: 0.5s">up to 25% Flat Sale</p>
                        <p class="wow fadeInUp" style="animation-delay: 0.5s">@ <span class="price">$29.99</span></p>
                        <a class="wow fadeInUp" href="" style="animation-delay: 0.5s">Shop Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/isabel-garza-wQbHY0M-YOk-unsplash.jpg') }}" alt="">
                    <div class="carousel-caption">
                        <h1 class="wow bounceInLeft" data-wow-offset="300" style="animation-delay: 0.5s">EXTRA 25% OFF <br><span>Online Payment <span></span></span></h1>
                        <p class="wow bounceInRight" style="animation-delay: 0.5s">Accessories to complete <br> your everyday Outfit.</p>
                        <a class="wow fadeInUp" style="animation-delay: 0.5s" href="">Shop Now</a>
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
                    <figure>
                        <img src="{{ asset('assets/images/yaoqi-lai-GXnhban55pQ-unsplash.jpg') }}" alt="">
                        <div class="text">
                            <p>New Fall Season 2020</p>
                            <p>Women's & Men's</p>
                            <p>PRINTED FASHION</p>
                            <button type="button">Amazing collection</button>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="category_body">
                <div class="container">
                    <div class="content">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
                            </li>
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                <div class="item"><a href=""><img src="{{ asset('assets/images/asmaa-elmasrey-Cex2C1ABarg-unsplash.jpg') }}" alt=""></a></div>
                                <div class="item"><a href=""><img src="{{ asset('assets/images/irene-kredenets-dwKiHoqqxk8-unsplash.jpg') }}" alt=""></a></div>
                                <div class="item"><a href=""><img src="{{ asset('assets/images/stil-D4jRahaUaIc-unsplash.jpg') }}" alt=""></a></div>
                                <div class="item"><a href=""><img src="{{ asset('assets/images/aubrey-hicks-BLvJZdPkP94-unsplash.jpg') }}" alt=""></a></div>
                                <div class="item"><a href=""><img src="{{ asset('assets/images/xps-Gi3iUJ1FwxI-unsplash.jpg') }}" alt=""></a></div>
                                <div class="item"><a href=""><img src="{{ asset('assets/images/brdnk-vision-RB-mwU3gjsk-unsplash.jpg') }}" alt=""></a></div>
                            </div>
                            <div class="tab-pane fade" id="menu1">Menu 1</div>
                            <div class="tab-pane fade" id="menu2">Menu 2</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>    
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script>
        wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        });

        wow.init();
        function set_aninmation(){
            let carousels = document.querySelectorAll('.carousel-item');
            carousels.forEach(function(carousel) {
                if(carousel.classList.contains('active')){
                    let h1 = carousel.querySelector('h1');
                    h1.classList.remove('bounceInLeft');
                    h1.classList.add('bounceInLeft');

                    let p1 = h1.nextElementSibling;
                    p1.classList.remove('bounceInRight');
                    p1.classList.add('bounceInRight')
                    if (p1.nextElementSibling.matches('p')) {
                        p1.nextElementSibling.classList.remove('fadeInUp');
                        p1.nextElementSibling.classList.add('fadeInUp');
                    } 
                    carousel.querySelector('a').classList.remove('fadeInUp');
                    carousel.querySelector('a').classList.add('fadeInUp')
                }
                // else{
                //     let h1 = carousel.querySelector('h1');
                //     h1.classList.remove('wow');
                //     h1.classList.remove('bounceInLeft');
                //     let p1 = h1.nextElementSibling;
                //     p1.classList.remove('wow');
                //     p1.classList.remove('bounceInRight')
                //     if (p1.nextElementSibling.matches('p')) {
                //         p1.nextElementSibling.classList.remove('wow');
                //         p1.nextElementSibling.classList.remove('fadeInUp');
                //     } 
                //     carousel.querySelector('a').classList.remove('wow');
                //     carousel.querySelector('a').classList.remove('fadeInUp')
                // }
            });
        }
        $(document).ready(function(){
            $(".carousel-control-prev").click(function(){
                set_aninmation()
            });
            $(".carousel-control-next").click(function(){
                set_aninmation()
            });
            $("#myCarousel").on('slide.bs.carousel', function(){
                set_aninmation();
            });
    //         setInterval(set_aninmation, 3500)
        });
        $('.tab-pane').slick({
            slidesToShow: 4,
            slidesToScroll:1,
            dots:false,
            arrow:true,
            autoplay:true,
            autoplaSpeed:2000,
            infinite:true
        })
    </script>
@endpush