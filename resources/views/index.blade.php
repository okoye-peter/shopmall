@extends('layouts.layout')
@section('title', 'Home')
@push('styles')

<link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
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



        <div class="product_category">
            <div class="category_intro container">
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
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/asmaa-elmasrey-Cex2C1ABarg-unsplash.jpg') }}"></a></div>
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/irene-kredenets-dwKiHoqqxk8-unsplash.jpg') }}"></a></div>
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/stil-D4jRahaUaIc-unsplash.jpg') }}"></a></div>
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/aubrey-hicks-BLvJZdPkP94-unsplash.jpg') }}"></a></div>
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/xps-Gi3iUJ1FwxI-unsplash.jpg') }}"></a></div>
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/brdnk-vision-RB-mwU3gjsk-unsplash.jpg') }}"></a></div>
                            </div>
                            <div class="tab-pane fade owl-carousel owl-theme" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/asmaa-elmasrey-Cex2C1ABarg-unsplash.jpg') }}"></a></div>
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/irene-kredenets-dwKiHoqqxk8-unsplash.jpg') }}"></a></div>
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/stil-D4jRahaUaIc-unsplash.jpg') }}"></a></div>
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/aubrey-hicks-BLvJZdPkP94-unsplash.jpg') }}"></a></div>
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/xps-Gi3iUJ1FwxI-unsplash.jpg') }}"></a></div>
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/brdnk-vision-RB-mwU3gjsk-unsplash.jpg') }}"></a></div>
                            </div>
                            <div class="tab-pane fade owl-carousel owl-theme" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/asmaa-elmasrey-Cex2C1ABarg-unsplash.jpg') }}"></a></div>
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/irene-kredenets-dwKiHoqqxk8-unsplash.jpg') }}"></a></div>
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/stil-D4jRahaUaIc-unsplash.jpg') }}"></a></div>
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/aubrey-hicks-BLvJZdPkP94-unsplash.jpg') }}"></a></div>
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/xps-Gi3iUJ1FwxI-unsplash.jpg') }}"></a></div>
                                <div class="item animate__animated animate__zoomIn"><a href=""><img src="{{ asset('assets/images/brdnk-vision-RB-mwU3gjsk-unsplash.jpg') }}"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>    
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script>
        function set_aninmation(e){
            let carousels = document.querySelectorAll('.carousel-item');
            let to = carousels[e.to];
            // let from = carousels[e.from];
            var newone = to.cloneNode(true);
            document.querySelector('.carousel-inner').replaceChild(newone, to);
        }
        $(document).ready(function(){
            let  owl = $("#carousel");
            owl.owlCarousel({
                autoplay: true,
                autoplayhoverpause: true,
                autoplaytimeout: 5000,
                items: 1,
                loop: true,
                nav: true,
                dots:false,
                responsive: {
                    375:{
                        nav: false,
                        animateIn: 'animate__fadeIn',
                        animateOut: 'animate__fadeOut',
                    },
                    425:{
                        nav:false,
                        animateIn: 'animate__fadeIn',
                        animateOut: 'animate__fadeOut',
                    },
                    768:{
                        nav:true,
                    },
                    1024:{  
                        nav:true,
                    }
                }
            });

            owl.on("changed.owl.carousel", function(event){
                let item = event.item.index - 2;
                $('h1').removeClass('animate__fadeInLeft');
                $('p:nth-child(2)').removeClass('animate__flipInX');
                $('p:nth-child(3)').removeClass('animate__fadeInDownBig');
                $('a:last-child').removeClass('animate__fadeInUp');
                $('.owl-item').not('.cloned').eq(item).find('h1').addClass('animate__fadeInLeft');
                $('.owl-item').not('.cloned').eq(item).find('p:nth-child(2)').addClass('animate__flipInX');
                $('.owl-item').not('.cloned').eq(item).find('p:nth-child(3)').addClass('animate__fadeInDownBig');
                $('.owl-item').not('.cloned').eq(item).find('a:last-child').addClass('animate__fadeInUp');
            });

            $("#home").owlCarousel({
                autoplay: true,
                autoplayhoverpause: true,
                autoplaytimeout: 4000,
                items: 4,
                loop: true,
                nav: true,
                dots:false,
                pagination : false,
            });
            
            $("#profile").owlCarousel({
                autoplay: true,
                autoplayhoverpause: true,
                autoplaytimeout: 4000,
                items: 4,
                loop: true,
                nav: true,
                dots:false,
                pagination : false,
            });

            $("#contact").owlCarousel({
                autoplay: true,
                autoplayhoverpause: true,
                autoplaytimeout: 4000,
                items: 4,
                loop: true,
                nav: true,
                dots:false,
                pagination : false,
            });
            

            var tabEl = document.querySelector('button[data-bs-toggle="tab"]')
            tabEl.addEventListener('shown.bs.tab', function (event) {
                event.target.querySelectorAll('.item').forEach(div => {
                    let a = $('item').eq(div);
                    a.removeClass('animate__zoomIn')
                    a.addClass('animate__zoomIn')
                }); // newly activated tab
                event.relatedTarget // previous active tab
            })
            
        });

    

    </script>
@endpush