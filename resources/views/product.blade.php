@extends('layouts.layout')
@section('title', 'product')
@push('styles')
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
@endpush
@section('content')
    <div class="container mt-3">
        <div class="row my-4">
            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                <div class="row px-0">
                    <div class="col-lg-5 col-md-12 pl-4">
                        <div class="display_wrapper">
                            <div class="owl-carousel owl-theme grid_container" uk-lightbox="animation: scale" id="grid_container">
                                <a class="item " href="{{ asset('assets/images/fabian-heimann-4R_WEmhx8og-unsplash.jpg') }}" data-dot="<button role='button'><img src={{ asset('assets/images/fabian-heimann-4R_WEmhx8og-unsplash.jpg') }}></button>">
                                    <img src="{{ asset('assets/images/fabian-heimann-4R_WEmhx8og-unsplash.jpg') }}" alt="">
                                </a>
                                <a class="item " href="{{ asset('assets/images/djordje_jovicic-l1mVJnG7a84-unsplash.jpg') }}" data-dot="<button role='button'><img src={{ asset('assets/images/djordje_jovicic-l1mVJnG7a84-unsplash.jpg') }}></button>">
                                    <img src="{{ asset('assets/images/djordje_jovicic-l1mVJnG7a84-unsplash.jpg') }}" alt="">
                                </a>
                                <a class="item " href="{{ asset('assets/images/logan-weaver-jM_xJyX-sPI-unsplash.jpg') }}" data-dot="<button role='button'><img src={{ asset('assets/images/logan-weaver-jM_xJyX-sPI-unsplash.jpg') }}></button>">
                                    <img src="{{ asset('assets/images/logan-weaver-jM_xJyX-sPI-unsplash.jpg') }}" alt="">
                                </a>
                                <a class="item " href="{{ asset('assets/images/bence-balla-schottner-9JORz4CuUcI-unsplash.jpg') }}" data-dot="<button role='button'><img src={{ asset('assets/images/bence-balla-schottner-9JORz4CuUcI-unsplash.jpg') }}></button>">
                                    <img src="{{ asset('assets/images/bence-balla-schottner-9JORz4CuUcI-unsplash.jpg') }}" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="row ml-4 details_wrapper pb-1">
                            <div class="col-lg-10">
                                <h2 class="pr-5">Luxury Black Full Metal Digital Lava Wrist Watch- Unisex</h2>
                            </div>
                            <div class="col-lg-2">
                                {{-- <form action="" method="post" name="add_to_wishlist">
                                    @csrf
                                    <button type="submit"  data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </form> --}}
                                <form action="" method="post" name="remove_from_wishlist">
                                    @csrf
                                    <button type="submit"  data-bs-toggle="tooltip" data-bs-placement="top" title="remove from wishlist">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="description ml-5">
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
                            <h4>DESCRIPTION</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                            <div class="price_wrapper">
                                <span class="currrency">$</span> 
                                <span class="price">9.99</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12"></div>
        </div>
        
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            let owl = $('.owl-carousel');
            owl.owlCarousel({
                loop: true,
                pagination: false,
                navigation: true,
                margin: 20,
                dotsData: true,
                items:1,
                center:true,
                dots:true,
                animateIn:"animate__fadeInDown",
                animateOut:"animate__fadeOutDown"
            })

            $( 'div.owl-dot' ).on( 'click', function(event) {
                event.stopPropagation();
                owl.trigger('to.owl.carousel', [$(this).index(), 300]);
                $( '.owl-dot' ).removeClass( 'active' );
                $(this).addClass( 'active' );    
            })
            
        });
    </script>
@endpush