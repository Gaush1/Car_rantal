@extends('frontend.layouts.mainuser')
@section('mainuser-container')
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
                                            {{ Auth::user()->name }}                                                
                                            <span class="profile_username text-gray">{{ Auth::user()->email }}</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="spacer-20"></div>
                                <ul class="menu-col">
                                    <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i>Dashboard</a></li>
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
                                        <form id="form-create-item" class="form-border" method="post" action="{{route('user.profile.update')}}">
                                            @csrf
                                        <div class="de_tab tab_simple">
                                        
                                            <ul class="de_nav">
                                                <li class="active"><span>Profile</span></li>
                                            </ul>
                                            
                                            <div class="de_tab_content">                            
                                                <div class="tab-1">
                                                   <h3>Hi, {{Auth::user()->name}}</h3>
                                                    <div class="row">
                                                        <h4>Edit Profile</h4>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Name</h5>
                                                            <input type="text" name="name" id="username" class="form-control" placeholder="Enter name" autocomplete="off"/>
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Email Address</h5>
                                                            <input type="text" name="email" id="email_address" class="form-control" placeholder="Enter email" autocomplete="off" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Username</h5>
                                                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" autocomplete="off" />
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
                                                        {{-- <div class="col-md-6 mb20">
                                                            <h5>Language</h5>
                                                            <p class="p-info">Select your prefered language.</p>
                                                            <div id="select_lang" class="dropdown fullwidth">
                                                                <a href="#" class="btn-selector">English</a>
                                                                <ul>
                                                                    <li class="active"><span>English</span></li>
                                                                    <li><span>France</span></li>
                                                                    <li><span>German</span></li>
                                                                    <li><span>Japan</span></li>
                                                                    <li><span>Italy</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb20">
                                                            <h5>Hour Format</h5>
                                                            <p class="p-info">Select your prefered language.</p>
                                                            <div id="select_hour_format" class="dropdown fullwidth">
                                                                <a href="#" class="btn-selector">24-hour</a>
                                                                <ul>
                                                                    <li class="active"><span>24-hour</span></li>
                                                                    <li><span>12-hour</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>                                --}}
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
        
       @endsection