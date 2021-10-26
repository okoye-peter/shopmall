@extends('layouts.layout')
@section('title', 'Shop')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/shop.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>
@endpush

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="link_direction">
                <a class="cbs" href="/">Home</a>
                <a class="cbs">All Products</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 pl-1">
                <div class="shadow rounded">
                    <article class="category_section">
                        <h2>CATEGORY</h2>
                        <ul>
                            <li>
                                <a href="">Computing</a>
                            </li>
                            <li>
                                <a href="">Electronic</a>
                            </li>
                            <li>
                                <a href="">Sporting Goods</a>
                            </li>
                            <li>
                                <a href="">Garden & Outdoors</a>
                            </li>
                            <li>
                                <a href="">Musical Instrument</a>
                            </li>
                            <li>
                                <a href="">Phones & Tablets</a>
                            </li>
                            <li>
                                <a href="">Games</a>
                            </li>
                            <li>
                                <a href="">Automobile</a>
                            </li>
                        </ul>
                    </article>
                    <div class="price_section">
                        <h2>Price Range</h2>
                        <div class="slider-range-wrap">
                            <div id="slider-range"></div>
                            <span class="min-range">100</span>
                            <span class="max-range">1,000</span>
                        </div>
                    </div>
                    <div class="discount_section pb-4">
                        <form action="">
                            @csrf
                            <h2 class="text-center mb-4">Discount Percentage</h2>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="discount" value="50">
                                    <span>50% or more<span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="discount" value="40">
                                    <span>40% or more<span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="discount" value="30">
                                    <span>30% or more<span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="discount" value="20">
                                    <span>20% or more<span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="discount" value="10">
                                    <span>10% or more<span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                <div class="shadow rounded">
                    <div class="row product_container">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <h2>Shop Online in Nigeria</h2>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="clearfix">
                                <span class="float-right">
                                    <div class="dropdown">
                                        <div class="select">
                                            <span>Sort by</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdown-menu">
                                            <li id="male">Male</li>
                                            <li id="female">Female</li>
                                        </ul>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-lg-3 col-md-2 col-sm-12 col-12">
                            <a class="item" href="#">
                                <img src="{{ asset('assets/images/arno-senoner-HFE2RyC76tw-unsplash.jpg') }}" alt="">
                                <p class="item_name">Oraimo COMPACT 10000mAh Ultra Slim Power Fast Charging Bank</p>
                                <p class="item_price">$ <span>13.99</span></p>
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
                                <form action="" method="post">
                                    @csrf
                                    <button type="submit">Add To Cart</button>
                                </form>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-2 col-sm-12 col-12">
                            <a class="item" href="#">
                                <img src="{{ asset('assets/images/allec-gomes-GVilRey5_yU-unsplash.jpg') }}" alt="">
                                <p class="item_name">Luxury Black Full Metal Digital Lava Wrist Watch- Unisex</p>
                                <p class="item_price">$ <span>9.99</span></p>
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
                                <form action="" method="post">
                                    @csrf
                                    <button type="submit">Add To Cart</button>
                                </form>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-2 col-sm-12 col-12">
                            <a class="item" href="#">
                                <img src="{{ asset('assets/images/gustavo-espindola-qpmtL7N6J-E-unsplash.jpg') }}" alt="">
                                <p class="item_name">Palm BW- Classy Brown White Male Slippers</p>
                                <p class="item_price">$ <span>10.99</span></p>
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
                                <form action="" method="post">
                                    @csrf
                                    <button type="submit">Add To Cart</button>
                                </form>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-2 col-sm-12 col-12">
                            <a class="item" href="#">
                                <img src="{{ asset('assets/images/olive-ImEzF9B91Mk-unsplash.jpg') }}" alt="">
                                <p class="item_name">Elegant Euramerican Water Drop Necklace Jewelry</p>
                                <p class="item_price">$ <span>6.99</span></p>
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
                                <form action="" method="post">
                                    @csrf
                                    <button type="submit">Add To Cart</button>
                                </form>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-2 col-sm-12 col-12">
                            <a class="item" href="#">
                                <img src="{{ asset('assets/images/revolt-164_6wVEHfI-unsplash.jpg') }}" alt="">
                                <p class="item_name">Canvas MENS BRYCE OXFORD CANVAS</p>
                                <p class="item_price">$ <span>12.99</span></p>
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
                                <form action="" method="post">
                                    @csrf
                                    <button type="submit">Add To Cart</button>
                                </form>
                            </a>
                        </div>
                        <div class="row justify-content-center my-2">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function numberWithCommas(x) {
            if (x !== null) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
        }

        $(function() {
            //slider range init set
            $( "#slider-range" ).slider({
                range: true,
                min: 100,
                max: 1000,
                values: [ 100, 1000 ],
                slide: function( event, ui ) {
                    $( "#min" ).html(numberWithCommas(ui.values[ 0 ]) );
                    $( "#max" ).html(numberWithCommas(ui.values[ 1 ]) );
                }
            });
        
            //slider range data tooltip set
            var $handler = $("#slider-range .ui-slider-handle");
        
            $handler.eq(0).append("<b class='amount'><span id='min'>"+numberWithCommas($( "#slider-range" ).slider( "values", 0 )) +"</span></b>");
            $handler.eq(1).append("<b class='amount'><span id='max'>"+numberWithCommas($( "#slider-range" ).slider( "values", 1 )) +"</span></b>");

            //slider range pointer mousedown event
            $handler.on("mousedown",function(e){
                e.preventDefault();
                $(this).children(".amount").fadeIn(300);
            });

            //slider range pointer mouseup event
            $handler.on("mouseup",function(e){
                e.preventDefault();
                $(this).children(".amount").fadeOut(300);
            });
        });

        /*Dropdown Menu*/
        $('.dropdown').click(function () {
                $(this).attr('tabindex', 1).focus();
                $(this).toggleClass('active');
                $(this).find('.dropdown-menu').slideToggle(300);
            });
            $('.dropdown').focusout(function () {
                $(this).removeClass('active');
                $(this).find('.dropdown-menu').slideUp(300);
            });
            $('.dropdown .dropdown-menu li').click(function () {
                $(this).parents('.dropdown').find('span').text($(this).text());
                $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
            });
        /*End Dropdown Menu*/


        // $('.dropdown-menu li').click(function () {
        // var input = '<strong>' + $(this).parents('.dropdown').find('input').val() + '</strong>',
        //     msg = '<span class="msg">Hidden input value: ';
        //     $('.msg').html(msg + input + '</span>');
        // }); 
    </script>
@endpush