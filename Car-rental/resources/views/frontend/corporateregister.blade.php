
@extends('frontend.layouts.maincompany')
@section('maincompany-container') 
   <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="{{url("frontend/images/background/subheader.jpg")}}" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>Register</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
            

            <section aria-label="section">
                <div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<h3>Don't have an account? Register now.</h3>
                            <p>Welcome to Rentaly. We're excited to have you on board. By creating an account with us, you'll gain access to a range of benefits and convenient features that will enhance your car rental experience.</p>
							
							<div class="spacer-10"></div>
							
							<form  class="form-border" action='{{ route('company.register.submit') }}' method="post">
                                @csrf
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Name:</label>
                                            <input type='text' name='name'  class="form-control" required autocomplete="off">
                                            @error('name')
                                            {{ $message }}
                                             @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Email Address:</label>
                                            <input type='text' name='email'  class="form-control" required autocomplete="off">
                                            @error('email')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Choose a Username:</label>
                                            <input type='text' name='username'  class="form-control" required autocomplete="off">
                                            @error('username')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Phone:</label>
                                            <input type='text' name='phone' class="form-control" required autocomplete="off" minlength="10">
                                            @error('phone')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Password:</label>
                                            <input type='text' name='password'  class="form-control" required autocomplete="off" minlength="8">
                                            @error('password')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Re-enter Password:</label>
                                            <input type='text' name='re-password' class="form-control" required autocomplete="off" minlength="8">
                                            @error('re-password')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Company Name:</label>
                                            <input type='text' name='cname'  class="form-control" required autocomplete="off">
                                            @error('username')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Company City:</label>
                                            <input type='text' name='city'  class="form-control" required autocomplete="off">
                                            @error('username')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">

                                        <div id='submit' class="pull-left">
                                            <input type='submit' class="btn-main color-2">
                                        </div>

                                    </div>

                                </div>
                            </form>
						</div>
                    </div>
				</div>
            </section>
			
			
        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>
         <!-- footer begin -->
 @endsection