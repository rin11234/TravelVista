@extends('fe.index')
@section('main')
<main>
    <!-- Breadcrumbs S t a r t -->
    <section class="breadcrumbs-area breadcrumb-bg">
        <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Blog</h1>
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="{{ route('home') }}" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                class="single active">News</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </section>
    <!--/ End-of Breadcrumbs-->

    <!-- Destination area S t a r t -->
    <section class="destination-details-section section-padding2">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details-banner imgEffect">
                        <img src="{{ asset('/storage/images/' . $post->image) }}" alt="travello">
                    </div>
                    <div class="news-details-content">
                        <div class="d-flex flex-wrap align-items-center gap-20">
                            <div class="d-flex gap-10 align-items-center">
                                <div class="author-img">
                                    <img src="assets/images/news/news-1.jpeg" alt="travello">
                                </div>
                                <p class="name">{{ $post->user->name }}</p>
                            </div>
                            <div class="divider"></div>
                            <div class="count">
                                <p class="pera">{{ $post->created_at }}</p>
                            </div>
                            <div class="divider"></div>
                            <div class="count">
                                <p class="pera">10 min read</p>
                            </div>
                        </div>
                        <h4 class="title">{{ $post->title }}</h4>
                        <p class="pera">{!! $post->content !!}</p>

                    </div>

                    <div class="comment-section">
                        <div class="main-profile">
                            <div class="user-img-lg">
                                <img src="assets/images/news/news-user-1.png" alt="travello">
                            </div>
                            {{-- <div class="user-info">
                                <h4 class="name">Chris Jordan</h4>
                                <p class="desg">Technical Content Writer</p>
                                <p class="pera">Chris Jordan is a technical content writer at Travello. he’s a tech
                                    enthusiast, writer
                                    by day, programmer by night, and always a foodie at heart!</p>
                            </div> --}}
                        </div>
                        <h4 class="comment-count">({{ $comments->count() }}) Comments</h4>
                        <div class="main-profile-two">
                            <div class="row">
                                <div class="col-12 px-3 mt-5">
                                    @foreach ($comments as $item)
                                    <div class="user-img-sm p-2">
                                        <img src="{{ asset('assets/images/avatar-trang-7.jpg') }}" alt="travello">
                                    </div>

                                    <div class="user-info">
                                        <h4 class="name-sm">{{ $item->name }}</h4>
                                        <p class="date">{{ $item->created_at->format('M d, Y') }}</p>
                                        <p class="pera">{{ $item->message }}</p>
                                        <div class="reply-btn">
                                            <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <g opacity="0.5" clip-path="url(#clip0_359_791)">
                                                        <path
                                                            d="M22.9994 23.9994C22.7342 23.9994 22.4798 23.894 22.2923 23.7065C22.1048 23.5189 21.9994 23.2646 21.9994 22.9994C21.9978 21.4086 21.3652 19.8834 20.2403 18.7585C19.1154 17.6336 17.5902 17.001 15.9994 16.9994H10.1694V18.5854C10.1693 18.9809 10.052 19.3675 9.83221 19.6963C9.61244 20.0251 9.30012 20.2814 8.93472 20.4327C8.56932 20.5841 8.16725 20.6237 7.77934 20.5465C7.39144 20.4694 7.03511 20.279 6.75541 19.9994L0.876406 14.1204C0.313993 13.5578 -0.00195313 12.7949 -0.00195312 11.9994C-0.00195313 11.2039 0.313993 10.441 0.876406 9.87838L6.75541 3.99939C7.03511 3.71977 7.39144 3.52936 7.77934 3.45223C8.16725 3.37509 8.56932 3.4147 8.93472 3.56604C9.30012 3.71738 9.61244 3.97365 9.83221 4.30247C10.052 4.63129 10.1693 5.01789 10.1694 5.41339V6.99939H14.9994C17.3855 7.00203 19.6732 7.95109 21.3604 9.63835C23.0477 11.3256 23.9968 13.6132 23.9994 15.9994V22.9994C23.9994 23.2646 23.8941 23.5189 23.7065 23.7065C23.519 23.894 23.2646 23.9994 22.9994 23.9994ZM8.16941 5.41339L2.29041 11.2924C2.10294 11.4799 1.99762 11.7342 1.99762 11.9994C1.99762 12.2645 2.10294 12.5189 2.29041 12.7064L8.16941 18.5854V15.9994C8.16941 15.7342 8.27476 15.4798 8.4623 15.2923C8.64984 15.1047 8.90419 14.9994 9.16941 14.9994H15.9994C17.135 14.999 18.2576 15.2409 19.2923 15.709C20.3269 16.177 21.2498 16.8603 21.9994 17.7134V15.9994C21.9973 14.1435 21.2591 12.3643 19.9468 11.052C18.6345 9.73968 16.8553 9.0015 14.9994 8.99938H9.16941C8.90419 8.99938 8.64984 8.89403 8.4623 8.70649C8.27476 8.51896 8.16941 8.2646 8.16941 7.99939V5.41339Z"
                                                            fill="#4B5051">
                                                    </g>
                                                    <defs>
                                                        <clippath>
                                                            <rect width="24" height="24" fill="white">
                                                        </clippath>
                                                    </defs>
                                                </svg></a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>



                        </div>
                        {{-- <div class="replied-profile">
                            <div class="main-profile-two">
                                <div class="user-img-sm">
                                    <img src="assets/images/news/news-user-2.png" alt="travello">
                                </div>
                                <div class="user-info">
                                    <h4 class="name-sm">Jenney Bairstow</h4>
                                    <p class="date">Jan 12, 2025</p>
                                    <p class="pera">Chris Jordan is a technical content writer at Travello. he’s a
                                        tech enthusiast,
                                        writer
                                        by day, programmer by night, and always a foodie at heart!</p>
                                    <div class="reply-btn">
                                        <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <g opacity="0.5" clip-path="url(#clip0_359_791)">
                                                    <path
                                                        d="M22.9994 23.9994C22.7342 23.9994 22.4798 23.894 22.2923 23.7065C22.1048 23.5189 21.9994 23.2646 21.9994 22.9994C21.9978 21.4086 21.3652 19.8834 20.2403 18.7585C19.1154 17.6336 17.5902 17.001 15.9994 16.9994H10.1694V18.5854C10.1693 18.9809 10.052 19.3675 9.83221 19.6963C9.61244 20.0251 9.30012 20.2814 8.93472 20.4327C8.56932 20.5841 8.16725 20.6237 7.77934 20.5465C7.39144 20.4694 7.03511 20.279 6.75541 19.9994L0.876406 14.1204C0.313993 13.5578 -0.00195313 12.7949 -0.00195312 11.9994C-0.00195313 11.2039 0.313993 10.441 0.876406 9.87838L6.75541 3.99939C7.03511 3.71977 7.39144 3.52936 7.77934 3.45223C8.16725 3.37509 8.56932 3.4147 8.93472 3.56604C9.30012 3.71738 9.61244 3.97365 9.83221 4.30247C10.052 4.63129 10.1693 5.01789 10.1694 5.41339V6.99939H14.9994C17.3855 7.00203 19.6732 7.95109 21.3604 9.63835C23.0477 11.3256 23.9968 13.6132 23.9994 15.9994V22.9994C23.9994 23.2646 23.8941 23.5189 23.7065 23.7065C23.519 23.894 23.2646 23.9994 22.9994 23.9994ZM8.16941 5.41339L2.29041 11.2924C2.10294 11.4799 1.99762 11.7342 1.99762 11.9994C1.99762 12.2645 2.10294 12.5189 2.29041 12.7064L8.16941 18.5854V15.9994C8.16941 15.7342 8.27476 15.4798 8.4623 15.2923C8.64984 15.1047 8.90419 14.9994 9.16941 14.9994H15.9994C17.135 14.999 18.2576 15.2409 19.2923 15.709C20.3269 16.177 21.2498 16.8603 21.9994 17.7134V15.9994C21.9973 14.1435 21.2591 12.3643 19.9468 11.052C18.6345 9.73968 16.8553 9.0015 14.9994 8.99938H9.16941C8.90419 8.99938 8.64984 8.89403 8.4623 8.70649C8.27476 8.51896 8.16941 8.2646 8.16941 7.99939V5.41339Z"
                                                        fill="#4B5051">
                                                </g>
                                                <defs>
                                                    <clippath>
                                                        <rect width="24" height="24" fill="white">
                                                    </clippath>
                                                </defs>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-profile-two">
                                <div class="user-img-sm">
                                    <img src="assets/images/news/news-user-3.png" alt="travello">
                                </div>

                            </div>
                        </div> --}}
                        <div class="contact-card mt-40">
                            <h4 class="contact-heading">Write Your Comment</h4>
                            <form method="post" action="{{ route('comment.store') }}" class="contact-form">
                                @csrf
                                <div class="row g-4">
                                    <div class="col-sm-6">
                                        <input class="custom-form" type="text" name="name" placeholder="Enter your name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="custom-form" type="text" name="email" placeholder="Enter your email">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="custom-form" type="text" name="phone" placeholder="Your Phone">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="custom-form" type="text" name="subject" placeholder="Select subject">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="custom-form-textarea" id="message" name="message" rows="3" placeholder="Enter your message..."></textarea>
                                    </div>
                                </div>
                                <div class="mt-40">
                                    <button type="submit" class="send-btn">Post Comment</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="row g-4 position-sticky top-0">
                        <div class="col-lg-12">
                            <div class="search-filter-section">
                                <div class="heading">
                                    <h4 class="title">Search Here</h4>
                                </div>
                                <div class="news-detals-search">
                                    <input type="search" class="search-input" placeholder="Search">
                                    <div class="icon">
                                        <i class="ri-search-line"></i>
                                    </div>
                                </div>
                                <div class="heading">
                                    <h4 class="title">Blog News</h4>
                                </div>
                                <ul class="recent-news-list">
                                    @foreach ($related as $item)


                                    <li class="list">
                                        <h4 class="title line-clamp-2"><a href="{{ route('post_Detail',['id'=>$item->id]) }}">{{ $item->title }}</a> </h4>
                                        <div class="d-flex justify-content-between flex-wrap gap-8">
                                            <div class="d-flex align-items-center gap-8">
                                                <i class="ri-time-line"></i>
                                                <p class="date">{{ $item->created_at->format('d-m-Y') }}</p>
                                            </div>
                                            <p class="time">{{ estimatedReadingTime($item->content) }} min read</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End-of Destination -->
</main>
@endsection
