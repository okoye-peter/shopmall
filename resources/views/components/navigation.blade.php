<!-- section one begins-->
<section class="section_one">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-2 col-sm-12 col-12">
                <span><i class="fa fa-mobile-alt"></i> HotLine: (+234) 8175719656</span>
            </div>
            <div class="col-lg-9 col-md-10 col-sm-12 col-12 d-flex justify-content-end align-items-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item drop">
                        <a class="nav-link" href="#"><img src="{{ asset('assets/images/lang/lang-en.png') }}"> <span>English</span> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="drop-down drop-toggle">
                            <li><a class="nav-link" href="#"><img src="{{ asset('assets/images/lang/lang-en.png') }}">  English</a></li>
                            <li><a class="nav-link" href="#"><img src="{{ asset('assets/images/lang/lang-can.png') }}"> Canada</a></li>
                            <li><a class="nav-link" href="#"><img src="{{ asset('assets/images/lang/lang-fra.png') }}"> France</a></li>
                            <li><a class="nav-link" href="#"><img src="{{ asset('assets/images/lang/lang-ger.png') }}"> Germany</a></li>
                            <li><a class="nav-link" href="#"><img src="{{ asset('assets/images/lang/lang-hun.png') }}"> Hungry</a></li>
                        </ul>
                    </li>
                    <li class="nav-item drop-currency">
                        <a class="nav-link" href="#"><span>Dollar (USD)</span> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="drop-down-currency drop-currency-toggle">
                            <li><a class="nav-link" href="#">Pound (GBP)</a></li>
                            <li><a class="nav-link" href="#">Euro (EUR)</a></li>
                            <li><a class="nav-link" href="#">Dollar (USD)</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- section one ends -->

<!-- section two begins -->
<section class="section_two">
    <div class="container">
        <div class="row align-content-center">
            <!-- Logo -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <!-- shop fest -->
                <img src="{{ asset('assets/images/logo.jpg') }}" alt=""> <span>Teberna laetus</span>
            </div>
            <!-- search form -->
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 align-self-center">
                <form method="GET">
                    <input type="text" name="keyword" placeholder="Search...">
                    <p class="category"><span>All Category</span> <i class="fa fa-sort-down"></i></p>
                    <!-- category -->
                    <input type="hidden" name="category" value="all category">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <dl class="category_list">
                    <dt><a href="javascript:void(0)">All Category</a></dt>
                    <dt><a href="javascript:void(0)">Electronics</a></dt>
                        <dd><a href="javascript:void(0)">Televisions & Home Theatre</a></dd>
                        <dd><a href="javascript:void(0)">Headphone & Headset</a></dd>
                        <dd><a href="javascript:void(0)">MP3 Players & Accessories</a></dd>
                    <dt><a href="javascript:void(0)">Smartphone & Tablet</a></dt>
                        <dd><a href="javascript:void(0)">Samsung</a></dd>
                        <dd><a href="javascript:void(0)">Hawaii</a></dd>
                        <dd><a href="javascript:void(0)">Xiaomi</a></dd>
                        <dd><a href="javascript:void(0)">Iphone</a></dd>
                        <dd><a href="javascript:void(0)">Gioone</a></dd>
                    <dt><a href="javascript:void(0)">Clothes & Footwears</a></dt>
                        <dd><a href="javascript:void(0)">T-shirt</a></dd>
                        <dd><a href="javascript:void(0)">Trousers</a></dd>
                        <dd><a href="javascript:void(0)">Hoodie</a></dd>
                        <dd><a href="javascript:void(0)">Sandals</a></dd>
                        <dd><a href="javascript:void(0)">Shoes</a></dd>
                        <dd><a href="javascript:void(0)">Glasses</a></dd>
                </dl>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <a href="#">
                    <section>
                        <i class="fa fa-heart fa-2x"></i>
                        <aside>
                            <span class="wishlist_wrapper">
                                <span class="wishlist">0</span> item(s)
                            </span>
                            <span>wishlist</span>
                        </aside>
                    </section>
                </a>
                <a href="#">
                    <section>
                        <i class="fa fa-shopping-basket fa-2x"></i>
                        <aside>
                            <span class="cart_wrapper">
                                <span class="cart">0</span> item(s)
                            </span>
                            <span>cart</span>
                        </aside>
                    </section>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- section two ends -->

<!-- section three begins -->
<section class="section_three">
    <nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-dark">
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <ul class="navbar-nav collapse navbar-collapse" id="collapsibleNavbar">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}"><i class="fa fa-home"></i> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SHOP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CART</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CHECKOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT US</a>
            </li>
        </ul>
    </nav>
</section>
<!-- section three ends -->