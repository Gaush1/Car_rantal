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
                                    <li><a class="menu-item" href="/index/company">Home</a>
                                    </li>
                                    <li><a class="menu-item" href="/cars">Cars</a>
                                    </li>
                                    <li><a class="menu-item" href="/booking">Booking</a></li>
                                    <li><a class="menu-item" href="">My Account</a>
                                        <ul>
                                            <li><a class="menu-item" href="{{url('/dashbord/company')}}">Dashboard</a></li>
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
                                                <h4>{{ Auth::guard('companye')->user()->name }}</h4>
                                                <span class="text-gray">{{ Auth::guard('companye')->user()->email }} </span>
                                            </div>

                                            <div class="d-line"></div>

                                            <ul class="menu-col">
                                                <li><a href="{{url('/dashbord/company')}}"><i class="fa fa-home"></i>Dashboard</a></li>
                                                <li><a href="{{url('/dashboard/profile')}}"><i class="fa fa-user"></i>My Profile</a></li>
                                                <li><a href="{{url('/dashboard/myorder')}}"><i class="fa fa-calendar"></i>My Orders</a></li>
                                                {{-- <li><a href="account-favorite.html"><i class="fa fa-car"></i>My Favorite Cars</a></li> --}}
                                                <li><a href="{{route('logout_company')}}"><i class="fa fa-sign-out"></i>Sign Out</a></li>
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

        <!-- content begin -->
        <div class="no-bottom no-top zebra" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="{{url('frontend/images/background/14.jpg')}}" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>My Profile</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <section id="section-settings" class="bg-gray-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mb30">
                            <div class="card p-4 rounded-5">
                                <div class="profile_avatar">
                                    <div class="profile_img">
                                        <img src="{{url("frontend/images/profile/1.jpg")}}" alt="">
                                    </div>
                                    <div class="profile_name">
                                        <h4>
                                            {{Auth::guard('companye')->user()->name}}                                                
                                            <span class="profile_username text-gray">{{ Auth::guard('companye')->user()->email }}</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="spacer-20"></div>
                                <ul class="menu-col">
                                    <li><a href="{{url('/dashbord/company')}}"><i class="fa fa-home"></i>Dashboard</a></li>
                                    <li><a href="{{url('/dashboard/profile')}}" class="active"><i class="fa fa-user"></i>My Profile</a></li>
                                    <li><a href="{{url('/dashboard/myorder')}}"><i class="fa fa-calendar"></i>My Orders</a></li>
                                    <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i>Sign Out</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="card p-4  rounded-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="form-create-item" class="form-border" method="post" action="{{route('company.profile.update')}}">
                                            @csrf
                                        <div class="de_tab tab_simple">
                                        
                                            <ul class="de_nav">
                                                <li class="active"><span>Profile</span></li>
                                            </ul>
                                            
                                            <div class="de_tab_content">                            
                                                <div class="tab-1">

                                                    <div class="row">
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Name</h5>
                                                            <input type="text" name="name" id="username" class="form-control" placeholder="Enter name" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Email Address</h5>
                                                            <input type="text" name="email" id="email_address" class="form-control" placeholder="Enter email" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Username</h5>
                                                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Phone No.</h5>
                                                            <input type="text" name="phone" id="username" class="form-control" placeholder="Enter username" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>New Password</h5>
                                                            <input type="Password" name="password" id="user_password" class="form-control" placeholder="********" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Re-enter Password</h5>
                                                            <input type="Password" name="re-password" id="user_password_re-enter" class="form-control" placeholder="********" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Company Name</h5>
                                                            <input type="text" name="cname" id="username" class="form-control" placeholder="Enter username" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Company City</h5>
                                                            <input type="text" name="city" id="username" class="form-control" placeholder="Enter username" />
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <input type="submit" id="submit" class="btn-main" value="Update profile">
                                        </form>
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
                    <p>Where quality meets affordability. We understand the importance of a smooth and enjoyable journey without the burden of excessive costs. That's why we have meticulously crafted our offerings to provide you with top-notch vehicles at minimum expense.</p>
                </div>
            </div>
            
            <div class="col-lg-3">
                <div class="widget">
                    <h5>Contact Info</h5>
                    <address class="s1">
                        <span><i class="id-color fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY 10001</span>
                        <span><i class="id-color fa fa-phone fa-lg"></i>+1 333 9296</span>
                        <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
                        <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
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
<a href="https://themeforest.net/cart/add_items?ref=designesia&amp;item_ids=44940477" target="_blank"><span>$</span>15</a>
<div class="pn-hover">Buy Now</div>
</div>
<!-- Javascript Files
================================================== -->
<script src="{{url('frontend/js/plugins.js')}}"></script>
<script src="{{url('frontend/js/designesia.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgiM7ogCAA2Y5pgSk2KXZfxF5S_1jsptA&amp;libraries=places&amp;callback=initPlaces" async="" defer=""></script>

</body>


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Sep 2023 13:05:20 GMT -->
</html>