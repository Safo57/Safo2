<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Super Cars online shop blog page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/jarallax.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>


    <!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header class="header-style-three">
        <div class="header-top-wrap">
            <div class="container custom-container-two">
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-6">
                        <div class="header-top-link">
                            <ul>
                                <li><a href="{{ route('about.page') }}">About US</a></li>
                                <li><a href="#"> id:{{ $client != null ? $client->id : '0' }}</a></li>
                                <li><a
                                        href="tel:123456789">email:{{ $client != null ? $client->email : 'not loginedd' }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="header-top-right">
                            <div class="lang">
                                <select name="select">
                                    <option value="">English</option>
                                    <option value="">Spanish</option>
                                    <option value="">Turkish</option>
                                    <option value="">Russian</option>
                                    <option value="">Chinese</option>
                                </select>
                            </div>
                            <div class="currency">
                                <form action="#">
                                    <select name="select">
                                        <option value="">USD</option>
                                        <option value="">AUE</option>
                                        <option value="">SAR</option>
                                        <option value="">INR</option>
                                        <option value="">BDT</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header menu-area">
            <div class="container custom-container-two">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav show">
                                <div class="logo">

                                    <a href="{{ route('main.page') }}"><img src="{{ asset($settings->site_logo) }}"
                                            alt=""></a>


                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="menu-item-has-children has--mega--menu"><a
                                                href="{{ route('main.page') }}">Home</a>
                                            {{-- <ul class="mega--menu--wrap scroll">
                                                <li>
                                                    <a href="index.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_01.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style One</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-2.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_02.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style Two</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-3.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_03.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style Three</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-4.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_04.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style four</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-5.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_05.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style five</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-6.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_06.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style six</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-7.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_07.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style seven</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-8.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_08.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style eight</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-9.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_09.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style nine</span>
                                                    </a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li class="active has--mega--menu"><a href="{{ route('shop.page') }}">Shop</a>
                                            {{-- <li class="mega-menu-wrap">
                                                    <ul class="mega-menu-col">
                                                        <li class="mega-title"><a
                                                                href="{{ route('shop.page') }}">SHOP PAGES</a>
                                                        </li>
                                                      

                                                        <li class="active"><a href="{{ route('shop.page') }}">Our
                                                                shop page</a></li>
                                                        <li><a href="#">Shop Details page </a></li>
                                                        <li><a href="{{ route('cart.page') }}">Cart Page</a></li>
                                                        <li><a href="{{ route('checkout') }}">Checkout Page</a></li>
                                                    </ul>

                                                    <ul class="mega-menu-col sub-cat-post">
                                                        <li>
                                                            <a href="/shop">
                                                                <img src="{{ asset('frontend/assets/img/product/super logo.jpg') }}"
                                                                    alt="">
                                                                <span class="btn">MODERN CARS Shop</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul class="mega-menu-col sub-cat-post">
                                                        <li>
                                                            <a href="/shop">
                                                                <img src="{{ asset('frontend/assets/img/product/Ferrari-Emblem.png') }}"
                                                                    alt="">
                                                                <span class="btn">EXPENSIVE CARS SHOP</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul> <ul class="mega-menu"> --}}

                                        </li>
                                        <li><a href="{{ route('about.page') }}">About </a></li>
                                        <li class="menu-item-has-children"><a href="{{ route('blog.page') }}">Blog</a>
                                            {{-- <ul class="submenu">
                                                <li><a href="{{ route('blog.page') }}">Our Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul> --}}
                                        </li>
                                        <li><a href="{{ route('contact.page') }}">Contact Us</a></li>
                                        <li><a href="{{ route('orders.page') }}">Order</a></li>
                                    </ul>
                                </div>
                                <div class="header-action d-none d-md-block">
                                    <ul>
                                        <li class="header-search"><a href="#" data-toggle="modal"
                                                data-target="#search-modal"><i class="flaticon-search"></i></a></li>
                                        @if (!isset($client))
                                            <li class="sign-in"><a href="{{ route('client.login') }}">Sign In</a>
                                            </li>
                                        @else
                                            <li class="sign-in"><a href="{{ route('client.logout') }}"><i
                                                        style="color: red" class="fas fa-user"></i></a></li>
                                        @endif
                                        <li class="header-wishlist"><a href="#"><i
                                                    class="flaticon-heart-shape-outline"></i></a></li>
                                        <li class="header-shop-cart"><a href="#"><i
                                                    class="flaticon-shopping-bag"></i><span>{{ count($orders) }}</span></a>
                                            <ul class="minicart">
                                                @foreach ($orders as $order)
                                                    <li class="d-flex align-items-start">
                                                        <div class="cart-img">
                                                            <a href="#"><img
                                                                    src="{{ asset($order->product->image) }}"
                                                                    alt=""></a>

                                                        </div>
                                                        <div class="cart-content">
                                                            <h4><a href="#"> {{ $order->id }},
                                                                    {{ $order->product->name }}</a></h4>
                                                            <div class="cart-price">
                                                                <span class="new">
                                                                    Price:{{ ($order->product->price - $order->product->price * ($order->product->discount / 100)) * $order->count }}</span>
                                                                <span><del>{{ $order->product->price * $order->count }}</del></span>
                                                            </div>
                                                            <div class="cart-price">
                                                                <span class="new">Count:{{ $order->count }}
                                                                    piece</span>

                                                            </div>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a href="{{ route('delete.order', $order->id) }}"><i
                                                                    class="far fa-trash-alt"></i></a>
                                                        </div>
                                                    </li>
                                                @endforeach

                                                <li>
                                                    <div class="total-price">
                                                        <span class="f-left">Total:</span>
                                                        <span class="f-right">
                                                            @php
                                                                $totalDiscount = 0;
                                                            @endphp
                                                            @foreach ($orders as $order)
                                                                @php
                                                                    $discountAmount =
                                                                        ($order->product->price -
                                                                            $order->product->price *
                                                                                ($order->product->discount / 100)) *
                                                                        $order->count;
                                                                    $totalDiscount += $discountAmount;
                                                                @endphp
                                                            @endforeach
                                                            @php
                                                                echo $totalDiscount;
                                                            @endphp

                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkout-link">
                                                        <a href="{{ route('cart.page') }}">Shopping Cart</a>
                                                        <a class="black-color"
                                                            href="{{ route('cart.page') }}">Checkout</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-toggle-btn"><a href="#" class="navSidebar-button"><i
                                                    class="flaticon-menu-button-of-three-horizontal-lines"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                            <nav class="menu-box">
                                <div class="nav-logo"><a href="index.html"><img
                                            src="{{ asset('frontend/assets/img/logo/logo.png') }}" alt=""
                                            title=""></a>
                                </div>
                                <div class="menu-outer">
                                    <ul class="navigation">
                                        <li class="menu-item-has-children"><a href="">Home</a>
                                            <ul class="submenu">
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                                <li><a href="index-3.html">Home Three</a></li>
                                                <li><a href="index-4.html">Home Four</a></li>
                                                <li><a href="index-5.html">Home Five</a></li>
                                                <li><a href="index-6.html">Home Six</a></li>
                                                <li><a href="index-7.html">Home Seven</a></li>
                                                <li><a href="index-8.html">Home Eight</a></li>
                                                <li><a href="index-9.html">Home Nine</a></li>
                                            </ul>
                                        </li>
                                        <li class="active menu-item-has-children"><a href="#">Shop</a>
                                            <ul class="submenu">
                                                <li><a href="shop.html">Shop Page</a></li>
                                                <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                                <li class="active"><a href="">Shop Details</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="cart.html">Checkout Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li class="menu-item-has-children"><a href="#">blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Our Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Search -->
        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <input type="text" placeholder="Search here...">
                        <button><i class="flaticon-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Search-end -->

        <!-- off-canvas-start -->
        <div class="sidebar-off-canvas info-group">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-widget scroll">
                <div class="sidebar-widget-container">
                    <div class="off-canvas-heading">
                        <a href="#" class="close-side-widget">
                            <span class="flaticon-targeting-cross"></span>
                        </a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo mb-30">
                                    <a href="index.html"><img src="{{ asset('frontend/assets/img/logo/logo.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="content-box">
                                    <p>WooCommerce and WordPress are both free, open source software reasons many ...
                                    </p>
                                </div>
                                <div class="contact-info">
                                    <h4 class="title">CONTACT US</h4>
                                    <ul>
                                        <li><span class="flaticon-phone-call"></span><a
                                                href="tel:123456789">{{ $settings->phone }}</a></li>
                                        <li><span class="flaticon-email"></span><a
                                                href="mailto:adara@info.com">{{ $settings->email }}</a></li>
                                        <li><span class="flaticon-place"></span>{{ $settings->address }}</li>
                                    </ul>
                                </div>
                                <div class="oc-newsletter">
                                    <h4 class="title">NEWSLETTER</h4>
                                    <p>Fill your email below to subscribe to my newsletter</p>
                                    <form action="{{ route('regster.news') }}" method="POST">
                                        @csrf

                                        <input type="email" name="email" placeholder="Email..." required>
                                        <button class="btn" type="password">Subscribe</button>
                                    </form>
                                </div>
                                <div class="oc-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                                    </ul>
                                </div>
                                <div class="oc-bottom">
                                    <div class="currency">
                                        <form action="#">
                                            <label>Currency</label>
                                            <select name="select">
                                                <option value="">USD</option>
                                                <option value="">AUE</option>
                                                <option value="">SAR</option>
                                                <option value="">INR</option>
                                                <option value="">BDT</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="language">
                                        <form action="#">
                                            <label>Language</label>
                                            <select name="select">
                                                <option value="">English</option>
                                                <option value="">Spanish</option>
                                                <option value="">Turkish</option>
                                                <option value="">Russian</option>
                                                <option value="">Chinese</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- off-canvas-end -->

    </header>
    <!-- header-area-end -->

    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/411535828_max.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2>Our Blog</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-area -->
        <section class="blog-area pt-100 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="blog--post--item text-center">
                            <div class="blog-post-thumb mb-35">
                                <a href=""><img src="img/blog/dd.jpg" width="800" height="400"
                                        alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <div class="tag"><a href="https://www.beyondautos.com">Shopping</a></div>
                                <h3><a href="https://www.beyondautos.com">The Greatest Thing World Belong Excepted</a></h3>
                                <div class="blog-post-meta">
                                    <ul>
                                        <li><i class="far fa-user"></i>By <a href="#">Tomas Alexa</a></li>
                                        <li><i class="far fa-calendar-alt"></i> Mar 10, 2021</li>
                                    </ul>
                                </div>
                                <p>The purpose of lorem ipsum is create natural looking block of sentence doesn
                                    distract. Letset sheets containing Lorem
                                    Ipsum passag and more recently with puhing.</p>

                            </div>
                        </div>
                        <div class="blog--post--item text-center">
                            <div class="blog-post-thumb mb-35">
                                <a href=""><img src="img/blog/imagesdd.jpg" width="800"
                                        height="400"></a>
                            </div>
                            <div class="blog-post-content">
                                <div class="tag"><a href="https://www.beyondautos.com">Shopping</a></div>
                                <h3><a href="https://www.beyondautos.com">Fashion is a Popular Aesthetic Expression Particular</a></h3>
                                <div class="blog-post-meta">
                                    <ul>
                                        <li><i class="far fa-user"></i>By <a href="#">Tomas Alexa</a></li>
                                        <li><i class="far fa-calendar-alt"></i> Mar 10, 2021</li>
                                    </ul>
                                </div>
                                <p>The purpose of lorem ipsum is create natural looking block of sentence doesn
                                    distract. Letset sheets containing Lorem
                                    Ipsum passag and more recently with puhing.</p>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-8">
                        <aside class="blog-sidebar">
                            <div class="widget blog-sidebar-widget mb-45">
                                <h5 class="widget-title">ABOUT ME</h5>
                                <div class="sidebar-about">
                                    <div class="thumb"><img src="img/blog/dddd.webp" width="250" height="150"
                                            alt="">
                                    </div>
                                    <div class="content">
                                        <p>The purpose of lorem ipsum is create natural looking block of sentence doesn
                                            distract.Letset sheets containing puhing.</p>
                                        <a href="https://www.instagram.com/safo_ake7">More About Me <i
                                                class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget blog-sidebar-widget mb-45">
                                <div class="oc-newsletter">
                                    <h4 class="title">NEWSLETTER</h4>
                                    <p>Fill your email below to subscribe to my newsletter</p>
                                    <form action="https://www.instagram.com/safo_ake7">
                                        <input type="email" placeholder="Email...">
                                        <button class="btn">Subscribe</button>
                                    </form>
                                    <div class="oc-social">
                                        <h4 class="title">FOLLOW US</h4>
                                        <ul>
                                            <li><a href="https://www.facebook.com/share/utG8eNipPi6Fj6F9/?mibextid=qi2Omg"
                                                target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.instagram.com/safo_ake7"><i
                                                        class="fab fa-instagram"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>


    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    <footer class="gray-bg footer-style-two footer-style-three pt-75">
        <div class="container">
            <div class="footer-top-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-logo">
                            <a href=""><img src="img/logo/wolf.png" width="90" height="90"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle-wrap pt-45 pb-20">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <h4 class="fw-title">COMPANY</h4>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="/about">About Us</a></li>
                                    {{-- <li><a href="">Store Locations</a></li> --}}
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <h4 class="fw-title">STORE</h4>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <h4 class="fw-title">Category</h4>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="shop-sidebar.html">Modern Cars</a></li>
                                        <li><a href="shop-sidebar.html">Expensive Cars</a></li>
                                        <li><a href="shop-sidebar.html">Super Cars</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <h4 class="fw-title">FOLLOW US</h4>
                            <div class="footer-text">
                                <p>Get Free Shipping on all your orders!</p>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/share/utG8eNipPi6Fj6F9/?mibextid=qi2Omg"
                                                target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/safo_ake7"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li> --}}
                                        <li><a href="https://t.me/lednik_warrior" target="_blank"><i
                                                    class="fab fa-telegram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="copyright-text">
                            <p>&copy; 2024 <a href="index.html">SAFO</a>. All Rights Reserved | Ph 93-642-0115</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pay-method-img">
                            <img src="img/images/payment_method_img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->





    <!-- JS here -->
    <script src="js/vendor/jquery-3.5.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nav-tool.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
