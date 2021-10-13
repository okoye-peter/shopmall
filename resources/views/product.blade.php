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
@endpush
@section('content')
    <div class="container mt-3">
        <div class="row my-4">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb-3">
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
                                <form action="" method="post">
                                    @csrf
                                    
                                    @if (1==1)    
                                        <button type="submit"  data-bs-toggle="tooltip" data-bs-placement="top" title="remove from wishlist" name="add_to_wishlist">
                                            <i class="fas fa-heart"></i>
                                        </button>  
                                    @else
                                        <button type="submit"  data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist" name="add_to_wishlist">
                                            <i class="far fa-heart"></i>
                                        </button>    
                                    @endif
                                </form>
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
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                            <div class="price_wrapper">
                                <span class="currrency">$</span> 
                                <span class="price">9.99</span>
                            </div>
                            <form action="" method="post" data-parsley-validate id="add_to_cart">
                                @csrf
                                <div class="quantity-input">
                                    <input type="text" name="quatity" value="1" data-parsley-type="integer" data-parsley-required data-parsley-min="1"> 

                                    <button class="btn-reduce" type="button">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <button class="btn-increase" type="button">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <button type="submit" class="add_to_cart_btn">Add to Cart</button>
                            </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/product.js') }}"></script>
@endpush