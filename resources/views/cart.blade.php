@extends('layouts.layout')
@section('title', 'Cart')
@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
@endpush
@section('content')
    <div class="cart_container">
        <div class="container">
            <h1 class="title">Cart</h1>
            <div class="row item_description">
                <div class="col-lg-6">Item</div>
                <div class="col-lg-2">Quantity</div>
                <div class="col-lg-2">Unit Price</div>
                <div class="col-lg-2">Sum-Total</div>
            </div>
            <div class="item_wrapper">
                <div class="rounded shadow">
                    <div class="container-fluid">
                        <div class="row item">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <img src="{{ asset('assets/images/alex-haigh-fEt6Wd4t4j0-unsplash.jpg') }}" alt="">
                                <aside class="details">
                                    <div class="seller">Seller: UNLIMITED DISCOUNTS</div>
                                    <a href="#" class="name">Roundneck Polo_white/green/black/navy/wine/gray</a>
                                        <p class="tablet_price_wrapper">$ <span class="price">9.99</span></p>
                                    <div class="flex">
                                        <form action="" method="post">
                                            <button><i class="far fa-heart"></i> Add To Wishlist</button>
                                        </form>
                                        <form action="" method="post">
                                            <button><i class="fa fa-trash"></i> Remove from cart</button>
                                        </form>
                                    </div>
                                    <div class="tablet grid">
                                        <form action="" method="post">
                                            <input type="text" name="quantity" value="1">
                                            <button class="btn-reduce" type="button">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                            <button class="btn-increase" type="button">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </form>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-lg-2">
                                <select name="quantity" id="">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <p class="price_wrapper">$ <span class="price">9.99</span></p>
                            </div>
                            <div class="col-lg-2">
                                <p class="price_sum_wrapper">$ <span class="price">9.99</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded shadow">
                    <div class="container-fluid">
                        <div class="row item">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <img src="{{ asset('assets/images/alex-haigh-fEt6Wd4t4j0-unsplash.jpg') }}" alt="">
                                <aside class="details">
                                    <div class="seller">Seller: UNLIMITED DISCOUNTS</div>
                                    <a href="#" class="name">Roundneck Polo_white/green/black/navy/wine/gray</a>
                                        <p class="tablet_price_wrapper">$ <span class="price">9.99</span></p>
                                    <div class="flex">
                                        <form action="" method="post">
                                            <button><i class="far fa-heart"></i> Add To Wishlist</button>
                                        </form>
                                        <form action="" method="post">
                                            <button><i class="fa fa-trash"></i> Remove from cart</button>
                                        </form>
                                    </div>
                                    <div class="tablet grid">
                                        <form action="" method="post">
                                            <div>
                                                <input type="text" name="quantity" value="1">
                                                <button class="btn-reduce" type="button">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <button class="btn-increase" type="button">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-lg-2">
                                <select name="quantity" id="">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <p class="price_wrapper">$ <span class="price">9.99</span></p>
                            </div>
                            <div class="col-lg-2">
                                <p class="price_sum_wrapper">$ <span class="price">9.99</span></p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="shadow my-5 p-3 order-details">
                <div class="container-fluid">
                    <h4>Order Summary</h4>
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <section class="prices">
                                    <div class="grid">
                                        <span>SubTotal</span>
                                        <span>$ 9.99</span>
                                    </div>
                                    <div class="grid">
                                        <span>Shipping</span>
                                        <span>Free Shipping</span>
                                    </div>
                            </section>
                            <section>
                                <div class="grid">
                                    <span>Total</span>
                                    <span>$ 9.99</span>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <form action="">
                                <section>
                                    <div class="grid">
                                        <span>Promo code</span>
                                        <input type="text" name="coupon">
                                    </div>
                                    <button type="submit">Check Out</button>
                                </section>
                            </form>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <a href="#" class="links">Clear Cart</a>
                            <a href="#" class="links">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
            @forelse ([1,1,1] as $item)
                
            @empty
                <div class="row">
                    <div class="col-lg-12">
                        <section>
                            <img src="https://www.jumia.com.ng/images/oshun/cart/empty-cart.png" alt="">
                            <h4 class="text-center">Your Cart is Empty!</h4>
                        </section>
                        <section>
                            <p class="text-center">Browser the Category to start shopping</p>
                            <a href="#">Shop Now!!</a>
                        </section>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection

@push('script')
    
@endpush