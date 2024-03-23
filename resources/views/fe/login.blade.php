@extends('fe.index')
@section('main')
    <div class="login-form w3_form">
        <!--  Title-->
        <div class="login-title w3_title">
            <h1>Elegant login Form</h1>
        </div>
        <div class="login w3_login">
            <h2 class="login-header w3_header">Log in</h2>
            <div class="w3l_grid">
                <form method="POST" action="{{ route('postLogin') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" required="" class="form-control" name="email" placeholder="Your Email">
                    </div>

                    <div class="form-group mb-3">
                        <input class="form-control" required="" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="login_footer form-group mb-3">
                        <div class="chek-form">
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                            </div>
                        </div>
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-fill-out btn-block" name="login">Log in</button>
                    </div>
                </form>

                <div class="second-section w3_section">
                    <div class="bottom-header w3_bottom">
                        <h3>OR</h3>
                    </div>
                    <div class="social-links w3_social">
                        <ul>
                            <!-- facebook -->
                            <li> <a class="facebook" href="#" target="blank"><i class="fa fa-facebook"></i></a></li>

                            <!-- twitter -->
                            <li> <a class="twitter" href="#" target="blank"><i class="fa fa-twitter"></i></a></li>

                            <!-- google plus -->
                            <li> <a class="googleplus" href="#" target="blank"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bottom-text w3_bottom_text">
                    <p>No account yet?<a href="{{ route('register') }}">Signup</a></p>
                    <h4> <a href="#">Forgot your password?</a></h4>
                </div>

            </div>
        </div>

    </div>Fs
@endsection
