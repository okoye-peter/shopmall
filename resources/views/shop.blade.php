@extends('layouts.layout')
@section('title', 'Home')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/shop.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <div class="shadow">
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
                    <div class="discount_section"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12"></div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    </script>
@endpush