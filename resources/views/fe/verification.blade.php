@extends('fe.index')
@section('main')
<main>
    <!-- Breadcrumbs S t a r t -->
    <section class="breadcrumbs-area breadcrumb-bg">
        <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Verification</h1>
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="index.html" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                class="single active">Verification</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </section>
    <!--/ End-of Breadcrumbs-->

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
                        <form action="#" method="POST">
                            <div class="contact-form">
                                <label class="contact-label">Email </label>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="contact-form mb-24">
                                        <input class="form-control contact-input text-center" type="text"
                                            placeholder="5">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="contact-form mb-24">
                                        <input class="form-control contact-input text-center" type="text"
                                            placeholder="0">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="contact-form mb-24">
                                        <input class="form-control contact-input text-center" type="text"
                                            placeholder="3">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="contact-form mb-24">
                                        <input class="form-control contact-input text-center" type="text"
                                            placeholder="1">
                                    </div>
                                </div>
                            </div>

                            <a href="new-password.html" class="btn-primary-fill justify-content-center w-100">
                                <span class="d-flex justify-content-center gap-6">
                                    <i class="ri-lock-line"></i>
                                    <span>Verify</span>
                                </span>
                            </a>
                        </form>

                        <div class="login-footer">
                            <div class="create-account">
                                <p class="mb-0">
                                    Go back to
                                    <a href="login.html">
                                        <span class="text-primary">Login</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End-of Login -->
</main>
@endsection

