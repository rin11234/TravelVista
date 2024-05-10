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
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Popup</title>
    <style>
        /* CSS cho nút mở hộp chat */
.open-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
    background-color: #0084ff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-family: Arial, sans-serif;
    font-size: 14px;
    outline: none;
    transition: background-color 0.3s ease;
}

.open-button:hover {
    background-color: #0056b3;
}

/* CSS cho nút đóng hộp chat */
.close-button {
    position: absolute;
    top: 5px;
    z-index: 9999;
    right: 5px;
    background-color: black;
    border: none;
    border-radius: 30%;
    cursor: pointer;
    font-size: 16px;
    color: white;
}

.close-button:hover {
    color: #ff0000;
}

/* CSS cho hộp chat */
.chat-popup {
    display: none;
    position: fixed;
    bottom: 70px;
    right: 20px;
    z-index: 9999;
    border: 1px solid #ccc;
    border-radius: 10px;
    overflow: hidden;
    max-height: 500px;
    width: 300px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
    font-family: Arial, sans-serif;
}

.chat-popup.show {
    display: block;
}

.chat-box {
    height: 300px;
    overflow-y: scroll;
    padding: 10px;
    background-color: #f4f4f4;
}

.user-message, .bot-message {
    margin-bottom: 10px;
}

.user-message {
    text-align: right;
    color: #0084ff;
}

.bot-message {
    text-align: left;
    color: #555;
}

.message-content {
    display: inline-block;
    padding: 8px 12px;
    border-radius: 20px;
    /* background-color: skyblue;
    color: white */
}
.user-message .message-content {
    background-color: skyblue;
    color: white; /* Màu cho văn bản của người dùng */
}

.bot-message .message-content {
    background-color: rgb( 239, 239, 239 );
    color: black; /* Màu cho văn bản của chatbot */
}


.input-container {
    display: flex;
    align-items: center; /* Căn các phần tử vào giữa theo chiều dọc */
    border-top: 1px solid #ccc;
    padding: 10px;
    background-color: #fff;
}

.input-container input[type="text"] {
    flex: 1; /* Phần tử chiếm toàn bộ không gian còn lại */
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}

.input-container input[type="submit"] {
    padding: 8px 20px;
    margin-left: 10px;
    background-color: #0084ff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Thêm hiệu ứng khi mở và đóng hộp chat */
.chat-popup.show {
    animation: slideIn 0.3s forwards;
}

@keyframes slideIn {
    from {
        transform: translateY(100%);
    }
    to {
        transform: translateY(0);
    }
}

    </style>
</head>
<body>
    <!-- Nút mở hộp chat -->
    <button class="open-button" onclick="openChat()">Chat với Bot</button>

    <!-- Hộp chat -->
    <div class="chat-popup" id="chat-popup">
        <div class="chat-box" id="chat-box">
            <div class="bot-message">
                <div class="message-content">Xin chào! Tôi là chatbot của Travel Vista. Tôi có thể giúp gì cho bạn?</div>
            </div>
        </div>
        <button class="close-button" onclick="closeChat()">x</button>
        <div class="input-container">
            <input type="text" id="user-input" placeholder="Nhập tin nhắn của bạn...">
            <input type="submit" value="Gửi" onclick="sendMessage()">
        </div>
    </div>

    <script>
        function openChat() {
            document.getElementById("chat-popup").classList.add("show");
        }

        function closeChat() {
            document.getElementById("chat-popup").classList.remove("show");
        }

        function sendMessage() {
    var userInput = document.getElementById("user-input").value;
    var chatBox = document.getElementById("chat-box");

    // Hiển thị tin nhắn của người dùng trong hộp chat
    var userMessageElement = document.createElement("div");
    userMessageElement.classList.add("user-message");
    userMessageElement.innerHTML = '<div class="message-content">' + userInput + '</div>';
    chatBox.appendChild(userMessageElement);

    // Gửi yêu cầu POST đến API của Coze
    var requestOptions = {
        method: 'POST',
        headers: {
            'Authorization': 'Bearer pat_XrqXawBXK6yfZekEJIaKXEWOcWtcdZmWGjtJM4JlvhtFQYXHcG2KWc3W1C5lN464',
            'Content-Type': 'application/json',
            'Accept': '*/*',
            'Host': 'api.coze.com',
            'Connection': 'keep-alive',
        },
        body: JSON.stringify({
            "conversation_id": "123",
            "bot_id": "7354707609280446481",
            "user": "123333333",
            "query": userInput,
            "stream": false
        })
    };

    fetch('https://api.coze.com/open_api/v2/chat', requestOptions)
        .then(response => response.json())
        .then(result => {
            console.log(result.messages);
            const data = result.messages;
            let isOption = false
            data.map((item)=>{
                console.log(item);
                const content = item.content;
                // nếu là generate_answer_finish nghĩa là qua phần option
                if(content.includes('generate_answer_finish')) {
                    isOption = true; // chuyển qua add cho option
                    return;
                }
                // nếu đang add option thì dô đây 
                if(isOption == true) {
                    // làm gì đó....

                    return
                }
                // ngược lại thì là đang add message của bot trả về
                // Hiển thị phản hồi từ bot trong hộp chat
                var botMessageElement = document.createElement("div");
                botMessageElement.classList.add("bot-message");
                botMessageElement.innerHTML = '<div class="message-content">' + content + '</div>'; // cộng dô chớ a
                chatBox.appendChild(botMessageElement);
            })
            
            // Cuộn xuống cuối hộp chat
            chatBox.scrollTop = chatBox.scrollHeight;
        })
        .catch(error => console.log('Error:', error));

    // Xóa nội dung đã nhập của người dùng
    document.getElementById("user-input").value = "";
}
</script>

</body>
</html>
