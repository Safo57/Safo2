@php
    $client = Session::get('client');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Cars online shop checkout page</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.png') }}">
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

          <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
</head>
<style>
body{
    background-image:radial-gradient(red, yellow , rgb(22, 20, 161))
}



</style>
<body>
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
                                            
                                        </li>
                                        <li class="active has--mega--menu"><a
                                                href="{{ route('shop.page') }}">Shop</a>
                                            
                                        </li>
                                        <li><a href="{{ route('about.page') }}">About </a></li>
                                        <li class="menu-item-has-children"><a
                                                href="{{ route('blog.page') }}">Blog</a>
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
                                        {{-- <li class="header-search"><a href="#" data-toggle="modal"
                                                data-target="#search-modal"><i class="flaticon-search"></i></a></li> --}}
                                        @if (!isset($client))
                                            <li class="sign-in"><a href="{{ route('client.login') }}">Sign In</a>
                                            </li>
                                        @else
                                            <li class="sign-in"><a href="{{ route('client.logout') }}"><i
                                                        style="color: red" class="fas fa-user"></i></a></li>
                                        @endif
                                        {{-- <li class="header-wishlist"><a href="#"><i
                                                    class="flaticon-heart-shape-outline"></i></a></li> --}}
                                        <li class="header-shop-cart"><a href="#"><i
                                                    class="flaticon-shopping-bag"></i><span>{{ count($carts) }}</span></a>
                                            <ul class="minicart">
                                                @foreach ($carts as $order)
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
                                                            @foreach ($carts as $order)
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
                                            {{-- <ul class="submenu">
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                                <li><a href="index-3.html">Home Three</a></li>
                                                <li><a href="index-4.html">Home Four</a></li>
                                                <li><a href="index-5.html">Home Five</a></li>
                                                <li><a href="index-6.html">Home Six</a></li>
                                                <li><a href="index-7.html">Home Seven</a></li>
                                                <li><a href="index-8.html">Home Eight</a></li>
                                                <li><a href="index-9.html">Home Nine</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="active menu-item-has-children"><a href="#">Shop</a>
                                        
                                        </li>
                                        <li><a href="/about">About Us</a></li>
                                        <li class="menu-item-has-children"><a href="#">blog</a>
                                            {{-- <ul class="submenu">
                                                <li><a href="blog.html">Our Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul> --}}
                                        </li>
                                        <li><a href="contact.page">Contact Us</a></li>
                                        <li><a href="{{ route('orders.page') }}">Order</a></li>
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
      <div class="container">
        <div class="py-5 text-center">

          <h2 style="color:red;">Checkout form</h2>
          <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>

        <div class="row">
          <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-muted">Your cart</span>
              <span class="badge badge-secondary badge-pill"> Product Count:{{ count($carts) }}</span>
            </h4>
            <ul class="list-group mb-3">
                @foreach ($carts as $cart)


              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">{{ $cart->name }}</h6>
                  <small class="text-muted"> count:{{ $cart->count }}</small>
                </div>
                <span class="text-muted">{{ ($cart->price - ($cart->price * ($cart->discount / 100))) }}</span>
              </li>
              @endforeach
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (UZS)</span>
                <strong>                        @php
                    $totalDiscount = 0;
                @endphp
               @foreach($carts as $cart)
              @php
               $discountAmount = ($cart->price - ( $cart->price * ($cart->discount / 100))) * $cart->count ;
              $totalDiscount += $discountAmount;
              @endphp
               @endforeach
  @php
  echo $totalDiscount;
  @endphp</strong>
              </li>
            </ul>

            {{-- <form class="card p-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-secondary">Redeem</button>
                </div>
              </div>
            </form> --}}

          </div>
          <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate action="{{ route('add.order') }}" method="POST" >
                @csrf
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName">First name</label>
                  <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Your First name"  required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Last name</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Your Last name" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
              </div>
{{--  --}}

              <div class="mb-3">
                <label for="email">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email address">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>

              <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Your Address" name="address" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>



              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="country">Country</label>
                  <select class="custom-select d-block w-100" id="country" name="country" required>
                    <option value="" disabled >Choose...</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Russian">Russian</option>
                    <option value="American">American</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="state">Region</label>
                  <select class="custom-select d-block w-100" id="state" name="state" required>
                    <option value="" disabled>Choose...</option>
                    <option value="Andijon">Andijon</option>
                    <option value="Namangan">Namangan</option>
                    <option value="Farg'ona">Farg'ona</option>
                    <option value="Toshkent">Toshkent</option>
                    <option value="Buxoro">Buxoro</option>
                    <option value="Urganch">Urganch</option>
                    <option value="Samarqand">Samarqand</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="zip">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="Your zip" name="zip" required>
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div>
              </div>
              <hr class="mb-4">



              <h4 class="mb-3">Payment</h4>
              <div class="row">
                <div class="col-md-3 mb-3">
                  <label for="cc-name">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" name="cardName" placeholder="Your card name" required>
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-number">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" name="cardNumber" placeholder="Your card number" required>
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="cc-expiration">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" name="cardExpiration" placeholder="Your card expiration" required>
                    <div class="invalid-feedback">
                      Expiration date required
                    </div>
                  </div>
              </div>

              <hr class="mb-4">
              @if (count($carts) != 0 )
              <button  class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
              @elseif(count($carts) == 0)
   <h2> Your cart is empty</h2>
              @elseif(count($carts) != 0)
              @endif

            </form>
          </div>
        </div>
      </div><br><br><hr>

      <footer class="gray-bg footer-style-two footer-style-three pt-75">
        <div class="container">
            <div class="footer-top-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-logo">
                            <a href="{{ route('main.page') }}"><img src="img/logo/wolf.png" width="90" height="80" alt=""></a>
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
                                    <li><a href="/about">About Us</a></l>
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
                                        <li><a href="https://www.facebook.com/share/utG8eNipPi6Fj6F9/?mibextid=qi2Omg" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://t.me/lednik_warrior" target="_blank"><i class="fab fa-telegram"></i></a></li>
                                        {{-- <li><a href="#"><i class="fab fa-youtube"></i></a></li> --}}
                                        <li><a href="https://www.instagram.com/safo_ake7"><i class="fab fa-instagram"></i></a></li>
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
                            <p>&copy; 2024 <a href="{{ route('main.page') }}">Super Cars online shop</a>. All Rights Reserved | +998936420115</p>
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


<script>
             // Example starter JavaScript for disabling form submissions if there are invalid fields
              (function () {
            'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
     })()
      </script>
</script>


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
           {{-- Toastr --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>

</body>

</html>
