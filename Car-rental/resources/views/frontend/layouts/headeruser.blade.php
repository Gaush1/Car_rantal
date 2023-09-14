<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/account-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Sep 2023 13:05:43 GMT -->
<head>
    <title>Rentaly - Multipurpose Vehicle Car Rental Website Template</title>
    <link rel="icon" href="{{url('frontend/images/icon.png')}}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{url('frontend/css/mdb.min.css')}}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{url('frontend/css/plugins.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('frontend/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('frontend/css/coloring.css')}}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{url("frontend/css/colors/scheme-01.css")}}" rel="stylesheet" type="text/css">
</head>

<body>
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
                            <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>+208 333 9296</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-envelope"></i>contact@rentaly.com</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>Mon - Fri 08.00 - 18.00</a></div>
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
                                        <a href="/">
                                            <img class="logo-1" src="{{url("frontend/images/logo-light.png")}}" alt="">
                                            <img class="logo-2" src="{{url('frontend/images/logo.png')}}" alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="/">Home</a>
                                    </li>
                                    <li><a class="menu-item" href="/cars">Cars</a>
                                    </li>
                                    <li><a class="menu-item" href="/booking">Booking</a></li>
                                    <li><a class="menu-item" href="">My Account</a>
                                        <ul>
                                            <li><a class="menu-item" href="{{url('/dashboard')}}">Dashboard</a></li>
                                            <li><a class="menu-item" href="{{url('/dashboard/profile')}}">My Profile</a></li>
                                            <li><a class="menu-item" href="{{url('/dashboard/myorder')}}">My Orders</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="/about">About Us</a></li>
                                    </li>
                                    <li><a class="menu-item" href="/contact">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <div class="de-login-menu">

                                        <span id="de-click-menu-profile" class="de-menu-profile">                           
                                            <img src="{{url('frontend/images/profile/1.jpg')}}" class="img-fluid" alt="">
                                        </span>

                                        

                                        <div id="de-submenu-profile" class="de-submenu">
                                            <div class="d-name">
                                                <h4>{{ Auth::user()->name }} </h4>
                                                <span class="text-gray">{{ Auth::user()->email }} </span>
                                            </div>

                                            <div class="d-line"></div>

                                            <ul class="menu-col">
                                                <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i>Dashboard</a></li>
                                                <li><a href="{{url('/dashboard/profile')}}"><i class="fa fa-user"></i>My Profile</a></li>
                                                <li><a href="{{url('/dashboard/myorder')}}"><i class="fa fa-calendar"></i>My Orders</a></li>
                                                {{-- <li><a href="account-favorite.html"><i class="fa fa-car"></i>My Favorite Cars</a></li> --}}
                                                <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i>Sign Out</a></li>
                                            </ul>
                                        </div>
                                        <span id="menu-btn"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>