@extends('frontend.layouts.mainuser')
@section('mainuser-container')
        <!-- content begin -->
        <div class="no-bottom no-top zebra" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="frontend/images/background/14.jpg" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>Dashboard</h1>
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
                        <div class="col-lg-3 mb30">
                            <div class="card p-4 rounded-5">
                                <div class="profile_avatar">
                                    <div class="profile_img">
                                        <img src="frontend/images/profile/1.jpg" alt="">
                                    </div>
                                    <div class="profile_name">
                                        <h4>
                                            {{ Auth::user()->name }}                                               
                                            <span class="profile_username text-gray">{{ Auth::user()->email }} </span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="spacer-20"></div>
                                <ul class="menu-col">
                                    <li><a href="{{url('/dashboard')}}" class="active"><i class="fa fa-home"></i>Dashboard</a></li>
                                    <li><a href="{{url('/dashboard/profile')}}"><i class="fa fa-user"></i>My Profile</a></li>
                                    <li><a href="{{route('user.order')}}"><i class="fa fa-calendar"></i>My Orders</a></li>
                                    {{-- <li><a href="account-favorite.html"><i class="fa fa-car"></i>My Favorite Cars</a></li> --}}
                                    <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i>Sign Out</a></li>
                                </ul>
                            </div>
                        </div>

                        
                        <div class="col-lg-9">
                          
                            <div class="card p-4 rounded-5 mb25">
                                <h4>My Recent Orders</h4>

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
                                    @foreach ($bookedCars as $item)
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
 @endsection