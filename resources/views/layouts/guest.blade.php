<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title></title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/landing/css/plugins/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/landing/css/main.css?v=5.6')}}" />
    @livewireStyles
</head>

<body>

    <header class="header-area header-style-1 header-height-2">


        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="index.html"><img src="{{asset('assets/landing/imgs/theme/logo.svg')}}" alt="logo" /></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="#">
                                <select class="select-active">
                                    <option>All Categories</option>
                                    <option>Milks and Dairies</option>
                                    <option>Wines & Alcohol</option>
                                    <option>Clothing & Beauty</option>
                                    <option>Pet Foods & Toy</option>
                                    <option>Fast food</option>
                                    <option>Baking material</option>
                                    <option>Vegetables</option>
                                    <option>Fresh Seafood</option>
                                    <option>Noodles & Rice</option>
                                    <option>Ice cream</option>
                                </select>
                                <input type="text" placeholder="Search for items..." />
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="search-location">

                                </div>


                                <div class="header-action-icon-2">
                                    @livewire("cart-componenet")
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                          @foreach(Cart::content() as $item)
                                            <li>

                                                <div class="shopping-cart-img">
                                                <a href="{{route("Shopcart")}}" class="outline">View cart</a>
                                                    @if( $item->model)
                                                    <a href=""><img alt="Nest" src="{{asset('attachments/' . $item->model->imageProduct)}}" /></a>
                                                    @else
                                                    <a href=""><img alt="Nest" src="" /></a>
                                                    @endif
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-right.html">{{$item->name}}</a></h4>
                                                    <h4>${{$item->price}}</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                         @endforeach
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>${{Cart::total()}}</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="{{route("Shopcart")}}" class="outline">View cart</a>
                                                <a href="{{route("Checkout")}}">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if(!Auth::guard("web")->user())
                                <div class="header-action-icon-2">
                                    <a href="page-account.html">
                                        <img class="svgInject" alt="Nest" src="{{asset('assets/landing/imgs/theme/icons/icon-user.svg')}}" />
                                    </a>
                                    <a href="page-account.html"><span class="lable ml-0">Login</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                        <ul>
                                            <li>
                                                <a href="{{route("register")}}"><i class="fi fi-rs-user mr-10"></i>Sign up</a>
                                            </li>
                                            <li>
                                                <a href="{{route("login")}}"><i class="fi fi-rs-user mr-10"></i>Sign in</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                @else
                                  @if(Auth::guard("web")->user()->type == "user")
                                <div class="header-action-icon-2">
                                    <a href="page-account.html">
                                        <img class="svgInject" alt="Nest" src="{{asset('assets/landing/imgs/theme/icons/icon-user.svg')}}" />
                                    </a>
                                    <a href="page-account.html"><span class="lable ml-0">Account</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                        <ul>
                                            <li>
                                                <a href="page-account.html"><i class="fi fi-rs-user mr-10"></i>My Account</a>
                                            </li>
                                            <li>
                                                <a href="page-account.html"><i class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a>
                                            </li>
                                            <li><form action="{{ route('logout') }}" method="POST" id="logoutform">
                                                @csrf
                                            </form>
                                            <a class="dropdown-item ai-icon"
                                                onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                                                <i class="text-red fa fa-sign-out-alt"></i>
                                                <span class="ml-2">Sign out</span>
                                            </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                  @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="index.html"><img src="{{asset('assets/landing/imgs/theme/logo.svg')}}" alt="logo" /></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categories-button-active" href="#">
                                <span class="fi-rs-apps"></span> <span class="et">Browse</span> All Categories
                                <i class="fi-rs-angle-down"></i>
                            </a>
                            <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                                <div class="d-flex categori-dropdown-inner">
                                    <ul>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('assets/landing/imgs/theme/icons/category-1.svg')}}" alt="" />Milks and Dairies</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('assets/landing/imgs/theme/icons/category-2.svg')}}" alt="" />Clothing & beauty</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('assets/landing/imgs/theme/icons/category-3.svg')}}" alt="" />Pet Foods & Toy</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('assets/landing/imgs/theme/icons/category-4.svg')}}" alt="" />Baking material</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('assets/landing/imgs/theme/icons/category-5.svg')}}" alt="" />Fresh Fruit</a>
                                        </li>
                                    </ul>
                                    <ul class="end">
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('assets/landing/imgs/theme/icons/category-6.svg')}}" alt="" />Wines & Drinks</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('assets/landing/imgs/theme/icons/category-7.svg')}}" alt="" />Fresh Seafood</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('assets/landing/imgs/theme/icons/category-8.svg')}}" alt="" />Fast food</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('assets/landing/imgs/theme/icons/category-9.svg')}}" alt="" />Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('assets/landing/imgs/theme/icons/category-10.svg')}}" alt="" />Bread and Juice</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="more_slide_open" style="display: none">
                                    <div class="d-flex categori-dropdown-inner">
                                        <ul>
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="{{asset('assets/landing/imgs/theme/icons/icon-1.svg')}}" alt="" />Milks and Dairies</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="{{asset('assets/landing/imgs/theme/icons/icon-2.svg')}}" alt="" />Clothing & beauty</a>
                                            </li>
                                        </ul>
                                        <ul class="end">
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="{{asset('assets/landing/imgs/theme/icons/icon-3.svg')}}" alt="" />Wines & Drinks</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-right.html"> <img src="{{asset('assets/landing/imgs/theme/icons/icon-4.svg')}}" alt="" />Fresh Seafood</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show more...</span></div>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                            <nav>
                                <ul>
                                    <li class=""> <a href="{{route("Home")}}">Home</a></li>

                                    <li>
                                        <a href="{{route("About")}}">About</a>
                                    </li>
                                    <li>
                                        <a href="{{route("Shop")}}">Shop</a>
                                    </li>

                                    <li>
                                     <a href="{{route("Contact")}}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-flex">
                        <img src="{{asset('assets/landing/imgs/theme/icons/icon-headphone.svg')}}" alt="hotline" />
                        <p>1900 - 888<span>24/7 Support Center</span></p>
                    </div>
                    <div class="header-action-icon-2 d-block d-lg-none">
                        <div class="burger-icon burger-icon-white">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>
                    </div>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.html">
                                    <img alt="Nest" src="{{asset('assets/landing/imgs/theme/icons/icon-heart.svg')}}" />
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="#">
                                    <img alt="Nest" src="{{asset('assets/landing/imgs/theme/icons/icon-cart.svg')}}" />
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Nest" src="{{asset('assets/landing/imgs/shop/thumbnail-3.jpg')}}" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Nest" src="{{asset('assets/landing/imgs/shop/thumbnail-4.jpg')}}" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="shop-cart.html">View cart</a>
                                            <a href="shop-checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="index.html"><img src="{{asset('assets/landing/imgs/theme/icons/icon-headphone.svg')}}"/></a>

                    <a href="index.html">{{asset('assets/landing/imgs/theme/icons/icon-headphone.svg')}}</a>


                    <a href="index.html"><img src="{{asset('assets/landing/imgs/theme/logo.svg')}}" alt="logo" /></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…" />
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start -->
                    <nav>
                        <ul>
                            <li class=""> <a href="{{route("Home")}}">Home</a></li>

                            <li>
                                <a href="{{route("About")}}">About</a>
                            </li>
                            <li>
                                <a href="{{route("Shop")}}">Shop</a>

                            </li>

                            <li>
                                <a href="{{route("Contact")}}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap">
                    <div class="single-mobile-header-info">
                        <a href="page-contact.html"><i class="fi-rs-marker"></i> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="page-login.html"><i class="fi-rs-user"></i>Log In / Sign Up </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
                    </div>
                </div>
                <div class="mobile-social-icon mb-50">
                    <h6 class="mb-15">Follow Us</h6>
                    <a href="#"><img src="{{asset('assets/landing/imgs/theme/icons/icon-facebook-white.svg')}}" alt="" /></a>
                    <a href="#"><img src="{{asset('assets/landing/imgs/theme/icons/icon-twitter-white.svg')}}" alt="" /></a>
                    <a href="#"><img src="{{asset('assets/landing/imgs/theme/icons/icon-instagram-white.svg')}}" alt="" /></a>
                    <a href="#"><img src="{{asset('assets/landing/imgs/theme/icons/icon-pinterest-white.svg')}}" alt="" /></a>
                    <a href="#"><img src="{{asset('assets/landing/imgs/theme/icons/icon-youtube-white.svg')}}" alt="" /></a>
                </div>
                <div class="site-copyright">Copyright 2022 © Nest. All rights reserved. Powered by AliThemes.</div>
            </div>
        </div>
    </div>
    <!--End header-->
           {{$slot}}
    <footer class="main">
        <section class="newsletter mb-15 wow animate__animated animate__fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="position-relative newsletter-inner">
                            <div class="newsletter-content">
                                <h2 class="mb-20">
                                    Stay home & get your daily <br />
                                    needs from our shop
                                </h2>
                                <p class="mb-45">Start You'r Daily Shopping with <span class="text-brand">Nest Mart</span></p>
                                <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Your emaill address" />
                                    <button class="btn" type="submit">Subscribe</button>
                                </form>
                            </div>
                            <img src="{{asset('assets/landing/imgs/banner/banner-9.png')}}" alt="newsletter" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mb-md-4 mb-xl-0">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="banner-icon">
                                <img src="{{asset('assets/landing/imgs/theme/icons/icon-1.svg')}}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Best prices & offers</h3>
                                <p>Orders $50 or more</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <div class="banner-icon">
                                <img src="{{asset('assets/landing/imgs/theme/icons/icon-2.svg')}}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Free delivery</h3>
                                <p>24/7 amazing services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <div class="banner-icon">
                                <img src="{{asset('assets/landing/imgs/theme/icons/icon-3.svg')}}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Great daily deal</h3>
                                <p>When you sign up</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <div class="banner-icon">
                                <img src="{{asset('assets/landing/imgs/theme/icons/icon-4.svg')}}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Wide assortment</h3>
                                <p>Mega Discounts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                            <div class="banner-icon">
                                <img src="{{asset('assets/landing/imgs/theme/icons/icon-5.svg')}}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Easy returns</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-xl-none">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                            <div class="banner-icon">
                                <img src="{{asset('assets/landing/imgs/theme/icons/icon-6.svg')}}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Safe delivery</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col">
                        <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="logo mb-30">
                                <a href="index.html" class="mb-15"><img src="{{asset('assets/landing/imgs/theme/logo.svg')}}" alt="logo" /></a>
                                <p class="font-lg text-heading">Awesome grocery store website template</p>
                            </div>
                            <ul class="contact-infor">
                                <li><img src="{{asset('assets/landing/imgs/theme/icons/icon-location.svg')}}" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                <li><img src="{{asset('assets/landing/imgs/theme/icons/icon-contact.svg')}}" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                <li><img src="{{asset('assets/landing/imgs/theme/icons/icon-email-2.svg')}}" alt="" /><strong>Email:</strong><span>sale@Nest.com</span></li>
                                <li><img src="{{asset('assets/landing/imgs/theme/icons/icon-clock.svg')}}" alt="" /><strong>Hours:</strong><span>10:00 - 18:00, Mon - Sat</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".1s>
                        <h4 class=" widget-title">Company</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Support Center</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <h4 class="widget-title">Account</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help Ticket</a></li>
                            <li><a href="#">Shipping Details</a></li>
                            <li><a href="#">Compare products</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <h4 class="widget-title">Corporate</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Become a Vendor</a></li>
                            <li><a href="#">Affiliate Program</a></li>
                            <li><a href="#">Farm Business</a></li>
                            <li><a href="#">Farm Careers</a></li>
                            <li><a href="#">Our Suppliers</a></li>
                            <li><a href="#">Accessibility</a></li>
                            <li><a href="#">Promotions</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <h4 class="widget-title">Popular</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Milk & Flavoured Milk</a></li>
                            <li><a href="#">Butter and Margarine</a></li>
                            <li><a href="#">Eggs Substitutes</a></li>
                            <li><a href="#">Marmalades</a></li>
                            <li><a href="#">Sour Cream and Dips</a></li>
                            <li><a href="#">Tea & Kombucha</a></li>
                            <li><a href="#">Cheese</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget widget-install-app col wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                        <h4 class="widget-title">Install App</h4>
                        <p class="">From App Store or Google Play</p>
                        <div class="download-app">
                            <a href="#" class="hover-up mb-sm-2 mb-lg-0"><img class="active" src="{{asset('assets/landing/imgs/theme/app-store.jpg')}}" alt="" /></a>
                            <a href="#" class="hover-up mb-sm-2"><img src="{{asset('assets/landing/imgs/theme/google-play.jpg')}}" alt="" /></a>
                        </div>
                        <p class="mb-20">Secured Payment Gateways</p>
                        <img class="" src="{{asset('assets/landing/imgs/theme/payment-method.png')}}" alt="" />
                    </div>
                </div>
        </section>
        <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0">
            <div class="row align-items-center">
                <div class="col-12 mb-30">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <p class="font-sm mb-0">&copy; 2022, <strong class="text-brand">Nest</strong> - HTML Ecommerce Template <br />All rights reserved</p>
                </div>
                <div class="col-xl-4 col-lg-6 text-center d-none d-xl-block">
                    <div class="hotline d-lg-inline-flex mr-30">
                        <img src="{{asset('assets/landing/imgs/theme/icons/phone-call.svg')}}" alt="hotline" />
                        <p>1900 - 6666<span>Working 8:00 - 22:00</span></p>
                    </div>
                    <div class="hotline d-lg-inline-flex">
                        <img src="{{asset('assets/landing/imgs/theme/icons/phone-call.svg')}}" alt="hotline" />
                        <p>1900 - 8888<span>24/7 Support Center</span></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                    <div class="mobile-social-icon">
                        <h6>Follow Us</h6>
                        <a href="#"><img src="{{asset('assets/landing/imgs/theme/icons/icon-facebook-white.svg')}}" alt="" /></a>
                        <a href="#"><img src="{{asset('assets/landing/imgs/theme/icons/icon-twitter-white.svg')}}" alt="" /></a>
                        <a href="#"><img src="{{asset('assets/landing/imgs/theme/icons/icon-instagram-white.svg')}}" alt="" /></a>
                        <a href="#"><img src="{{asset('assets/landing/imgs/theme/icons/icon-pinterest-white.svg')}}" alt="" /></a>
                        <a href="#"><img src="{{asset('assets/landing/imgs/theme/icons/icon-youtube-white.svg')}}" alt="" /></a>
                    </div>
                    <p class="font-sm">Up to 15% discount on your first subscribe</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{asset('assets/landing/imgs/theme/loading.gif')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="{{asset('assets/landing/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/landing/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/landing/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('assets/landing/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins/slick.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins/jquery.syotimer.min.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins/waypoints.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins/wow.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins/magnific-popup.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins/select2.min.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins/counterup.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins/images-loaded.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins/isotope.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins/jquery.vticker-min.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins/jquery.theia.sticky.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins/jquery.elevatezoom.js')}}"></script>
    <!-- Template  JS -->

    <script src="{{asset('assets/landing/js/main.js?v=5.6')}}"></script>
    <script src="{{asset('assets/landing/js/shop.js?v=5.6')}}"></script>
    @livewireScripts

</body>

</html>
