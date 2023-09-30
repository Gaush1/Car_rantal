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
                                    {{-- <li><a class="menu-item" href="/">Home</a> --}}
                                    </li>
                                    {{-- <li><a class="menu-item" href="/cars">Cars</a> --}}

                                    </li>
                                    {{-- <li><a class="menu-item" href="/booking">Booking</a></li> --}}
                                    {{-- <li><a class="menu-item" href="/index/company">Corporate</a> --}}
                                    </li>
                                    {{-- <li><a class="menu-item" href="/about">About Us</a> --}}
                                    </li>
                                    {{-- <li><a class="menu-item" href="/contact">Contact Us</a> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->

        <div class="no-bottom no-top zebra" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="{{ url('frontend/images/background/2.jpg') }}" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Vehicle Fleet</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <section id="section-car-details">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6">
                            <div id="slider-carousel" class="owl-carousel">
                                <div class="item">
                                    <img src="{{ url("$carDetail->image") }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <h3>{{ $carDetail->name }}</h3>
                            <p>{{ $carDetail->description }}.</p>

                            <div class="spacer-10"></div>
                            <h4>Specifications</h4>
                            <div class="de-spec">
                                <div class="d-row">
                                    <span class="d-title">Body</span>
                                    <spam class="d-value">{{ $carDetail->body }}</spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Seat</span>
                                    <spam class="d-value">{{ $carDetail->seat }}</spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Door</span>
                                    <spam class="d-value">{{ $carDetail->door }}</spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Luggage</span>
                                    <spam class="d-value">{{ $carDetail->luggage }}</spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Fuel Type</span>
                                    <spam class="d-value">{{ $carDetail->fueltype }}</spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Engine</span>
                                    <spam class="d-value">{{ $carDetail->engine }}</spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Year</span>
                                    <spam class="d-value">{{ $carDetail->year }}</spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Mileage</span>
                                    <spam class="d-value">{{ $carDetail->mileage }}</spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Transmission</span>
                                    <spam class="d-value">{{ $carDetail->transmission }}</spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Drive</span>
                                    <spam class="d-value">{{ $carDetail->drive }}</spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Fuel Economy</span>
                                    <spam class="d-value">{{ $carDetail->fueleconomy }}</spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Exterior Color</span>
                                    <spam class="d-value">{{ $carDetail->exteriorcolor }}</spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Interior Color</span>
                                    <spam class="d-value">{{ $carDetail->interiorcolor }}</spam>
                                </div>
                            </div>

                            <div class="spacer-single"></div>

                            <h4>Features</h4>
                            <ul class="ul-style-2">
                                <li>Bluetooth</li>
                                <li>Multimedia Player</li>
                                <li>Central Lock</li>
                                <li>Sunroof</li>
                            </ul>
                        </div>

                        <div class="col-lg-3">
                            <div class="de-price text-center">
                                Daily rate
                                <h3>${{ $carDetail->price }}</h3>
                            </div>
                            <div class="spacer-30"></div>
                            <div class="de-box mb25">
                                @if(auth()->check()) <!-- Check if the user is authenticated -->
                                <form name="contactForm" id='contact_form' method="post" action="{{ route('book_car') }}">
                                    @csrf
                                    <h4>Booking this car</h4>

                                    <div class="spacer-20"></div>

                                    <div class="row">
                                        <!-- User ID (Assuming the user is authenticated) -->
                                 
                                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                      
                                            <input type="hidden" name="car_id" value="{{ $carDetail->id }}">
                                       
                                            <!-- Car Name (Hidden, will be filled based on the selected car) -->
                                        <div class="col-lg-12 mb20">
                                            <h5>Vehicle Name</h5>
                                            <input type="text" name="car_name"
                                                value="{{ $carDetail->name }}" id="autocomplete" autocomplete="off"
                                                class="form-control">
                                        </div>

                                            <input type="hidden" name="total_price"
                                                value="{{ $carDetail->price }}" id="total_price" class="form-control" step="0.01">

                                        <div class="col-lg-12 mb20">
                                            <h5>Pick Up Location</h5>
                                            <input type="text" name="pickuplocation" 
                                                placeholder="Enter your pickup location" id="autocomplete"
                                                autocomplete="off" class="form-control">

                                        </div>

                                        <div class="col-lg-12 mb20">
                                            <h5>Drop Off Location</h5>
                                            <input type="text" name="dropofflocation" 
                                                placeholder="Enter your dropoff location" id="autocomplete2"
                                                autocomplete="off" class="form-control">

                                        </div>

                                        <div class="col-lg-12 mb20">
                                            <h5>Pick Up Date & Time</h5>
                                            <input type="datetime-local" name="pickup_date"
                                                id="autocomplete" autocomplete="off"
                                                class="form-control">
                                        </div>

                                        <div class="col-lg-12 mb20">
                                            <h5>Return Date & Time</h5>
                                            <input type="datetime-local" name="return_date"
                                                id="autocomplete" autocomplete="off"
                                                class="form-control">
                                        </div>

                                        <!-- Booking Status (Scheduled by default) -->
                                       <input type="hidden" name="status" value="scheduled">

                                    </div>

                                    <input type='submit' id='send_message' value='Book Now'
                                        class="btn-main btn-fullwidth">

                                    <div class="clearfix"></div>

                                </form>
                                @elseif(Auth::guard('companye')->user())
                                <form name="contactForm" id='contact_form' method="post" action="{{ route('book_car.company') }}">
                                    @csrf
                                    <h4>Booking this car</h4>

                                    <div class="spacer-20"></div>

                                    <div class="row">
                                        <!-- User ID (Assuming the user is authenticated) -->
                                 
                                            <input type="hidden" name="companye_id" value="{{ Auth::guard('companye')->user()->id }}">
                                      
                                            <input type="hidden" name="car_id" value="{{ $carDetail->id }}">
                                       
                                            <!-- Car Name (Hidden, will be filled based on the selected car) -->
                                        <div class="col-lg-12 mb20">
                                            <h5>Vehicle Name</h5>
                                            <input type="text" name="car_name"
                                                value="{{ $carDetail->name }}" id="autocomplete" autocomplete="off"
                                                class="form-control">
                                        </div>

                                            <input type="hidden" name="total_price"
                                                value="{{ $carDetail->price }}" id="total_price" class="form-control" step="0.01">

                                        <div class="col-lg-12 mb20">
                                            <h5>Pick Up Location</h5>
                                            <input type="text" name="pickuplocation" 
                                                placeholder="Enter your pickup location" id="autocomplete"
                                                autocomplete="off" class="form-control">

                                        </div>

                                        <div class="col-lg-12 mb20">
                                            <h5>Drop Off Location</h5>
                                            <input type="text" name="dropofflocation" 
                                                placeholder="Enter your dropoff location" id="autocomplete2"
                                                autocomplete="off" class="form-control">

                                        </div>

                                        <div class="col-lg-12 mb20">
                                            <h5>Pick Up Date & Time</h5>
                                            <input type="datetime-local" name="pickup_date"
                                                id="autocomplete" autocomplete="off"
                                                class="form-control">
                                        </div>

                                        <div class="col-lg-12 mb20">
                                            <h5>Return Date & Time</h5>
                                            <input type="datetime-local" name="return_date"
                                                id="autocomplete" autocomplete="off"
                                                class="form-control">
                                        </div>

                                        <!-- Booking Status (Scheduled by default) -->
                                       <input type="hidden" name="status" value="scheduled">

                                    </div>

                                    <input type='submit' id='send_message' value='Book Now'
                                        class="btn-main btn-fullwidth">

                                    <div class="clearfix"></div>

                                </form>
                                @else
                                <p>Please <a href="{{ route('login') }}">log in</a> to book a car.</p>
                                @endif
                                @if (session('success'))
                                <div class="alert alert-success">
                                   {{ session('success') }}
                                </div>
                              @endif
                              @if (session('error'))
                                <div class="alert alert-danger">
                                   {{ session('error') }}
                                </div>
                              @endif
                            </div>

                            <div class="de-box">
                                <h4>Share</h4>
                                <div class="de-color-icons">
                                    <span><i class="fa fa-twitter fa-lg"></i></span>
                                    <span><i class="fa fa-facebook fa-lg"></i></span>
                                    <span><i class="fa fa-reddit fa-lg"></i></span>
                                    <span><i class="fa fa-linkedin fa-lg"></i></span>
                                    <span><i class="fa fa-pinterest fa-lg"></i></span>
                                    <span><i class="fa fa-stumbleupon fa-lg"></i></span>
                                    <span><i class="fa fa-delicious fa-lg"></i></span>
                                    <span><i class="fa fa-envelope fa-lg"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>
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
