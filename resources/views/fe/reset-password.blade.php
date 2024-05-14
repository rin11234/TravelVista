@extends('fe.index')
@section('main')
<div class="login-area section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                <div class="login-card">
                    <div class="logo mb-40">
                        <a href="index.html" class="mb-30 d-block">
                            <img src="assets/images/logo/logo.png" alt="logo" class="changeLogo">
                        </a>
                    </div>

                    <!-- Reset Password Form -->
                    <form action="{{ route('resetPasswordSubmit') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="position-relative contact-form mb-24">
                            <label class="contact-label">Email </label>
                            <input class="form-control contact-input" type="email" name="email" placeholder="Enter Your Email" value="{{ old('email') }}">
                        </div>

                        <div class="position-relative contact-form mb-24">
                            <label class="contact-label">New Password </label>
                            <input class="form-control contact-input" type="password" name="password" placeholder="Enter Your New Password">
                        </div>

                        <div class="position-relative contact-form mb-24">
                            <label class="contact-label">Confirm Password </label>
                            <input class="form-control contact-input" type="password" name="password_confirmation" placeholder="Confirm Your New Password">
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-fill-out btn-block" name="login">Reset Password</button>
                        </div>
                    </form>
                    <!-- End of Reset Password Form -->

                    <div class="login-footer">
                        <div class="create-account">
                            <p>
                                Remembered your password?
                                <a href="{{ route('login') }}">
                                    <span class="text-primary">Log in</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
