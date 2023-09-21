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
                                        <a href="index-2.html">
                                            <img class="logo-1" src="{{url("frontend/images/logo-light.png")}}" alt="">
                                            <img class="logo-2" src="{{url('frontend/images/logo.png')}}" alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="/index">User Home</a>
                                    </li>
                                    <li><a class="menu-item" href="/cars">Cars</a>
                                    </li>
                                    <li><a class="menu-item" href="/booking">Company Home</a></li>
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
                                                <h4>Gaush</h4>
                                                <span class="text-gray">gaush786@gmail.com </span>
                                            </div>

                                            <div class="d-line"></div>

                                            <ul class="menu-col">
                                                <li><a href=""><i class="fa fa-home"></i>Dashboard</a></li>
                                                {{-- <li><a href="{{url('/dashboard/profile')}}"><i class="fa fa-user"></i>My Profile</a></li>
                                                <li><a href="{{url('/dashboard/myorder')}}"><i class="fa fa-calendar"></i>My Orders</a></li> --}}
                                                <li><a href="{{route('admin.logout')}}"><i class="fa fa-sign-out"></i>Sign Out</a></li>
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
									<h1>Admin Dashboard</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <section id="section-cars" class="bg-gray-100">
                <div class="container">
                    <div class="row">
                        <div class="row-lg-3 mb30">
                            <div class="card p-4 rounded-5">
                                <div class="profile_avatar">
                                    <div class="profile_img">
                                        <img src="{{url('frontend/images/profile/1.jpg')}}" alt="">
                                    </div>
                                    <div class="profile_name">
                                        <h4>
                                             Gaush                                             
                                             <span class="profile_username text-gray">gaush786@gmail.com </span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="spacer-20"></div>
                                <ul class="menu-col">
                                    <li><a href="" class="active"><i class="fa fa-home"></i>Dashboard</a></li>
                                    <li><a href="{{route('admin.logout')}}"><i class="fa fa-sign-out"></i>Sign Out</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-9">

                            <div class="card p-4 rounded-5 mb25">
                                <h4>Customers Table</h4>

                                <table class="table de-table">
                                  <thead>
                                    <tr>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Customer ID</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Customer Name</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Customer Email</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Customer Username</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Customer Phone No.</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Customer status</span></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($users as $item)
                                    <tr>
                                      <td><span class="d-lg-none d-sm-block">Customer ID</span><div class="badge bg-gray-100 text-dark">{{$item->id}}</div></td>
                                      <td><span class="d-lg-none d-sm-block">Customer Name</span><span class="bold">{{$item->name}}</span></td>
                                      <td><span class="d-lg-none d-sm-block">Customer Email</span><span class="bold">{{$item->email}}</span></td>
                                      <td><span class="d-lg-none d-sm-block">Customer Username</span class="bold">{{$item->username}}</td>
                                      <td><span class="d-lg-none d-sm-block">Customer Phone No.</span class="bold">{{$item->phone}}</td>
                                        @if ($item->status  == "active")
                                        <td><div class="badge rounded-pill bg-success">{{$item->status}}</div></td>      
                                        @else
                                        <td><div class="badge rounded-pill bg-danger">{{$item->status}}</div></td>
                                        @endif
                                        
                                    </tr>
                                    @endforeach 
                                  </tbody>
                                </table>
                        </div>

                        
                        <div class="col-lg-9">

                            <div class="card p-4 rounded-5 mb25">
                                <h4>Company Table</h4>

                                <table class="table de-table">
                                  <thead>
                                    <tr>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray"> ID</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Name</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray"> Email</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray"> Username</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray"> Phone No.</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Company Name</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Company City</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">status</span></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($companyes as $items)
                                    <tr>
                                      <td><span class="d-lg-none d-sm-block">ID</span><div class="badge bg-gray-100 text-dark">{{$items->id}}</div></td>
                                      <td><span class="d-lg-none d-sm-block">Name</span><span class="bold">{{$items->name}}</span></td>
                                      <td><span class="d-lg-none d-sm-block">Email</span><span class="bold">{{$items->email}}</span></td>
                                      <td><span class="d-lg-none d-sm-block">Username</span class="bold">{{$items->username}}</td>
                                      <td><span class="d-lg-none d-sm-block">Phone No.</span class="bold">{{$items->phone}}</td>
                                      <td><span class="d-lg-none d-sm-block">Company Name</span><span class="bold">{{$items->cname}}</span></td>
                                      <td><span class="d-lg-none d-sm-block">Company City</span><span class="bold">{{$items->city}}</span></td>
                                      <td>
                                      @if ($items->status  === "active")
                                       <div class="badge rounded-pill bg-success">{{$items->status}}</div>      
                                     @else
                                        <div class="badge rounded-pill bg-danger">{{$items->status}}</div>
                                     @endif
                                    </td>
                                    </tr>
                                    @endforeach 
                                  </tbody>
                                </table>
                        </div>

                        <div class="col-lg-9">

                            <div class="card p-4 rounded-5 mb25">
                                <h4>Bookings Table</h4>

                                <table class="table de-table">
                                  <thead>
                                    <tr>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Order ID</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Car Name</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Pick Up Location</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Drop Off Location</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Pick Up Date</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Return Date</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Status</span></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($bookings as $item)
                                    <tr>
                                      <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#{{$item->id}}</div></td>
                                      <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">{{$item->car_name}}</span></td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Location</span>{{$item->pickuplocation}}</td>
                                      <td><span class="d-lg-none d-sm-block">Drop Off Location</span>{{$item->dropofflocation}}</td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Date</span>{{$item->pickup_date}}</td>
                                      <td><span class="d-lg-none d-sm-block">Return Date</span>{{$item->return_date}}</td>
                                      <td>
                                     @if ($item->status === 'scheduled')
                                     <div class="badge rounded-pill bg-warning">{{$item->status}}</div>
                                     @elseif($item->status === 'cancelled')
                                     <div class="badge rounded-pill bg-danger">{{$item->status}}</div>
                                     @else
                                     <div class="badge rounded-pill bg-success">{{$item->status}}</div>
                                     @endif
                                      </td>
                                    </tr>
                                    @endforeach 
          
                                  </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </section>
			
			
        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>
         <!-- footer begin -->
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