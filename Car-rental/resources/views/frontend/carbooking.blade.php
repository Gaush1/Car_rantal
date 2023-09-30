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
                            {{-- @if (!auth()->check())
                                <!-- Check if the user is authenticated -->
                                <div class="de-flex-col header-col-mid">
                                    <ul id="mainmenu">
                                        <li><a class="menu-item" href="/">Home</a>
                                        </li>

                                        </li>
                                        <li><a class="menu-item" href="/booking">Booking</a></li>
                                        <li><a class="menu-item" href="/index/company">Corporate</a>
                                        </li>
                                        <li><a class="menu-item" href="/about">About Us</a>
                                        </li>
                                        <li><a class="menu-item" href="/contact">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="de-flex-col">
                                    <div class="menu_side_area">
                                        <a href="/login" class="btn-main">Sign In</a>
                                        <span id="menu-btn"></span>
                                    </div>
                                    <div class="menu_side_area">
                                        <a href="/register" class="btn-main">Register</a>
                                        <span id="menu-btn"></span>
                                    </div>

                                </div>
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top zebra" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="{{ url('frontend/images/background/2.jpg') }}" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Cars</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <section id="section-cars">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <form action="{{ route('filter_cars') }}" method="get">
                                @csrf
                                <div class="item_filter_group">
                                    <h4>Vehicle Type</h4>
                                    <div class="de_form">
                                        <div class="de_checkbox">
                                            <input id="vehicle_type_1" name="types[]" type="checkbox"
                                                value="Car">
                                            <label for="vehicle_type_1">Car</label>
                                        </div>

                                        <div class="de_checkbox">
                                            <input id="vehicle_type_2" name="types[]" type="checkbox"
                                                value="Van">
                                            <label for="vehicle_type_2">Van</label>
                                        </div>

                                        <div class="de_checkbox">
                                            <input id="vehicle_type_3" name="types[]" type="checkbox"
                                                value="Minibus">
                                            <label for="vehicle_type_3">Minibus</label>
                                        </div>

                                        <div class="de_checkbox">
                                            <input id="vehicle_type_4" name="types[]" type="checkbox"
                                                value="Prestige">
                                            <label for="vehicle_type_4">Prestige</label>
                                        </div>

                                    </div>

                                </div>

                                <div class="item_filter_group">
                                    <h4>Car Body Type</h4>
                                    <div class="de_form">
                                        <div class="de_checkbox">
                                            <input id="car_body_type_1" name="bodytypes[]" type="checkbox"
                                                value="Convertible">
                                            <label for="car_body_type_1">Convertible</label>
                                        </div>

                                        <div class="de_checkbox">
                                            <input id="car_body_type_2" name="bodytypes[]" type="checkbox"
                                                value="Coupe">
                                            <label for="car_body_type_2">Coupe</label>
                                        </div>

                                        <div class="de_checkbox">
                                            <input id="car_body_type_3" name="bodytypes[]" type="checkbox"
                                                value="Exotic Cars">
                                            <label for="car_body_type_3">Exotic Cars</label>
                                        </div>

                                        <div class="de_checkbox">
                                            <input id="car_body_type_4" name="bodytypes[]" type="checkbox"
                                                value="Hatchback">
                                            <label for="car_body_type_4">Hatchback</label>
                                        </div>

                                        <div class="de_checkbox">
                                            <input id="car_body_type_5" name="bodytypes[]" type="checkbox"
                                                value="Minivan">
                                            <label for="car_body_type_5">Minivan</label>
                                        </div>

                                        <div class="de_checkbox">
                                            <input id="car_body_type_6" name="bodytypes[]" type="checkbox"
                                                value="Pickup">
                                            <label for="car_body_type_6">Pickup Truck</label>
                                        </div>

                                        <div class="de_checkbox">
                                            <input id="car_body_type_7" name="bodytypes[]" type="checkbox"
                                                value="Sedan">
                                            <label for="car_body_type_7">Sedan</label>
                                        </div>

                                        <div class="de_checkbox">
                                            <input id="car_body_type_8" name="bodytypes[]" type="checkbox"
                                                value="Sports Car">
                                            <label for="car_body_type_8">Sports Car</label>
                                        </div>

                                        <div class="de_checkbox">
                                            <input id="car_body_type_9" name="bodytypes[]" type="checkbox"
                                                value="Station Wagon">
                                            <label for="car_body_type_9">Station Wagon</label>
                                        </div>

                                        <div class="de_checkbox">
                                            <input id="car_body_type_10" name="bodytypes[]" type="checkbox"
                                                value="SUV">
                                            <label for="car_body_type_10">SUV</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="item_filter_group">
                                    <h4>Car Seats</h4>
                                    <div class="de_form">
                                        <div class="de_checkbox">
                                            <input id="car_seat_1" name="capacity[]" type="checkbox" value="2">
                                            <label for="car_seat_1">2 seats</label>
                                        </div>

                                        <div class="de_checkbox">
                                            <input id="car_seat_2" name="capacity[]" type="checkbox" value="4">
                                            <label for="car_seat_2">4 seats</label>
                                        </div>

                                        <div class="de_checkbox">
                                            <input id="car_seat_3" name="capacity[]" type="checkbox" value="5">
                                            <label for="car_seat_3">5 seats</label>
                                        </div>

                                        <div class="de_checkbox">
                                            <input id="car_seat_4" name="capacity[]" type="checkbox" value="8">
                                            <label for="car_seat_4">6+ seats</label>
                                        </div>

                                    </div>
                                </div>

                                {{-- <div class="item_filter_group">
                                <h4>Car Engine Capacity (cc)</h4>
                                <div class="de_form">
                                    <div class="de_checkbox">
                                        <input id="car_engine_1" name="car_engine_1" type="checkbox" value="car_engine_1">
                                        <label for="car_engine_1">1000 - 2000</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_engine_2" name="car_engine_2" type="checkbox" value="car_engine_2">
                                        <label for="car_engine_2">2000 - 4000</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_engine_3" name="car_engine_3" type="checkbox" value="car_engine_3">
                                        <label for="car_engine_3">4000 - 6000</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_engine_4" name="car_engine_4" type="checkbox" value="car_engine_4">
                                        <label for="car_engine_4">6000+</label>
                                    </div>

                                </div>
                            </div> --}}

                                {{-- <div class="item_filter_group">
                                <h4>Price ($)</h4>
                                  <div class="price-input">
                                    <div class="field">
                                      <span>Min</span>
                                      <input type="number" class="input-min" value="0">
                                    </div>
                                    <div class="field">
                                      <span>Max</span>
                                      <input type="number" class="input-max" value="2000">
                                    </div>
                                  </div>
                                  <div class="slider">
                                    <div class="progress"></div>
                                  </div>
                                  <div class="range-input">
                                    <input type="range" class="range-min" min="0" max="2000" value="0" step="1">
                                    <input type="range" class="range-max" min="0" max="2000" value="2000" step="1">
                                  </div>
                            </div> --}}
                                <div class="item_filter_group">
                                    <h4>Price ($)</h4>
                                    <div class="price-input">
                                        <div class="field">
                                            <span>Min</span>
                                            <input type="number" name="min_price" class="input-min" value="0">
                                        </div>
                                        <div class="field">
                                            <span>Max</span>
                                            <input type="number" name="max_price" class="input-max" value="2000">
                                        </div>
                                    </div>
                                    <!-- Add a slider or range input if you have JavaScript-based price range functionality -->
                                </div>
                                <button type="submit" class="btn btn-primary">Apply Filters</button>
                            </form>
                        </div>

                        <div class="col-lg-9">
                            <div class="row">
                                @foreach ($cars as $item)
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="de-item mb30">
                                            <div class="d-img">
                                                <img src="{{ url("$item->image") }}" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <div class="d-info">
                                                <div class="d-text">
                                                    <h4>{{ $item->name }}</h4>
                                                    <div class="d-item_like">
                                                        <i class="fa fa-heart"></i><span>25</span>
                                                    </div>
                                                    <div class="d-atr-group">
                                                        <span class="d-atr"><img
                                                                src="{{ url('frontend/images/icons/1.svg') }}"
                                                                alt="">{{ $item->capacity }}</span>
                                                        <span class="d-atr"><img
                                                                src="{{ url('frontend/images/icons/2.svg') }}"
                                                                alt="">{{ $item->storage }}</span>
                                                        <span class="d-atr"><img
                                                                src="{{ url('frontend/images/icons/3.svg') }}"
                                                                alt="">{{ $item->doors }}</span>
                                                        <span class="d-atr"><img
                                                                src="{{ url('frontend/images/icons/4.svg') }}"
                                                                alt="">{{ $item->bodytype }}</span>
                                                    </div>
                                                    <div class="d-price">
                                                        Daily rate from <span>${{ $item->price }}</span>
                                                        <a class="btn-main"
                                                            href="{{ route('cars.details', $item->id) }}">Rent Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{--

                                <div class="col-xl-4 col-lg-6">
                                    <div class="de-item mb30">
                                        <div class="d-img">
                                            <img src="{{url("frontend/images/cars/chevrolet-camaro.jpg")}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="d-info">
                                            <div class="d-text">
                                                <h4>Chevrolet Camaro</h4>
                                                <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>39</span>
                                        </div>
                                        <div class="d-atr-group">
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/1.svg")}}" alt="">5</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/2.svg")}}" alt="">2</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/3.svg")}}" alt="">4</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/4.svg")}}" alt="">Exotic Car</span>
                                                </div>
                                                <div class="d-price">
                                                    Daily rate from <span>$245</span>
                                                    <a class="btn-main" href="/car-single">Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6">
                                    <div class="de-item mb30">
                                        <div class="d-img">
                                            <img src="{{url("frontend/images/cars/hyundai-staria.jpg")}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="d-info">
                                            <div class="d-text">
                                                <h4>Hyundai Staria</h4>
                                                <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>23</span>
                                        </div>
                                        <div class="d-atr-group">
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/1.svg")}}" alt="">5</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/2.svg")}}" alt="">2</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/3.svg")}}" alt="">4</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/4.svg")}}" alt="">Minivan</span>
                                                </div>
                                                <div class="d-price">
                                                    Daily rate from <span>$191</span>
                                                    <a class="btn-main" href="/car-single">Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6">
                                    <div class="de-item mb30">
                                        <div class="d-img">
                                            <img src="{{url("frontend/images/cars/toyota-rav.jpg")}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="d-info">
                                            <div class="d-text">
                                                <h4>Toyota Rav 4</h4>
                                                <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>63</span>
                                        </div>
                                        <div class="d-atr-group">
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/1.svg")}}" alt="">5</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/2.svg")}}" alt="">2</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/3.svg")}}" alt="">4</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/4.svg")}}" alt="">SUV</span>
                                                </div>
                                                <div class="d-price">
                                                    Daily rate from <span>$114</span>
                                                    <a class="btn-main" href="/car-single">Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6">
                                    <div class="de-item mb30">
                                        <div class="d-img">
                                            <img src="{{url("frontend/images/cars/bentley.jpg")}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="d-info">
                                            <div class="d-text">
                                                <h4>Bentley</h4>
                                                <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>45</span>
                                        </div>
                                        <div class="d-atr-group">
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/1.svg")}}" alt="">5</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/2.svg")}}" alt="">2</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/3.svg")}}" alt="">4</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/4.svg")}}" alt="">SUV</span>
                                                </div>
                                                <div class="d-price">
                                                    Daily rate from <span>$299</span>
                                                    <a class="btn-main" href="/car-single">Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6">
                                    <div class="de-item mb30">
                                        <div class="d-img">
                                            <img src="{{url("frontend/images/cars/lexus.jpg")}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="d-info">
                                            <div class="d-text">
                                                <h4>Lexus</h4>
                                                <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>61</span>
                                        </div>
                                        <div class="d-atr-group">
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/1.svg")}}" alt="">5</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/2.svg")}}" alt="">2</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/3.svg")}}" alt="">4</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/4.svg")}}" alt="">Sedan</span>
                                                </div>
                                                <div class="d-price">
                                                    Daily rate from <span>$131</span>
                                                    <a class="btn-main" href="/car-single">Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6">
                                    <div class="de-item mb30">
                                        <div class="d-img">
                                            <img src="{{url("frontend/images/cars/range-rover.jpg")}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="d-info">
                                            <div class="d-text">
                                                <h4>Range Rover</h4>
                                                <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>69</span>
                                        </div>
                                        <div class="d-atr-group">
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/1.svg")}}" alt="">5</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/2.svg")}}" alt="">2</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/3.svg")}}" alt="">4</span>
                                                    <span class="d-atr"><img src="{{url("frontend/images/icons/4.svg")}}" alt="">Exotic Car</span>
                                                </div>
                                                <div class="d-price">
                                                    Daily rate from <span>$228</span>
                                                    <a class="btn-main" href="/car-single">Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>   --}}



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
