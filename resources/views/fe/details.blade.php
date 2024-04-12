@extends('fe.index')

@section('main')
    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area breadcrumb-bg">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Tour Details</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index.html" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page">
                                <a href="javascript:void(0)" class="single active">Tour Details</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--/ End-of Breadcrumbs-->

        <!-- Destination area S t a r t -->
        <section class="tour-details-section section-padding2">
            <div class="tour-details-area ">

                <!-- Details Banner Slider -->

                <div class="image-container">
                    <img src="{{ asset('storage/images/' . $tour->image) }}" style="width: 100%; height: 100vh;"
                        alt="travello">
                </div>


                <!-- / Slider-->

                <div class="tour-details-container">
                    <div class="container">

                        <!-- Details Heading -->
                        <div class="details-heading">
                            <div class="d-flex flex-column">
                                <h4 class="title">{{ $tour->title }}</h4>
                                <div class="d-flex flex-wrap align-items-center gap-30 mt-16">
                                    <div class="location">
                                        <i class="ri-map-pin-line"></i>
                                        <div class="name">{{ $tour->diem_du_lich }}</div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="d-flex align-items-center flex-wrap gap-20">
                                        <div class="count">
                                            <i class="ri-time-line"></i>
                                            <p class="pera">{{ $tour->thoi_gian }}</p>
                                        </div>
                                        <div class="count">
                                            <i class="ri-user-line"></i>
                                            <p class="pera">{{ $tour->so_cho }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- / Details Heading -->

                        <div class="mt-30">
                            <div class="row g-4">

                                <!-- Left content -->
                                <div class="col-xl-12 col-lg-12">

                                    <!-- About tour -->
                                    <div class="tour-details-content">
                                        <h4 class="title">{!! $tour->description !!}</h4>

                                    </div>

                                </div>

                                <!-- Right content -->
                                <div class="col-xl-12 col-lg-12">
                                    <div class="row  g-4 position-static top-0 ">
                                        <div class="col-lg-6 mt-5">
                                            <div class="date-travel-card position-sticky top-0">

                                                <form method="POST" action="{{ route('booking.store') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label">Họ tên</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="fullname" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label">Điện thoại</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="phone" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" name="email" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label">Số khách người lớn</label>
                                                        <div class="col-sm-9">
                                                            <input type="number" name="adult" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label">Số khách trẻ em</label>
                                                        <div class="col-sm-9">
                                                            <input type="number" name="children" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label">Ngày khởi hành</label>
                                                        <div class="col-sm-9">
                                                            <input id="start_date_book" type="text" name="start_date_book" class="form-control">
                                                        </div>
                                                    </div>
                                                    <script>
                                                        $(function() {
                                                            $( "#start_date_book" ).datepicker({
                                                                //defaultDate: "+1w",
                                                                minDate: '0',
                                                                dateFormat: "dd-mm-yy",
                                                                changeMonth: true,
                                                                numberOfMonths: 1
                                                            });
                                                        });
                                                    </script>
                                                    <div class="form-group">
                                                        <label for="" class="col-sm-3 control-label">Tin nhắn</label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control" name="message"></textarea>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="tour_id" value="{{ $tour->id }}">
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-3 col-sm-9">
                                                            <button type="submit" class="btn btn-success">Đặt tour</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="tour-list-card">
                                                <h4 class="title">Tour List</h4>
                                                <ul class="tour-listing">
                                                    <!-- Single -->
                                                    <li class="list">
                                                        <div class="package-img imgEffect4">
                                                            <a href="{{ route('detail',['id' =>$tour->id]) }}"><img
                                                                    src="{{ asset('storage/images/' . $tour->image) }}"
                                                                    alt="travello"></a>
                                                        </div>
                                                        <div class="package-content">
                                                            <h4 class="area-name">
                                                                <a href="{{ route('detail',['id' =>$tour->id]) }}">{{ $tour->title }}</a>
                                                            </h4>
                                                            <div class="location">
                                                                <i class="ri-map-pin-line"></i>
                                                                <div class="name">{{ $tour->diem_du_lich }}</div>
                                                            </div>
                                                            <div class="price-review">
                                                                <div class="d-flex gap-10">

                                                                    <p class="pera">{{ $tour->price }}</p>
                                                                </div>
                                                                <div class="rating">
                                                                    <i class="ri-star-s-fill"></i>
                                                                    <p class="pera">4.7 (20 Reviews)</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                                <div class="text-center mt-10">
                                                    <a href="{{ route('tourPakage') }}" class="see-more-text">See More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
