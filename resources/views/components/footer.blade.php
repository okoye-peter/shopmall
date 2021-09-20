<div class="footer_wrapper">
    <section class="first_section">
        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <i class="fa fa-truck fa-2x"></i>
                    <div class="content">
                        <h3>FREE SHIPPING</h3>
                        <p>Free On Order Over $99</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <i class="fa fa-recycle fa-2x"></i>
                    <div class="content">
                        <h3>GUARANTEE</h3>
                        <p>30 DAYS Money Back</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <i class="fa fa-credit-card fa-2x"></i>
                    <div class="content">
                        <h3>SAFE PAYMENT</h3>
                        <p>Safe your online payment</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <i class="fa fa-life-ring fa-2x"></i>
                    <div class="content">
                        <h3>ONLINE SUPPORT</h3>
                        <p>We Have 24/7 Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="second_section py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <strong>CONTACT DETAILS</strong>
                    <ul>
                        <li><i class="fa fa-map-marker mr-2"></i> 11, Banana Island Lagos State, Nigeria.</li>
                        <li><i class="fa fa-phone-alt mr-2"></i> (+234)081-0307-8096</li>
                        <li><i class="fa fa-envelope mr-2"></i> support@tebernalaetus.com</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <strong>HOTLINE</strong>
                    <p>Call US toll Free</p>
                    <strong>(+234)081-0307-8096</strong>
                    <div class="social_media">
                        <strong>SOCIAL NETWORK</strong>
                        <ul>
                            <li>
                                <a href="#" class="link-to-item" title="twitter">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="link-to-item" title="facebook">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="link-to-item" title="pinterest">
                                    <i class="fab fa-pinterest" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="link-to-item" title="instagram">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="link-to-item" title="vimeo">
                                    <i class="fab fa-vimeo-v" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <strong>WE USING SAFE PAYMENTS:</strong>
                    <div class="d-block">
                        <img src="{{ asset('assets/images/payment.png') }}" alt="">
                    </div>
                    <strong>SIGN UP FOR NEWSLETTER</strong>
                    <form action="" method="post">
                        @csrf
                        <input type="email" name="email" placeholder="Email....">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section class="copyright">
        <div class="container">
            <div class="row justify-content-center">Copyright &copy; {{date('Y')}} Okoye's Foundation.</div>
        </div>
    </section>
</div>