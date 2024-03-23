@extends('fe.index')
@section('main')
    <div class="login-form w3_form">
        <!--  Title-->
        <div class="login-title w3_title">
            <h1>Elegant login Form</h1>
        </div>
        <div class="login w3_login">
            <h2 class="login-header w3_header">Resiter</h2>
            <div class="w3l_grid">
                <form class="login-container" action="{{ route('postRegister') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" required="" class="form-control" name="name" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" required="" class="form-control" name="email" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" required="" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" required="" type="password" name="password" placeholder="Confirm Password">
                    </div>
                    <input type="submit" value="Submit">
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
                    <p>No account yet?<a href="#">Signup</a></p>
                    <h4> <a href="#">Forgot your password?</a></h4>
                </div>

            </div>
        </div>

    </div>

@endsection
