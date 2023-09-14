<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Sep 2023 13:04:57 GMT -->

<head>
    <title>Rentaly - Multipurpose Vehicle Car Rental Website Template</title>
    <link rel="icon" href="{{ url('frontend/images/icon.png') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="{{ url('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ url('frontend/css/mdb.min.css') }}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{ url('frontend/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('frontend/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('frontend/css/coloring.css') }}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{ url('frontend/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
</head>

<body onload="initialize()">
    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <header class="transparent scroll-light has-topbar">
            <div id="topbar" class="topbar-dark text-light">
                <div class="container">
                    <div class="topbar-left xs-hide">
                        <div class="topbar-widget">
                            <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>+208 333 9296</a>
                            </div>
                            <div class="topbar-widget"><a href="#"><i
                                        class="fa fa-envelope"></i>contact@rentaly.com</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>Mon - Fri 08.00 -
                                    18.00</a></div>
                        </div>
                    </div>

                    <div class="topbar-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-youtube fa-lg"></i></a>
                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="">
                                            <img class="logo-1" src="{{ url('frontend/images/logo-light.png') }}"
                                                alt="">
                                            <img class="logo-2" src="{{ url('frontend/images/logo.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="/index">Customer Home</a>
                                        {{-- <ul>
                                            <li><a class="menu-item" href="index-2.html">Homepage 1</a></li>
                                            <li><a class="menu-item" href="index-3.html">Homepage 2</a></li>
                                            <li><a class="menu-item" href="index-4.html">Homepage 3</a></li>
                                            <li><a class="menu-item" href="index-5.html">Homepage 4</a></li>
                                            <li><a class="menu-item" href="index-6.html">Homepage 5</a></li>
                                            <li><a class="menu-item" href="index-7.html">Homepage 6</a></li>
                                            <li><a class="menu-item" href="index-8.html">New: Homepage 7</a></li>
                                        </ul> --}}
                                    </li>
                                    <li><a class="menu-item" href="/cars">Cars</a>
                                        {{-- <ul>
                                            <li><a class="menu-item" href="cars.html">Cars List 1</a></li>
                                            <li><a class="menu-item" href="cars-list.html">Cars List 2</a></li>
                                            <li><a class="menu-item" href="car-single.html">Cars Single</a></li>
                                        </ul> --}}
                                    </li>
                                    <li><a class="menu-item" href="/booking">Booking</a></li>
                                    <li><a class="menu-item" href="account-dashboard.html">Corporate Home</a>
                                        {{-- <ul>
                                            <li><a class="menu-item" href="account-dashboard.html">Dashboard</a></li>
                                            <li><a class="menu-item" href="account-profile.html">My Profile</a></li>
                                            <li><a class="menu-item" href="account-booking.html">My Orders</a></li>
                                            <li><a class="menu-item" href="account-favorite.html">My Favorite Cars</a></li>
                                        </ul> --}}
                                    </li>
                                    <li><a class="menu-item" href="/about">About Us</a>
                                        {{-- <ul>
                                            <li><a class="menu-item" href="about.html">About Us</a></li>
                                            <li><a class="menu-item" href="contact.html">Contact</a></li>
                                            <li><a class="menu-item" href="login.html">Login</a></li>
                                            <li><a class="menu-item" href="register.html">Register</a></li>
                                            <li><a class="menu-item" href="404.html">Page 404</a></li>
                                        </ul> --}}
                                    </li>
                                    <li><a class="menu-item" href="/contact">Contact Us</a>
                                        {{-- <ul>
                                            <li><a class="menu-item" href="news-standart-right-sidebar.html">News Standard</a>
                                                <ul>
                                                    <li><a class="menu-item" href="news-standart-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a class="menu-item" href="news-standart-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="menu-item" href="news-standart-no-sidebar.html">No Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="menu-item" href="news-grid-right-sidebar.html">News Grid</a>
                                                <ul>
                                                    <li><a class="menu-item" href="news-grid-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a class="menu-item" href="news-grid-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="menu-item" href="news-grid-no-sidebar.html">No Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    {{-- <li><a class="menu-item" href="#">Elements</a>
                                        <ul>
                                            <li><a class="menu-item" href="preloader.html">Preloader</a></li>
                                            <li><a class="menu-item" href="icon-boxes.html">Icon Boxes</a></li>
                                            <li><a class="menu-item" href="badge.html">Badge</a></li>
                                            <li><a class="menu-item" href="counters.html">Counters</a></li>
                                            <li><a class="menu-item" href="gallery-popup.html">Gallery Popup</a></li>
                                            <li><a class="menu-item" href="icons-elegant.html">Icons Elegant</a></li>
                                            <li><a class="menu-item" href="icons-etline.html">Icons Etline</a></li>
                                            <li><a class="menu-item" href="icons-font-awesome.html">Icons Font Awesome</a></li>
                                            <li><a class="menu-item" href="map.html">Map</a></li>
                                            <li><a class="menu-item" href="modal.html">Modal</a></li>
                                            <li><a class="menu-item" href="popover.html">Popover</a></li>
                                            <li><a class="menu-item" href="tabs.html">Tabs</a></li>
                                            <li><a class="menu-item" href="tooltips.html">Tooltips</a></li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </div>
                            {{-- <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="/login" class="btn-main">Sign In</a>
                                    <span id="menu-btn"></span>
                                </div>
                                <div class="menu_side_area">
                                    <a href="/register" class="btn-main">Register</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="section-hero" aria-label="section" class="jarallax">
                <img src="{{ url('frontend/images/background/2.jpg') }}" class="jarallax-img" alt="">
                <div class="v-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-4 offset-lg-4">
                                {{-- @guest('admin')
                                    <a href="{{ route('admin.login') }}">Admin Login</a>
                                @else
                                    <form method="POST" action="{{ route('admin.logout') }}">
                                        @csrf
                                        <button type="submit">Admin Logout</button>
                                    </form>
                                @endguest --}}
                                <div class="padding40 rounded-3 shadow-soft" data-bgcolor="#ffffff">
                                    <h4>Login</h4>
                                    <div class="spacer-10"></div>
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    @if (session('success'))
                                        <div class="success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <form class="form-border" method="post" action='{{ route('admin.login') }}'>
                                        @csrf
                                        <div class="field-set">
                                            <input type="text" name="email" class="form-control"
                                                placeholder="Your Email" required autocomplete="off" />
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        <div class="field-set">
                                            <input type="text" name="password" class="form-control"
                                                placeholder="Password" required autocomplete="off" />
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        <div id="submit">
                                            <input type="submit" value="Sign In"
                                                class="btn-main btn-fullwidth rounded-3" />
                                        </div>
                                    </form>
                                    {{-- <div class="title-line">Or&nbsp;sign&nbsp;up&nbsp;</div>
                                <div class="row g-2">
                                    <div class="col-lg-6">
                                        <a class="btn-sc btn-fullwidth mb10" href="#"><img
                                                src="frontend/images/svg/google_icon.svg" alt="">Google</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a class="btn-sc btn-fullwidth mb10" href="#"><img
                                                src="frontend/images/svg/facebook_icon.svg" alt="">Facebook</a>
                                    </div>
                                    <a href="{{ route('register') }}"><input type="button" value="Register" class="btn-main btn-fullwidth rounded-3" /></a>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- content close -->
        <!-- footer begin -->
        <footer class="text-light">
            <div class="container">
                <div class="row g-custom-x">
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>About Rentaly</h5>
                            <p>Where quality meets affordability. We understand the importance of a smooth and enjoyable
                                journey without the burden of excessive costs. That's why we have meticulously crafted
                                our offerings to provide you with top-notch vehicles at minimum expense.</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Contact Info</h5>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY
                                    10001</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>+1 333 9296</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a
                                        href="mailto:contact@example.com">contact@example.com</a></span>
                                <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download
                                        Brochure</a></span>
                            </address>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <h5>Quick Links</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="widget">
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Partners</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Social Network</h5>
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="index-2.html">
                                        Copyright 2023 - Rentaly by Designesia
                                    </a>
                                </div>
                                <ul class="menu-simple">
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>
    <div id="selector">
        <div id="demo-rtl" class="sc-opt">
            <div class="sc-icon">RTL</div><span class="sc-val">Click to Enable</span>
        </div>
    </div>
    <div id="purchase-now">
        <a href="https://themeforest.net/cart/add_items?ref=designesia&amp;item_ids=44940477"
            target="_blank"><span>$</span>15</a>
        <div class="pn-hover">Buy Now</div>
    </div>
    <!-- Javascript Files
================================================== -->
    <script src="{{ url('frontend/js/plugins.js') }}"></script>
    <script src="{{ url('frontend/js/designesia.js') }}"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgiM7ogCAA2Y5pgSk2KXZfxF5S_1jsptA&amp;libraries=places&amp;callback=initPlaces"
        async="" defer=""></script>

</body>


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Sep 2023 13:05:20 GMT -->

</html>
