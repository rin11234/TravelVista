@extends('fe.index')
@section('main')
     <!-- Login area S t a r t  -->
     <div class="login-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                    <div class="login-card">
                        <!-- Logo -->
                        <div class="logo mb-40">
                            <a href="index.html" class="mb-30 d-block">
                                <img src="assets/images/logo/logo.png" alt="logo" class="changeLogo">
                            </a>
                        </div>
                        <!-- Form -->
                        <form action="{{ route('postLogin') }}" method="POST">
                            @csrf
                            <div class="position-relative contact-form mb-24">
                                <label class="contact-label">Email </label>
                                <input class="form-control contact-input" type="text" name="email"
                                    placeholder="Enter Your Email">
                            </div>

                            <div class="contact-form mb-24">
                                <div class="position-relative ">
                                    <div class="d-flex justify-content-between aligin-items-center">
                                        <label class="contact-label">Password</label>
                                        <a href="{{ route('forgotPassword') }}"><span class="text-primary text-15"> Forgot password? </span></a>
                                    </div>

                                    <input type="password" class="form-control contact-input password-input"
                                    type="password" name="password" placeholder="Password">
                                    <i class="toggle-password ri-eye-line"></i>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-fill-out btn-block" name="login">Log in</button>
                            </div>
                        </form>

                        <div class="login-footer">
                            <div class="create-account">
                                <p>
                                    Don’t have an account?
                                    <a href="{{ route('register') }}">
                                        <span class="text-primary">Register</span>
                                    </a>
                                </p>
                            </div>
                            <a href="javascript:void(0)"
                                class="login-btn d-flex align-items-center justify-content-center gap-10">
                                <img src="assets/images/icon/google-icon.png" alt="img" class="m-0">
                                <span> login with Google</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End-of Login -->
@endsection
