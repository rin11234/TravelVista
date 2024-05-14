@extends('fe.index')
@section('main')
     <!-- Register area S t a r t  -->
     <div class="register-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                    <div class="register-card">
                        <!-- Logo -->
                        <div class="logo mb-40">
                            <a href="index.html" class="mb-30 d-block">
                                <img src="assets/images/logo/logo.png" alt="logo" class="changeLogo">
                            </a>
                        </div>
                        <!-- Form -->
                        <form action="{{ route('postRegister') }}" method="POST">
                            @csrf
                            <div class="position-relative contact-form mb-24">
                                <label class="contact-label">Full Name </label>
                                <input class="form-control contact-input" type="text" name="name"
                                    placeholder="Enter Your Full Name">
                            </div>

                            <div class="position-relative contact-form mb-24">
                                <label class="contact-label">Email </label>
                                <input class="form-control contact-input" type="text" name="email"
                                    placeholder="Enter Your Email">
                            </div>

                            <div class="contact-form mb-24">
                                <div class="position-relative ">
                                    <label class="contact-label">Password</label>
                                    <input type="password" class="form-control contact-input password-input"
                                    type="password" name="password" placeholder="Password">
                                    <i class="toggle-password ri-eye-line"></i>
                                </div>
                            </div>

                            <div class="contact-form mb-24">
                                <div class="position-relative ">
                                    <label class="contact-label">Confirm Password</label>
                                    <input type="password" class="form-control contact-input password-input"
                                    type="password" name="password_confirmation" placeholder="Confirm Password">
                                    <i class="toggle-password ri-eye-line"></i>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-secondary " name="register">Register</button>
                            </div>
                        </form>

                        <div class="register-footer">
                            <p>Already have an account?
                                <a href="{{ route('login') }}">
                                    <span class="text-primary">Log in</span>
                                </a>
                            </p>
                            <a href="javascript:void(0)"
                                class="register-btn d-flex align-items-center justify-content-center gap-10">
                                <img src="assets/images/icon/google-icon.png" alt="img" class="m-0">
                                <span> Or Loign With Google</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End-of Register -->
@endsection
