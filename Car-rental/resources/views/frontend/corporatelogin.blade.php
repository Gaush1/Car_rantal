@extends('frontend.layouts.main')
@section('main-container')
    <!-- header close -->
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section" class="jarallax">
            <img src="{{url("frontend/images/background/2.jpg")}}" class="jarallax-img" alt="">
            <div class="v-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 offset-lg-4">
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
                                <form class="form-border" method="post" action='{{ route('login_submit_company') }}'>
                                    @csrf
                                    <div class="field-set">
                                        <input type="text" name="email" class="form-control" placeholder="Your Email"
                                            required autocomplete="off" />
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="field-set">
                                        <input type="text" name="password" class="form-control" placeholder="Password"
                                            required autocomplete="off" />
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div id="submit">
                                        <input type="submit" value="Sign In" class="btn-main btn-fullwidth rounded-3" />
                                    </div>
                                </form>
                                <div class="title-line">Or&nbsp;sign&nbsp;up&nbsp;</div>
                                <div class="row g-2">
                                    {{-- <div class="col-lg-6">
                                        <a class="btn-sc btn-fullwidth mb10" href="#"><img
                                                src="frontend/images/svg/google_icon.svg" alt="">Google</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a class="btn-sc btn-fullwidth mb10" href="#"><img
                                                src="frontend/images/svg/facebook_icon.svg" alt="">Facebook</a>
                                    </div> --}}
                                    <a href="{{ route('company.register') }}"><input type="button" value="Register" class="btn-main btn-fullwidth rounded-3" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
@endsection
