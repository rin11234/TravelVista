<!DOCTYPE html>
<html lang="zxx" dir="lrt">
<head>@include('fe.head')</head>
<body>
    <header class="header-area-two">
        <!-- Header top -->
        <!-- Header menu -->
        <div class="main-header header-sticky hero-bg-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper">
                            <!-- Main-menu for desktop -->
                            <div class="main-menu">
                                <nav>
                                    <div class="d-flex justify-content-between align-items-center position-relative">
                                        <!-- Logo-->
                                        <div class="logo">
                                            <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" ></a>
                                        </div>
                                        <ul class="listing d-none d-lg-block" >

                                            <li class="single-list ">
                                                <a href="{{ route('home') }}" class="single link-active">Home</a>
                                            </li>
                                            <li class="single-list">
                                                <a href="about.html" class="single">About</a>
                                            </li>
                                            <li class="single-list">
                                                <a href="{{ route('destinationsNew') }}" class="single">Destination</a>
                                            </li>
                                            <li class="single-list">
                                                <a href="{{ route('tourPakage') }}" class="single">Tour Package</a>
                                            </li>
                                            <li class="single-list">
                                                <a href="javascript:void(0)" class="single">Pages <i
                                                        class="ri-arrow-down-s-line"></i></a>
                                                <ul class="submenu">
                                                    <li class="single-list">
                                                        <a href="tour-details.html" class="single">Tour Details</a>
                                                    </li>
                                                    <li class="single-list">
                                                        <a href="destination-details.html" class="single">Destination
                                                            Details</a>
                                                    </li>
                                                    <li class="single-list">
                                                        <a href="news-details.html" class="single">News Details</a>
                                                    </li>
                                                    <li class="single-list">
                                                        <a href="payment.html"  class="single">payment</a>
                                                    </li>
                                                    <li class="single-list">
                                                        <a href="javascript:void(0)" class="single">Login<i
                                                                class="ri-arrow-right-s-line"></i></a>
                                                        <ul class="submenu">
                                                            <li class="single-list">
                                                                <a href="login.html" class="single">Login</a>
                                                            </li>
                                                            <li class="single-list">
                                                                <a href="register.html" class="single">Registration</a>
                                                            </li>
                                                            <li class="single-list">
                                                                <a href="forgot-pass.html" class="single">Forgot
                                                                    Password</a>
                                                            </li>
                                                            <li class="single-list">
                                                                <a href="verification.html"
                                                                    class="single">Verification</a>
                                                            </li>
                                                            <li class="single-list">
                                                                <a href="new-password.html" class="single">New
                                                                    Password</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <li class="single-list">
                                                        <a href="faq.html" class="single">FAQs</a>
                                                    </li>
                                                    <li class="single-list">
                                                        <a href="privacy-policy.html" class="single">privacy
                                                            policy</a>
                                                    </li>
                                                    <li class="single-list">
                                                        <a href="terms-condition.html"
                                                            class="single">terms-condition</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="single-list">
                                                <a href="contact.html" class="single">Contact</a>
                                            </li>
                                            <li class="d-block d-lg-none">
                                                <div class="header-right pl-15">
                                                    <div class="d-flex align-items-center gap-12">
                                                        <div class="lang search-bar">
                                                            <i class="ri-search-line"></i>
                                                        </div>
                                                        <div class="divider gradient-divider"></div>
                                                        <div class="money">
                                                            <p class="pera">USD</p>
                                                        </div>
                                                    </div>
                                                    <div class="sign-btn">
                                                        <a href="login.html" class="btn-secondary-sm">Sign In</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- Header Right -->
                                        <div class="d-none d-lg-block">
                                            <div class="header-right">
                                                <div class="d-flex align-items-center gap-12">
                                                    <div class="lang search-bar">
                                                        <i class="ri-search-line"></i>
                                                    </div>
                                                    <div class="divider gradient-divider"></div>
                                                    <div class="money">
                                                        <p class="pera">USD</p>
                                                    </div>
                                                </div>
                                                <div class="sign-btn">
                                                    <a href="login.html" class="btn-secondary-sm">Sign In</a>
                                                </div>
                                                <!-- Theme Mode -->
                                                <button class="ToggleThemeButton change-theme-mode m-0 p-0 border-0">
                                                    <i class="ri-sun-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Mobile Device Seach & Theme Mode -->
                                        <div class="search-header-position d-block d-lg-none">
                                            <div class="d-flex gap-15">
                                                <div class="search-bar">
                                                    <a href="javascript:void(0)" class="rounded-btn">
                                                        <i  class="ri-search-line"></i>
                                                    </a>
                                                </div>
                                                <!-- Theme Mode -->
                                                <button class="ToggleThemeButton change-theme-mode m-0 p-0 border-0">
                                                    <i class="ri-sun-line">s</i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- / Mobile Device Seach & Theme Mode-->
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="div">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search box -->
        <div class="search-container">
            <div class="top-section">
                <div class="search-icon">
                    <i class="ri-search-line"></i>
                </div>
                <div class="modal-search-box">
                    <input type="text" id="searchField" class="search-field"
                        placeholder="Destination, Agency, Country">
                    <button id="closeSearch" class="close-search-btn">
                        <kbd class="light-text"> ESC </kbd>
                    </button>
                </div>
            </div>
            <div class="body-section">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="listing">
                            <li>
                                <h4 class="search-label">Recent</h4>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="assets/images/gallery/search-img-1.jpeg" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Dubai by Night City Tour with Fountain show
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Wonderful evening escapade starting at Madinat
                                                Jumeirah to the musical fountains to see another.
                                                Wonderful evening escapade starting at Madinat
                                                Jumeirah to the musical fountains to see another
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="assets/images/gallery/search-img-2.jpeg" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Dubai: Premium Red Dunes, Camels, Stargazing & 5*
                                                BBQ at Al Khayma Camp™️
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Give a great end to your day in Dubai with our
                                                premium evening Red Dune Desert Safari. Give a great
                                                end to your day in Dubai with our premium evening
                                                Red Dune Desert Safari.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="assets/images/gallery/search-img-3.jpeg" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Admission to Global Village in Dubai
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Admission to Dubai’s biggest, multicultural festival
                                                park with replicas of iconic landmarks. Admission to
                                                Dubai’s biggest, multicultural festival park with
                                                replicas of iconic landmarks
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <h4 class="search-label">Recent</h4>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="assets/images/gallery/search-img-1.jpeg" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Dubai by Night City Tour with Fountain show
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Wonderful evening escapade starting at Madinat
                                                Jumeirah to the musical fountains to see another.
                                                Wonderful evening escapade starting at Madinat
                                                Jumeirah to the musical fountains to see another
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="assets/images/gallery/search-img-2.jpeg" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Dubai: Premium Red Dunes, Camels, Stargazing & 5*
                                                BBQ at Al Khayma Camp™️
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Give a great end to your day in Dubai with our
                                                premium evening Red Dune Desert Safari. Give a great
                                                end to your day in Dubai with our premium evening
                                                Red Dune Desert Safari.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="assets/images/gallery/search-img-3.jpeg" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Admission to Global Village in Dubai
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Admission to Dubai’s biggest, multicultural festival
                                                park with replicas of iconic landmarks. Admission to
                                                Dubai’s biggest, multicultural festival park with
                                                replicas of iconic landmarks
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="right-section" id="filterMenu">
                            <h4 class="title">Filter Options</h4>
                            <!-- List of Filter -->
                            <ul class="listing">
                                <li>
                                    <h4 class="search-label">Post Type</h4>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Posts (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Posts (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Links (44)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Blogs (23)</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- List of Filter -->
                            <ul class="listing">
                                <li>
                                    <h4 class="search-label">Categories</h4>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Articles (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Poll (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Article (44)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Blogs (23)</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- List of Filter -->
                            <ul class="listing">
                                <li>
                                    <h4 class="search-label">Travel</h4>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Articles (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Poll (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Article (44)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Blogs (23)</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="div">
                        <div class="filter_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / End-Search -->
    </header>
    <div class="">
        @include('fe.alert')
        @yield('main')
    </div>


    <!-- Footer S t a r t -->
    <footer>
        <div class="footer-wrapper footer-bg">
            <div class="container">
                <div class="footer-area">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Company</h4>
                                    <ul class="listing">
                                        <li class="single-lsit">
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="news.html">News</a>
                                        </li>
                                        <li class="single-lsit"><a href="faq.html">Faq</a></li>
                                        <li class="single-lsit">
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Explore</h4>
                                    <ul class="listing">
                                        <li class="single-lsit"><a href="faq.html">Faq</a></li>
                                        <li class="single-lsit">
                                            <a href="tour-list.html">Tour Listings</a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="destination.html">Destination</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Quick Links</h4>
                                    <ul class="listing">
                                        <li class="single-lsit"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="single-lsit">
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Contact</h4>
                                    <ul class="listing">
                                        <li class="single-lsit">
                                            <a href="#" class="mb-20 d-block">70/A Floor Divo Tower Melbourne,
                                                Australia</a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="#">
                                                <div class="d-flex gap-12">
                                                    <i class="ri-phone-line"></i> (00) +888 123456 789
                                                </div>
                                            </a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="#">
                                                <div class="d-flex gap-12">
                                                    <i class="ri-mail-line"></i> example@gmail.com
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle-area">
                    <div class="footer-body">
                        <div class="footer-content">
                            <div class="d-flex flex-column gap-20">
                                <div class="logo">
                                    <img src="assets/images/logo/logo.png" alt="travello" class="changeLogo">
                                </div>
                                <p class="pera">
                                    Travel is a transformative and enriching experience that
                                    allows individuals to explore new destinations, cultures,
                                    and landscapes.
                                </p>
                            </div>
                            <div class="footer-right">
                                <h4 class="title">Subscribe Our Newsletter</h4>
                                <div class="subscribe-wraper">
                                    <input class="footer-search" type="search" name="footer"
                                        placeholder="Enter Your Email">
                                    <button class="subscribe-btn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <ul class="listing">
                            <li class="single-list">
                                <a href="terms-condition.html" class="single">Terms of usa</a>
                            </li>
                            <li class="single-list">
                                <a href="privacy-policy.html" class="single">Privacy and Cookies Statement</a>
                            </li>
                            <li class="single-list">
                                <a href="contact.html" class="single">How the site works</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="d-flex justify-content-between gap-14 flex-wrap">
                                <p class="pera">
                                    © <span class="current-year">2023</span> initTheme. All rights
                                    reserved
                                </p>
                                <p class="pera">Powered by @Travello</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ End-of Footer -->

    <!-- Scroll Up  -->
    <div class="progressParent" id="back-top">
        <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Add an search-overlay element -->
    <div class="search-overlay"></div>
    <!-- jquery-->
    @include('fe.footer')
</body>
</html>
