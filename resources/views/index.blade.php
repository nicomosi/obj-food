<!DOCTYPE html>
<html lang="en">
{{-- Start Head tag --}}
@include('partials._head')
{{-- End Head tag --}}
<body>

    <div class="wrapper">
        <!-- Start Header Section -->
        @include('partials._header')
        <!-- End Header Section -->
        <!-- Start Slider Section -->
        <div id="slider" class="slider-transparent slider-half">
            <div class="flexslider slider-wrapper">
                <ul class="slides">
                    <li>
                        <div class="slider-backgroung-image" style="background-image: url({{url('img/banner-1.jpg')}});">

                            <div class="layer-stretch">
                                <div class="slider-info">
                                    <br>
                                    <h1>Una vianda, un objetivo</h1>
                                    <p >We have created 80+ Pages, 300+ Components or Shortcodes, Popup for this template and more in future. #twitterhash, @facebooktag</p>
                                    <div class="slider-button">
                                        <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect button button-primary button-pill">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- End Slider Section -->
        <!-- Start Team Section -->
        <div class="ecommerce">
            <div class="layer-stretch">
                <div class="layer-wrapper pb-20">
                    <div class="layer-ttl"><h4>Featured <span class="text-primary">Product</span></h4></div>
                    <div class="row pt-4">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-img">
                                    <div class="owl-carousel owl-theme theme-owlslider dots-overlay text-center">
                                        <div class="theme-owlslider-container">
                                            <a href="#"><img class="img-responsive" src="{{url('img/shop-11.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="theme-owlslider-container">
                                            <a href="#"><img class="img-responsive" src="{{url('img/shop-12.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="theme-owlslider-container">
                                            <a href="#"><img class="img-responsive" src="{{url('img/shop-13.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <h5 class="title"><a href="#">Canon Camera</a></h5>
                                    <div class="price">
                                        <del>$79.99</del>$59.99
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-outline btn-dark btn-outline-1x btn-sm m-1">Add to Cart</a>
                                        <a href="#" class="btn btn-outline btn-dark btn-outline-1x btn-sm m-1">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-img">
                                    <a href="#"><img src="{{url('img/shop-21.jpg')}}" alt=""></a>
                                </div>
                                <div class="product-details">
                                    <h5 class="title"><a href="#">Shoes, Watch, Belts, T-shirts</a></h5>
                                    <div class="price">
                                        <del>$179.99</del>$159.99
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-outline btn-dark btn-outline-1x btn-sm m-1">Add to Cart</a>
                                        <a href="#" class="btn btn-outline btn-dark btn-outline-1x btn-sm m-1">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-img">
                                    <div class="owl-carousel owl-theme theme-owlslider dots-overlay text-center">
                                        <div class="theme-owlslider-container">
                                            <a href="#"><img class="img-responsive" src="{{url('img/shop-31.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="theme-owlslider-container">
                                            <a href="#"><img class="img-responsive" src="{{url('img/shop-32.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <h5 class="title"><a href="#">Eyeglass, Watch</a></h5>
                                    <div class="price">$29.99</div>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-outline btn-dark btn-outline-1x btn-sm m-1">Add to Cart</a>
                                        <a href="#" class="btn btn-outline btn-dark btn-outline-1x btn-sm m-1">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Team Section -->
        <!-- Start Team Section -->
        <div class="bg-light">
            <div class="layer-stretch">
                <div class="layer-wrapper pb-20">
                    <div class="layer-ttl"><h4>Latest <span class="text-primary">Prodcut</span></h4></div>
                    <div class="row pt-4">
                        <div class="col-12">
                            <div class="related-product">
                                <div class="owl-carousel owl-theme multi-item-slider">
                                    <div class="theme-owlslider-container">
                                        <img class="img-responsive" src="{{url('img/shop-11.jpg')}}" alt="">
                                        <h6 class="title"><a href="#">Canon Camera</a></h6>
                                        <div class="price">$499</div>
                                    </div>
                                    <div class="theme-owlslider-container">
                                        <img class="img-responsive" src="{{url('img/shop-21.jpg')}}" alt="">
                                        <h6 class="title"><a href="#">Multiple Product</a></h6>
                                        <div class="price">$499</div>
                                    </div>
                                    <div class="theme-owlslider-container">
                                        <img class="img-responsive" src="{{url('img/shop-31.jpg')}}" alt="">
                                        <h6 class="title"><a href="#">Leather Wallet and Watch</a></h6>
                                        <div class="price">$499</div>
                                    </div>
                                    <div class="theme-owlslider-container">
                                        <img class="img-responsive" src="{{url('img/shop-41.jpg')}}" alt="">
                                        <h6 class="title"><a href="#">Leather Wallet and Watch</a></h6>
                                        <div class="price">$499</div>
                                    </div>
                                    <div class="theme-owlslider-container">
                                        <img class="img-responsive" src="{{url('img/shop-51.jpg')}}" alt="">
                                        <h6 class="title"><a href="#">Leather Wallet and Watch</a></h6>
                                        <div class="price">$499</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Team Section -->
        <div class="blog">
            <div class="layer-stretch">
                <div class="layer-wrapper pb-3">
                    <div class="layer-ttl"><h4>Latest <span class="text-primary">News</span></h4></div>
                    <div class="layer-sub-ttl">Would you like to see more?</div>
                    <div class="row pt-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-card">
                                <img src="{{url('img/blog-1.jpg')}}" alt="">
                                <div>
                                    <h4><a href="">iPhone X in Market</a></h4>
                                    <div class="blog-meta">
                                        <p><i class="icon-user"></i><span>Admin</span></p>
                                        <p><i class="icon-clock"></i><span>24 Jul</span></p>
                                        <p><i class="icon-bubble"></i><span>29</span></p>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa fuga officia, sint omnis corporis adipisci reprehenderit...</p>
                                    <a href="#"><span>Read More</span><i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-card">
                                <img src="{{url('img/blog-2.jpg')}}" alt="">
                                <div>
                                    <h4><a href="">Creative Zone</a></h4>
                                    <div class="blog-meta">
                                        <p><i class="icon-user"></i><span>Admin</span></p>
                                        <p><i class="icon-clock"></i><span>24 Jul</span></p>
                                        <p><i class="icon-bubble"></i><span>29</span></p>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa fuga officia, sint omnis corporis adipisci reprehenderit...</p>
                                    <a href="#"><span>Read More</span><i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-card">
                                <img src="{{url('img/blog-3.jpg')}}" alt="">
                                <div>
                                    <h4><a href="">Getting Bored. Try This.</a></h4>
                                    <div class="blog-meta">
                                        <p><i class="icon-user"></i><span>Admin</span></p>
                                        <p><i class="icon-clock"></i><span>24 Jul</span></p>
                                        <p><i class="icon-bubble"></i><span>29</span></p>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa fuga officia, sint omnis corporis adipisci reprehenderit...</p>
                                    <a href="#"><span>Read More</span><i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Action Section -->
        <div class="action">
            <div class="layer-stretch">
                <div class="layer-wrapper text-center">
                    <div class="layer-ttl"><h4>Want to Live Like <span class="text-primary">King</span>. We are Here</h4></div>
                    <div class="action-content">Read more about what we do and our philosophy of design. Judge for yourself The work and results we’ve achieved for other clients, and meet our highly experienced Team who just love to design, develop and deploy. Tell Us Your Story</div>
                    <a href="#" class="btn btn-outline btn-primary btn-pill btn-outline-2x btn-lg mt-3">Contact us</a>
                </div>
            </div>
        </div><!-- End of Action Section -->


        <!-- Start Footer Section -->
        @include('partials._footer')
        <!-- End of Footer Section -->
    </div>


    <!-- **********Included Scripts*********** -->

@include('partials._bottomScripts')

</body>
</html>
