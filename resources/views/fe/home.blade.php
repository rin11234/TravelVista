@extends('fe.index')
@section('main')

<main>
    <!-- Hero area S t a r t-->
    <section class="hero-padding-two hero-bg-two position-relative bottom-padding1">
        <div class="container">
            <div class="row  g-4 align-items-center justify-content-between position-relative">
                <div class="col-xl-7 col-lg-6">
                    <div class="hero-caption-two position-relative">
                        <span class="highlights wow fadeInUp d-block" data-wow-delay="0.0s">Explore The Word</span>
                        <h4 class="title wow fadeInUp" data-wow-delay="0.1s">  Plan Tours To Dream Locations In Just A Click! </h4>
                        <p class="pera wow fadeInUp" data-wow-delay="0.3s">
                            Lorem ipsum dolor sit amet consectetur. Feugiat id sed
                            consectetur amet. Mollis mi mattis ullamcorper sit praesent
                            erat turpis. At pulvinar pellentesque est pellentesque
                        </p>
                        <div class="button-section wow fadeInUp" data-wow-delay="0.5s">
                            <a href="payment.html" class="btn-secondary-sm hero-book-btn">Start Booking</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <form action="{{ route('search') }}" method="GET">
                        @csrf
                        <div class="search-tour-card sidenav-active">
                            <div class="section-title text-center">
                                <h4 class="title">Search Tours</h4>
                                <p class="pera">Lorem ipsum dolor sit amet consectetur. Feugiat id sed.</p>
                            </div>
                            <div class="plan-section-two">
                                <div class="select-dropdown-section">
                                    <div class="d-flex gap-10 align-items-center">
                                        <i class="ri-map-pin-line"></i>
                                        <h4 class="select2-title">Destination</h4>
                                    </div>
                                    <select class="destination-dropdown" name="search" id="search">
                                        <option value="">Select Destination</option>
                                        @foreach($destinations as $destination)
                                            <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="select-dropdown-section">
                                    <div class="d-flex gap-10 align-items-center">
                                        <i class="ri-flight-takeoff-fill"></i>
                                        <h4 class="select2-title">Tour Type</h4>
                                    </div>
                                    <select class="destination-dropdown" name="tour_id">
                                        <option value="search">Select Tour Type</option>
                                        @foreach($tourTypes as $tourType)
                                            <option value="{{ $tourType->id }}">{{ $tourType->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="dropdown-section">
                                    <div class="d-flex gap-10 align-items-center">
                                        <i class="ri-time-line"></i>
                                        <div class="custom-dropdown custom-date">
                                            <h4 class="title">Date From</h4>
                                            <div class="arrow">
                                                <i class="ri-arrow-down-s-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="date-result">01/12/2023</div>
                                </div>
                                <div class="dropdown-section position-relative user-picker-dropdown">
                                    <div class="d-flex gap-10 align-items-center">
                                        <i class="ri-user-line"></i>
                                        <div class="custom-dropdown">
                                            <h4 class="title">Guests</h4>
                                            <div class="arrow">
                                                <i class="ri-arrow-down-s-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-result">02</div>
                                    <div class="user-picker dropdown-shadow">
                                        <div class="user-category">
                                            <div class="category-name">
                                                <h4 class="title">Adults</h4>
                                                <p class="pera">12years and above</p>
                                            </div>
                                            <div class="qty-container">
                                                <button class="qty-btn-minus mr-1" type="button">
                                                    <i class="ri-subtract-fill"></i>
                                                </button>
                                                <input type="text" name="qty" value="0"
                                                    class="input-qty input-rounded">
                                                <button class="qty-btn-plus ml-1" type="button">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="user-category">
                                            <div class="category-name">
                                                <h4 class="title">Children</h4>
                                                <p class="pera">2-11 years</p>
                                            </div>
                                            <div class="qty-container">
                                                <button class="qty-btn-minus mr-1" type="button">
                                                    <i class="ri-subtract-fill"></i>
                                                </button>
                                                <input type="text" name="qty" value="0"
                                                    class="input-qty input-rounded">
                                                <button class="qty-btn-plus ml-1" type="button">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="user-category">
                                            <div class="category-name">
                                                <h4 class="title">infant</h4>
                                                <p class="pera">belwo 2 years</p>
                                            </div>
                                            <div class="qty-container">
                                                <button class="qty-btn-minus mr-1" type="button">
                                                    <i class="ri-subtract-fill"></i>
                                                </button>
                                                <input type="text" name="qty" value="0"
                                                    class="input-qty input-rounded">
                                                <button class="qty-btn-plus ml-1" type="button">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="btn-section">
                                            <a href="javascript:void(0)" class="done-btn">Done</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="sign-btn">
                                    <button type="submit" class="btn-secondary-lg">Search Plan</button>
                                </div>
                            </div>
                        </div>
                                <!-- Dropdown sections for date, guests, etc. -->
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        <!-- shape 01 -->
        <div class="shape-one d-none d-lg-block">
            <img src="{{ asset('assets/images/hero/hero-bg-two-shape.png') }}" alt="travello">
        </div>
        <!-- shape 02 -->
        <div class="shape-two d-none d-lg-block">
            <img src="{{ asset('assets/images/hero/hero-bg-two.png') }}" alt="travello">
        </div>
    </section>
    <!--/ End-of Hero-->

    <!-- Packages S t a r t -->
    <section class="package-area section-padding2 mb-24">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="section-title mx-430 mx-auto text-center">
                        <span class="highlights">Popular Packages</span>
                        <h4 class="title">
                            Most Favorite Tour Place in The World
                        </h4>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-london" role="tabpanel"
                    aria-labelledby="pills-london-tab">
                    <div class="row g-4">
                        @foreach ($featuredTour as $item)
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="package-card">
                                <div class="package-img imgEffect4">
                                    <a href="{{ route('detail',['id' => $item->id]) }}">
                                        <img src="{{ ('storage/images/' . $item->image) }}" alt="travello">
                                    </a>
                                    <div class="image-badge">
                                        <p class="pera">Featured</p>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <h4 class="area-name">
                                        <a href="{{ route('detail',['id' => $item->id]) }}">{{ $item->title }}</a>
                                    </h4>
                                    <div class="location">
                                        <i class="ri-map-pin-line"></i>
                                        <div class="name">Đà Nẵng</div>
                                    </div>
                                    <div class="packages-person">
                                        <div class="count">
                                            <i class="ri-time-line"></i>
                                            <p class="pera">{{ $item->thoi_gian }}</p>
                                        </div>
                                        <div class="count">
                                            <i class="ri-user-line"></i>
                                            <p class="pera">{{ $item->so_cho }}</p>
                                        </div>
                                    </div>
                                    <div class="price-review">
                                        <div class="d-flex gap-10">
                                            <p class="light-pera">price</p>
                                            <p class="pera">{{ $item->price }}</p>
                                        </div>
                                        {{-- <div class="rating">
                                            <i class="ri-star-s-fill"></i>
                                            <p class="pera">4.7 (20 Reviews)</p>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-button d-inline-block">
                        <a href="{{ route('tourPakage') }}">
                            <div class="btn-primary-icon-sm">
                                <p class="pera">View All Tour</p>
                                <i class="ri-arrow-right-up-line"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End of Packages -->
     <!-- Destination area S t a r t -->
    <section class="destination-section-two px-5">
        <div class="destination-area-two position-relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title text-center mx-430 mx-auto position-relative">
                            <span class="highlights mx-30">Destination List</span>
                            <h4 class="title">
                                We Provide Top Tourist Destinations
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    @foreach ($destinationNew as $item)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <a href="{{ route('destinationsNew') }}" class="destination-banner-two h-calc wow fadeInUp" data-wow-delay="0.s">
                            <img src="{{ ('storage/images/' .$item->image) }}" alt="travello">
                            <div class="destination-content-two">

                                <div class="destination-info-two">
                                    <div class="destination-name">
                                        <p class="pera">{{ $item->name }}</p>
                                    </div>
                                    <div class="button-section">
                                        <div class="arrow"><i class="ri-arrow-right-line"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <!--/ End-of Destination -->




    <!-- Brand S t a r t -->
    <div class="branding pt-30">
        <div class="container">
            <div class="swiper brandSwiper-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1.jpeg" alt="travello">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-2.jpg" alt="travello">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-3.jpg" alt="travello">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-4.png" alt="travello">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-5.png" alt="travello">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1.jpeg" alt="travello">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-2.jpg" alt="travello">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End of Brand -->

    <!-- News S t a r t -->
    <section class="news-area section-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="section-title text-center mx-605 mx-auto position-relative mb-60">
                        <span class="highlights">News & Article</span>
                        <h4 class="title">
                            Latest News & Articles From The Blog Posts
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <article class="news-card-two wow fadeInUp" data-wow-delay="0.0s">
                        <figure class="news-banner-two imgEffect">
                            <a href="news-details.html"><img src="assets/images/news/news-4.png" alt="travello"></a>
                        </figure>
                        <div class="news-content">
                            <div class="heading">
                                <span class="heading-pera">Tour Guide</span>
                            </div>
                            <h4 class="title line-clamp-2">
                                <a href="news-details.html">The World is a Book and Those Who do not Travel Read
                                    Only
                                    One Page.</a>
                            </h4>
                            <div class="news-info">
                                <div class="d-flex gap-10 align-items-center">
                                    <div class="all-user">
                                        <div class="happy-user">
                                            <img src="{{ asset('assets/images/hero/user-1.jpeg') }}" alt="travello">
                                        </div>
                                        <div class="happy-user">
                                            <img src="{{ asset('assets/images/hero/user-2.jpeg') }}" alt="travello">
                                        </div>
                                        <div class="happy-user">
                                            <img src="{{ asset('assets/images/hero/user-3.jpeg') }}" alt="travello">
                                        </div>
                                        <div class="happy-user">
                                            <img src="{{ asset('assets/images/hero/user-4.jpeg') }}" alt="travello">
                                        </div>
                                    </div>
                                </div>
                                <p class="time">10 min read</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <article class="news-card-two wow fadeInUp" data-wow-delay="0.1s">
                        <figure class="news-banner-two imgEffect">
                            <a href="news-details.html"><img src="assets/images/news/news-5.png" alt="travello"></a>
                        </figure>
                        <div class="news-content">
                            <div class="heading">
                                <span class="heading-pera">Tour Guide</span>
                            </div>
                            <h4 class="title line-clamp-2">
                                <a href="news-details.html">The World is a Book and Those Who do not Travel Read
                                    Only
                                    One Page.</a>
                            </h4>
                            <div class="news-info">
                                <div class="d-flex gap-10 align-items-center">
                                    <div class="all-user">
                                        <div class="happy-user">
                                            <img src="assets/images/hero/user-1.jpeg" alt="travello">
                                        </div>
                                        <div class="happy-user">
                                            <img src="assets/images/hero/user-2.png" alt="travello">
                                        </div>
                                        <div class="happy-user">
                                            <img src="assets/images/hero/user-3.png" alt="travello">
                                        </div>
                                        <div class="happy-user">
                                            <img src="assets/images/hero/user-4.jpeg" alt="travello">
                                        </div>
                                    </div>
                                </div>
                                <p class="time">10 min read</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <article class="news-card-two wow fadeInUp" data-wow-delay="0.2s">
                        <figure class="news-banner-two imgEffect">
                            <a href="news-details.html"><img src="assets/images/news/news-6.png" alt="travello"></a>
                        </figure>
                        <div class="news-content">
                            <div class="heading">
                                <span class="heading-pera">Tour Guide</span>
                            </div>
                            <h4 class="title line-clamp-2">
                                <a href="news-details.html">The World is a Book and Those Who do not Travel Read
                                    Only
                                    One Page.</a>
                            </h4>
                            <div class="news-info">
                                <div class="d-flex gap-10 align-items-center">
                                    <div class="all-user">
                                        <div class="happy-user">
                                            <img src="assets/images/hero/user-1.jpeg" alt="travello">
                                        </div>
                                        <div class="happy-user">
                                            <img src="assets/images/hero/user-2.png" alt="travello">
                                        </div>
                                        <div class="happy-user">
                                            <img src="assets/images/hero/user-3.png" alt="travello">
                                        </div>
                                        <div class="happy-user">
                                            <img src="assets/images/hero/user-4.jpeg" alt="travello">
                                        </div>
                                    </div>
                                </div>
                                <p class="time">10 min read</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-12 text-center">
                <div class="section-button d-inline-block wow fadeInUp" data-wow-delay="0.3s">
                    <a href="news.html">
                        <div class="btn-primary-icon-sm">
                            <p class="pera">View All News</p>
                            <i class="ri-arrow-right-up-line"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--/ End of News -->
</main>
@endsection
