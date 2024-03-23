@extends('fe.index')
@section('main')
<div>
    <div class="container" id="form-search">
        <div class="row">
           <div class="w100 fl bx-wap-form-search">
              <form method="GET" action="https://vietnamtravel.net.vn/vi/san-pham/search.html" accept-charset="UTF-8" class="">
                 <div class="col-md-10 col-xs-12 bx-fr-left">
                    <div class="form-group col-dk-2 col-md-4 col-xs-12">
                       <select class="form-control loaitourchose" name="tour-type" required="">
                          <option value="">Loại Tour</option>
                          <option value="trongnuoc" >Tour nội địa</option>
                          <option value="ngoainuoc" >Tour Quốc tế</option>
                       </select>
                    </div>
                    <div class="form-group col-dk-2 col-md-4 col-xs-12" style="display: none;">
                       <select class="form-control" name="place_departure_category_id">
                          <option value="">Điểm khởi hành</option>
                          <option value="83" >Khởi hành từ Hà Nội</option>
                          <option value="84" >Khởi hành từ Đà Nẵng</option>
                          <option value="82" >TP. Hồ Chí Minh</option>
                          <option value="70" >Khởi hành từ Hải Phòng</option>
                          <option value="34" >Khởi hành từ Quảng Ninh</option>
                          <option value="72" >Khởi hành từ Lào Cai</option>
                          <option value="85" >Khởi hành từ Lai Châu</option>
                          <option value="62" >Khởi hành từ Ninh Bình</option>
                          <option value="3" >Khởi hành từ Thanh Hóa</option>
                          <option value="4" >Khởi hành từ Nghệ An</option>
                          <option value="74" >Khởi hành từ Huế</option>
                          <option value="71" >Khởi hành từ Nha Trang</option>
                          <option value="89" >Khởi hành từ Hà Nội - TP.HCM</option>
                          <option value="91" >Hà Nội - Đà Nẵng - TP.HCM</option>
                          <option value="92" >Khởi hành 63 tỉnh/TP</option>
                       </select>
                    </div>
                    <div class="form-group col-dk-2 col-md-4 col-xs-12">
                       <select name="" class="form-control show-select" id="chose-option-diemden-empty">
                          <option value="0">Nơi đến</option>
                       </select>
                       <select name="category_id_nd" class="form-control hidden-select" id="chose-option-diemden-nd">
                          <option value="">Nơi đến</option>
                          <option value="3" >Du lịch Hạ Long Cát Bà</option>
                          <option value="4" >Du lịch Hà Nội Sapa 2018</option>
                          <option value="34" >Du lịch Hà Nội Hạ Long Sapa</option>
                          <option value="62" >Du lịch Quy Nhơn Phú Yên</option>
                          <option value="66" >Du lịch Đà Nẵng Hội An Huế</option>
                          <option value="85" >Du lịch Nha Trang Đà Lạt</option>
                          <option value="69" >Du Lịch Vũng Tàu Côn Đảo</option>
                          <option value="67" >Du lịch đảo ngọc Phú Quốc</option>
                          <option value="70" >Du lịch Sài Gòn và Miền Tây</option>
                          <option value="71" >Du lịch Đông Tây Bắc 2018</option>
                          <option value="72" >Du lịch Phan Thiết 2018</option>
                          <option value="73" >Du lịch Cửa Lò Làng sen</option>
                          <option value="89" >Du lịch Ban Mê Thuột</option>
                          <option value="164" >63 tỉnh thành phố</option>
                       </select>
                       <select name="category_id_qt" class="form-control hidden-select" id="chose-option-diemden-qt">
                          <option value="">Nơi đến</option>
                          <option value="137" >Du lịch Thái Lan</option>
                          <option value="143" >Du lịch Campuchia</option>
                          <option value="156" >Du lịch Singapore Malaysia</option>
                          <option value="160" >Du lịch Myanmar</option>
                          <option value="144" >Du lịch Trung Quốc</option>
                          <option value="142" >Du lịch Hồng Kông</option>
                          <option value="154" >Du lịch Lào</option>
                          <option value="139" >Du lịch Hàn Quốc</option>
                          <option value="145" >Du lịch Châu Âu</option>
                          <option value="158" >Du Lịch Úc</option>
                          <option value="140" >Du lịch Nhật Bản</option>
                          <option value="157" >Du lịch Dubai</option>
                          <option value="141" >Du lịch Đài Loan</option>
                          <option value="161" >Du lịch Maldives</option>
                       </select>
                    </div>
                    <div class="form-group col-dk-2 col-md-4 col-xs-12">
                       <input id="start_date" class="form-control" type="text" name="start_date" value="" placeholder="Ngày khởi hành">
                    </div>
                    <div class="form-group col-dk-2 col-md-4 col-xs-12" style="display: none">
                       <input id="end_date" class="form-control" type="text" name="end_date" value="" placeholder="Ngày về">
                    </div>
                    <div class="form-group col-dk-2 col-md-4 col-xs-12">
                       <select class="form-control" name="promotion">
                          <option value="">Giảm giá</option>
                          <option value="yes" >Có</option>
                          <option value="no" >Không</option>
                       </select>
                    </div>
                    <div class="form-group col-dk-2 col-md-4 col-xs-12">
                       <select class="form-control" name="price">
                          <option value="">Giá</option>
                          <option value="0-1" > < 1 Triệu</option>
                          <option value="1-2" > 1-2 Triệu</option>
                          <option value="2-4" > 2-4 Triệu</option>
                          <option value="4-6" > 4-6 Triệu</option>
                          <option value="6-10" > 6-10 Triệu</option>
                          <option value="10-200" > > 10 Triệu</option>
                       </select>
                    </div>
                 </div>
                 <div class="col-md-2 col-xs-12 bx-fr-right">
                    <button type="submit" class="btn btn-red">Xem giá</button>
                 </div>
              </form>
           </div>
        </div>
     </div>
     <div class="container box-list-tour top-30">
        <div class="row">
           <div class="col-md-12 col-xs-12 bx-title-lst-tour text-center">
              <div class="w100 fl title-tour1">
                 <h2 style="color: #ffc700;font-size: 30px;" ><img src="https://vietnamtravel.net.vn/assets/desktop/images/icon_mb.png" alt="icon" style="width: 80px;">Tour Giá Sốc</h2>
              </div>
              <!-- <div class=" w100 fl child-lst-tour2">
                 <img src="https://vietnamtravel.net.vn/assets/desktop/images/icon-tit2.png" alt="icon">
                 </div> -->
           </div>
           <div class="col-md-12 col-xs-12 bx-content-lst-tour">
              <div class="row">
                @foreach ($featuredTour as $item)
                <div class="col-md-4 col-xs-12 lst-tour-item">
                    <div class="w100 fl bx-wap-pr-item">
                       <div class="clearfix box-wap-imgpr">
                          <a href="{{ route('detail',['id' => $item->id]) }}">
                             <img src="{{ ('storage/images/' . $item->image) }}" class="img-default" alt="tour" style="margin-bottom: 6px;">

                          </a>
                       </div>
                       <div class="clear"></div>
                       <h4><a href="{{ route('detail',['id' => $item->id]) }}">{{ $item->title }}</a></h4>
                       <div class="clear"></div>
                       <div class="group-calendar w100 fl">
                          <div class="col-md-6 col-xs-7 date-start">
                             <i class="fa fa-calendar"></i>
                             {{ $item->ngay_khoi_hanh }}
                          </div>
                          <div class="col-md-6 col-xs-5 date-range">
                             <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> {{ $item->thoi_gian }}</span>
                          </div>
                       </div>
                       <div class="group-localtion w100 fl">
                          <div class="col-md-6 col-xs-7 map-maker">
                             <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> {{ $item->xuat_phat }}</span>
                          </div>
                          <div class="col-md-6 col-xs-5 numner-sit">
                             <span class="lst-icon1"><i class="fa fa-users"></i></span><span> số chỗ {{ $item->so_cho }}</span>
                          </div>
                       </div>
                       <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Khuyến mãi 200K cho nhóm khách 5 người trở lên</div>
                       <div class="group-book w100 fl">
                          <span class="price-sell">{{ $item->price }}</span>
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/470-tour-hot-nhat-he-2023-quy-nhon-phu-yen-xu-nau-dep-nhat-viet-nam.html" class="link-book btn_view_tour0">Xem chi tiết</a>
                       </div>
                    </div>
                 </div>
                @endforeach
                 </div>

              </div>
           </div>
        </div>
     </div>
     <div class="container box-list-tour top-30" style="display: none;">
        <div class="row">
           <div class="col-md-12 col-xs-12 bx-title-lst-tour text-center">
              <!-- <div class="w100 fl child-lst-tour1">
                 <img src="https://vietnamtravel.net.vn/assets/desktop/images/icon-tit1.png" alt="icon">
                 </div> -->
              <div class="w100 fl title-tour1">
                 <h2 style="color: #ffc700;font-size: 30px;"><img src="https://vietnamtravel.net.vn/assets/desktop/images/icon_mb.png" alt="icon" style="width: 80px;">Tour mới</h2>
              </div>
              <!-- <div class=" w100 fl child-lst-tour2">
                 <img src="https://vietnamtravel.net.vn/assets/desktop/images/icon-tit2.png" alt="icon">
                 </div> -->
           </div>
           <div class="col-md-12 col-xs-12 bx-content-lst-tour">
              <div class="row">
                 <div class="col-md-4 col-xs-12 lst-tour-item">
                    <div class="w100 fl bx-wap-pr-item">
                       <div class="clearfix box-wap-imgpr">
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/466-du-lich-ha-giang-tham-quan-cao-nguyen-da-dong-van-va-ngam-hoa-tam-giac-mach.html">
                             <img src="/timthumb.php?src=/media/images/du%20lich%20Tay%20bac/tour-ha-giang-mua-hoa-tam-giac-mach.jpg&w=402&h=262&q=75" class="img-default" alt="tour" style="margin-bottom: 6px;">
                             <img src="https://vietnamtravel.net.vn/assets/desktop/images/event/merry-christmas-1.png" class="img-event-giang-sinh"><img src="https://vietnamtravel.net.vn/assets/desktop/images/event/new-icon.png" class="img-event-moi">                <!--<img src="/public/media/images/logo/logo-ghim-anh.jpg" class="img-ghim-anh">-->
                          </a>
                       </div>
                       <div class="clear"></div>
                       <h4><a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/466-du-lich-ha-giang-tham-quan-cao-nguyen-da-dong-van-va-ngam-hoa-tam-giac-mach.html">Du lịch Hà Giang Tham quan Cao nguyên Đá Đồng Văn và Ngắm Hoa Tam Giác Mạch</a></h4>
                       <div class="clear"></div>
                       <div class="group-calendar w100 fl">
                          <div class="col-md-6 col-xs-7 date-start">
                             <i class="fa fa-calendar"></i>
                             Thứ 6 Hàng Tuần
                          </div>
                          <div class="col-md-6 col-xs-5 date-range">
                             <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 3 Ngày</span>
                          </div>
                       </div>
                       <div class="group-localtion w100 fl">
                          <div class="col-md-6 col-xs-7 map-maker">
                             <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành 63 tỉnh/TP</span>
                          </div>
                          <div class="col-md-6 col-xs-5 numner-sit">
                             <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 10</span>
                          </div>
                       </div>
                       <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Tour bao gồm tất cả các dịch vụ, có chương trình khuyến mãi cho nhóm khách 5 người </div>
                       <div class="group-book w100 fl">
                          <span class="price-sell">2.550.000 VNĐ </span>
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/466-du-lich-ha-giang-tham-quan-cao-nguyen-da-dong-van-va-ngam-hoa-tam-giac-mach.html" class="link-book btn_view_tour0">Xem chi tiết</a>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4 col-xs-12 lst-tour-item">
                    <div class="w100 fl bx-wap-pr-item">
                       <div class="clearfix box-wap-imgpr">
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/464-du-lich-quy-nhon-phu-yen-tour-tron-goi-dac-sac-nhat.html">
                             <img src="/timthumb.php?src=/media/images/Quy%20Nhon%20Phu%20Yen/logo_viet-nam-travel.jpg&w=402&h=262&q=75" class="img-default" alt="tour" style="margin-bottom: 6px;">
                             <img src="https://vietnamtravel.net.vn/assets/desktop/images/event/tet.png" class="img-event-tour-tet"><img src="https://vietnamtravel.net.vn/assets/desktop/images/event/new-icon.png" class="img-event-moi">                <!--<img src="/public/media/images/logo/logo-ghim-anh.jpg" class="img-ghim-anh">-->
                          </a>
                       </div>
                       <div class="clear"></div>
                       <h4><a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/464-du-lich-quy-nhon-phu-yen-tour-tron-goi-dac-sac-nhat.html">Du lịch Quy Nhơn - Phú Yên Tour trọn gói, đặc sắc nhất</a></h4>
                       <div class="clear"></div>
                       <div class="group-calendar w100 fl">
                          <div class="col-md-6 col-xs-7 date-start">
                             <i class="fa fa-calendar"></i>
                             Thứ 2, Thứ 3, Thứ 4 Hàng Tuần
                          </div>
                          <div class="col-md-6 col-xs-5 date-range">
                             <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 4 Ngày</span>
                          </div>
                       </div>
                       <div class="group-localtion w100 fl">
                          <div class="col-md-6 col-xs-7 map-maker">
                             <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành từ Hà Nội - TP.HCM</span>
                          </div>
                          <div class="col-md-6 col-xs-5 numner-sit">
                             <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 13</span>
                          </div>
                       </div>
                       <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i></div>
                       <div class="group-book w100 fl">
                          <span class="price-sell">5.590.000 VNĐ </span>
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/464-du-lich-quy-nhon-phu-yen-tour-tron-goi-dac-sac-nhat.html" class="link-book btn_view_tour0">Xem chi tiết</a>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4 col-xs-12 lst-tour-item">
                    <div class="w100 fl bx-wap-pr-item">
                       <div class="clearfix box-wap-imgpr">
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/463-tour-du-lich-quy-nhon-3-ngay-tron-goi-dac-sac-nhat.html">
                             <img src="/timthumb.php?src=/media/images/Quy%20Nhon%20Phu%20Yen/thap-doi.png&w=402&h=262&q=75" class="img-default" alt="tour" style="margin-bottom: 6px;">
                             <img src="https://vietnamtravel.net.vn/assets/desktop/images/event/merry-christmas-1.png" class="img-event-giang-sinh"><img src="https://vietnamtravel.net.vn/assets/desktop/images/event/new-icon.png" class="img-event-moi">                <!--<img src="/public/media/images/logo/logo-ghim-anh.jpg" class="img-ghim-anh">-->
                          </a>
                       </div>
                       <div class="clear"></div>
                       <h4><a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/463-tour-du-lich-quy-nhon-3-ngay-tron-goi-dac-sac-nhat.html">Tour Du lịch Quy nhơn 3 ngày trọn gói, đặc sắc nhất</a></h4>
                       <div class="clear"></div>
                       <div class="group-calendar w100 fl">
                          <div class="col-md-6 col-xs-7 date-start">
                             <i class="fa fa-calendar"></i>
                             Thứ 2, Thứ 3, Thứ 4 Hàng Tuần
                          </div>
                          <div class="col-md-6 col-xs-5 date-range">
                             <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 3 Ngày</span>
                          </div>
                       </div>
                       <div class="group-localtion w100 fl">
                          <div class="col-md-6 col-xs-7 map-maker">
                             <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành từ Hà Nội - TP.HCM</span>
                          </div>
                          <div class="col-md-6 col-xs-5 numner-sit">
                             <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 22</span>
                          </div>
                       </div>
                       <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Chi phí đi xuồng một chiều trên sông Kut – Tham quan Hầm Hô</div>
                       <div class="group-book w100 fl">
                          <span class="price-sell">4.990.000 VNĐ </span>
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/463-tour-du-lich-quy-nhon-3-ngay-tron-goi-dac-sac-nhat.html" class="link-book btn_view_tour0">Xem chi tiết</a>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4 col-xs-12 lst-tour-item">
                    <div class="w100 fl bx-wap-pr-item">
                       <div class="clearfix box-wap-imgpr">
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/457-tour-du-lich-tp-ho-chi-minh-cai-be-can-tho-chau-doc-bac-lieu-ca-mau.html">
                             <img src="/timthumb.php?src=/media/images/du-lich-sai-gon-mien-tay/logo/rung-tram-su-logo.jpg&w=402&h=262&q=75" class="img-default" alt="tour" style="margin-bottom: 6px;">
                             <img src="https://vietnamtravel.net.vn/assets/desktop/images/event/merry-christmas-1.png" class="img-event-giang-sinh"><img src="https://vietnamtravel.net.vn/assets/desktop/images/event/new-icon.png" class="img-event-moi">                <!--<img src="/public/media/images/logo/logo-ghim-anh.jpg" class="img-ghim-anh">-->
                          </a>
                       </div>
                       <div class="clear"></div>
                       <h4><a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/457-tour-du-lich-tp-ho-chi-minh-cai-be-can-tho-chau-doc-bac-lieu-ca-mau.html">Tour du lịch Tp. Hồ Chí Minh - Cái bè - Cần Thơ - Châu Đốc - Bạc Liêu - Cà Mau</a></h4>
                       <div class="clear"></div>
                       <div class="group-calendar w100 fl">
                          <div class="col-md-6 col-xs-7 date-start">
                             <i class="fa fa-calendar"></i>
                             Hàng ngày
                          </div>
                          <div class="col-md-6 col-xs-5 date-range">
                             <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 5 Ngày</span>
                          </div>
                       </div>
                       <div class="group-localtion w100 fl">
                          <div class="col-md-6 col-xs-7 map-maker">
                             <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành 63 tỉnh/TP</span>
                          </div>
                          <div class="col-md-6 col-xs-5 numner-sit">
                             <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 19</span>
                          </div>
                       </div>
                       <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Khuyến mãi 200K cho nhóm khách 5 người trở lên</div>
                       <div class="group-book w100 fl">
                          <span class="price-sell">6.990.000 VNĐ </span>
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/457-tour-du-lich-tp-ho-chi-minh-cai-be-can-tho-chau-doc-bac-lieu-ca-mau.html" class="link-book btn_view_tour0">Xem chi tiết</a>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4 col-xs-12 lst-tour-item">
                    <div class="w100 fl bx-wap-pr-item">
                       <div class="clearfix box-wap-imgpr">
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/456-du-lich-nha-trang-tham-quan-4-dao-chua-long-son-nha-yen-tam-khoang-bun-tour-cao-cap-khoi-hanh-tu-tp-ho-chi-minh.html">
                             <img src="/timthumb.php?src=/media/images/nha-trang-da-lat/logo/tham-quan-vinpearl-land-nha-trang-viet-nam-travel.jpg&w=402&h=262&q=75" class="img-default" alt="tour" style="margin-bottom: 6px;">
                             <img src="https://vietnamtravel.net.vn/assets/desktop/images/event/merry-christmas-1.png" class="img-event-giang-sinh"><img src="https://vietnamtravel.net.vn/assets/desktop/images/event/new-icon.png" class="img-event-moi">                <!--<img src="/public/media/images/logo/logo-ghim-anh.jpg" class="img-ghim-anh">-->
                          </a>
                       </div>
                       <div class="clear"></div>
                       <h4><a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/456-du-lich-nha-trang-tham-quan-4-dao-chua-long-son-nha-yen-tam-khoang-bun-tour-cao-cap-khoi-hanh-tu-tp-ho-chi-minh.html">Du lịch Nha Trang Tham Quan 4 Đảo, Chùa Long Sơn, Nhà Yến, tắm khoáng bùn, tour cao cấp khởi hành từ TP. Hồ Chí Minh</a></h4>
                       <div class="clear"></div>
                       <div class="group-calendar w100 fl">
                          <div class="col-md-6 col-xs-7 date-start">
                             <i class="fa fa-calendar"></i>
                             25/05;
                          </div>
                          <div class="col-md-6 col-xs-5 date-range">
                             <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 3 Ngày</span>
                          </div>
                       </div>
                       <div class="group-localtion w100 fl">
                          <div class="col-md-6 col-xs-7 map-maker">
                             <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> TP. Hồ Chí Minh</span>
                          </div>
                          <div class="col-md-6 col-xs-5 numner-sit">
                             <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 40</span>
                          </div>
                       </div>
                       <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Khuyến mãi 200K cho nhóm khách 5 người trở lên</div>
                       <div class="group-book w100 fl">
                          <span class="price-sell">3.990.000 VNĐ </span>
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/456-du-lich-nha-trang-tham-quan-4-dao-chua-long-son-nha-yen-tam-khoang-bun-tour-cao-cap-khoi-hanh-tu-tp-ho-chi-minh.html" class="link-book btn_view_tour0">Xem chi tiết</a>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4 col-xs-12 lst-tour-item">
                    <div class="w100 fl bx-wap-pr-item">
                       <div class="clearfix box-wap-imgpr">
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/455-ha-noi-ha-long-sapa-fansipan-4-ngay-3-dem-tour-cao-cap-bao-gom-ca-ve-may-bay.html">
                             <img src="/timthumb.php?src=/media/images/ha-noi-ha-long-sapa/logo/u23-viet-nam-fansipan-logo.jpg&w=402&h=262&q=75" class="img-default" alt="tour" style="margin-bottom: 6px;">
                             <img src="https://vietnamtravel.net.vn/assets/desktop/images/event/merry-christmas-1.png" class="img-event-giang-sinh"><img src="https://vietnamtravel.net.vn/assets/desktop/images/event/new-icon.png" class="img-event-moi">                <!--<img src="/public/media/images/logo/logo-ghim-anh.jpg" class="img-ghim-anh">-->
                          </a>
                       </div>
                       <div class="clear"></div>
                       <h4><a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/455-ha-noi-ha-long-sapa-fansipan-4-ngay-3-dem-tour-cao-cap-bao-gom-ca-ve-may-bay.html">Hà Nội - Hạ Long - Sapa - Fansipan 4 ngày 3 đêm (Tour cao cấp bao gồm cả vé Máy Bay)</a></h4>
                       <div class="clear"></div>
                       <div class="group-calendar w100 fl">
                          <div class="col-md-6 col-xs-7 date-start">
                             <i class="fa fa-calendar"></i>
                             Thứ 2, Thứ 4, Thứ 5, Thứ 7 Hàng Tuần
                          </div>
                          <div class="col-md-6 col-xs-5 date-range">
                             <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 4 Ngày</span>
                          </div>
                       </div>
                       <div class="group-localtion w100 fl">
                          <div class="col-md-6 col-xs-7 map-maker">
                             <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Hà Nội - Đà Nẵng - TP.HCM</span>
                          </div>
                          <div class="col-md-6 col-xs-5 numner-sit">
                             <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 35</span>
                          </div>
                       </div>
                       <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Đã bao gồm vé Máy Bay, trọn gói không phát sinh chi phí  trong suốt quáy trình đi tour, có chương trình khuyến mãi cho nhóm khách từ 6 người trở lên.</div>
                       <div class="group-book w100 fl">
                          <span class="price-sell">7.990.000 VNĐ </span>
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/455-ha-noi-ha-long-sapa-fansipan-4-ngay-3-dem-tour-cao-cap-bao-gom-ca-ve-may-bay.html" class="link-book btn_view_tour0">Xem chi tiết</a>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4 col-xs-12 lst-tour-item">
                    <div class="w100 fl bx-wap-pr-item">
                       <div class="clearfix box-wap-imgpr">
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/454-du-lich-ha-noi-ha-long-bai-dinh-trang-an-sapa-fansipan-5-ngay-4-dem-29.html">
                             <img src="/timthumb.php?src=/media/images/ha-noi-ha-long-sapa/trang-an-viet-nam1.png&w=402&h=262&q=75" class="img-default" alt="tour" style="margin-bottom: 6px;">
                             <img src="https://vietnamtravel.net.vn/assets/desktop/images/event/merry-christmas-1.png" class="img-event-giang-sinh"><img src="https://vietnamtravel.net.vn/assets/desktop/images/event/new-icon.png" class="img-event-moi">                <!--<img src="/public/media/images/logo/logo-ghim-anh.jpg" class="img-ghim-anh">-->
                          </a>
                       </div>
                       <div class="clear"></div>
                       <h4><a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/454-du-lich-ha-noi-ha-long-bai-dinh-trang-an-sapa-fansipan-5-ngay-4-dem-29.html">Du lịch Hà Nội - Hạ Long - Bãi Đính, Tràng An - Sapa, Fansipan 5 ngày 4 đêm 2/9</a></h4>
                       <div class="clear"></div>
                       <div class="group-calendar w100 fl">
                          <div class="col-md-6 col-xs-7 date-start">
                             <i class="fa fa-calendar"></i>
                          </div>
                          <div class="col-md-6 col-xs-5 date-range">
                             <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 5 Ngày</span>
                          </div>
                       </div>
                       <div class="group-localtion w100 fl">
                          <div class="col-md-6 col-xs-7 map-maker">
                             <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành 63 tỉnh/TP</span>
                          </div>
                          <div class="col-md-6 col-xs-5 numner-sit">
                             <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 22</span>
                          </div>
                       </div>
                       <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Đã bao gồm vé Máy Bay, Tour cao cấp trọn gói không phát sinh chi phí trong suốt quáy trình đi tour</div>
                       <div class="group-book w100 fl">
                          <span class="price-sell">10.990.000 VNĐ </span>
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/454-du-lich-ha-noi-ha-long-bai-dinh-trang-an-sapa-fansipan-5-ngay-4-dem-29.html" class="link-book btn_view_tour0">Xem chi tiết</a>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4 col-xs-12 lst-tour-item">
                    <div class="w100 fl bx-wap-pr-item">
                       <div class="clearfix box-wap-imgpr">
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/453-du-lich-hn-ha-long-bai-dinh-trang-an-sapa-fansipan-5-ngay-4-dem-tour-tieu-chuan.html">
                             <img src="/timthumb.php?src=/media/images/ha-noi-ha-long-sapa/logo/Du-lich-ha-long%205.jpg&w=402&h=262&q=75" class="img-default" alt="tour" style="margin-bottom: 6px;">
                             <img src="https://vietnamtravel.net.vn/assets/desktop/images/event/merry-christmas-1.png" class="img-event-giang-sinh"><img src="https://vietnamtravel.net.vn/assets/desktop/images/event/new-icon.png" class="img-event-moi">                <!--<img src="/public/media/images/logo/logo-ghim-anh.jpg" class="img-ghim-anh">-->
                          </a>
                       </div>
                       <div class="clear"></div>
                       <h4><a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/453-du-lich-hn-ha-long-bai-dinh-trang-an-sapa-fansipan-5-ngay-4-dem-tour-tieu-chuan.html">Du lịch HN-  Hạ Long - Bãi Đính, Tràng An - Sapa, Fansipan 5 ngày 4 đêm (tour tiêu chuẩn )</a></h4>
                       <div class="clear"></div>
                       <div class="group-calendar w100 fl">
                          <div class="col-md-6 col-xs-7 date-start">
                             <i class="fa fa-calendar"></i>
                             Thứ 2, Thứ 4, Thứ 5, Thứ 7 Hàng Tuần
                          </div>
                          <div class="col-md-6 col-xs-5 date-range">
                             <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 5 Ngày</span>
                          </div>
                       </div>
                       <div class="group-localtion w100 fl">
                          <div class="col-md-6 col-xs-7 map-maker">
                             <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành 63 tỉnh/TP</span>
                          </div>
                          <div class="col-md-6 col-xs-5 numner-sit">
                             <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 30</span>
                          </div>
                       </div>
                       <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Đã bao gồm vé Máy Bay, trọn gói không phát sinh chi phí  trong suốt quáy trình đi tour, Khuyến Mãi 10% cho nhóm khách 6 người.</div>
                       <div class="group-book w100 fl">
                          <span class="price-sell">8.990.000 VNĐ </span>
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/453-du-lich-hn-ha-long-bai-dinh-trang-an-sapa-fansipan-5-ngay-4-dem-tour-tieu-chuan.html" class="link-book btn_view_tour0">Xem chi tiết</a>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4 col-xs-12 lst-tour-item">
                    <div class="w100 fl bx-wap-pr-item">
                       <div class="clearfix box-wap-imgpr">
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/452-du-lich-nha-trang-diem-du-xuan-hap-dan-va-an-toan-nhat-nam-2022.html">
                             <img src="/timthumb.php?src=/media/images/nha-trang-da-lat/logo/tham-quan-vinpearl-land-nha-trang-viet-nam-travel.jpg&w=402&h=262&q=75" class="img-default" alt="tour" style="margin-bottom: 6px;">
                             <img src="https://vietnamtravel.net.vn/assets/desktop/images/event/new-icon.png" class="img-event-moi">                <!--<img src="/public/media/images/logo/logo-ghim-anh.jpg" class="img-ghim-anh">-->
                          </a>
                       </div>
                       <div class="clear"></div>
                       <h4><a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/452-du-lich-nha-trang-diem-du-xuan-hap-dan-va-an-toan-nhat-nam-2022.html">Du lịch Nha Trang - Điểm Du xuân hấp dẫn và An toàn nhất năm 2022</a></h4>
                       <div class="clear"></div>
                       <div class="group-calendar w100 fl">
                          <div class="col-md-6 col-xs-7 date-start">
                             <i class="fa fa-calendar"></i>
                             30/11;
                          </div>
                          <div class="col-md-6 col-xs-5 date-range">
                             <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 4 Ngày</span>
                          </div>
                       </div>
                       <div class="group-localtion w100 fl">
                          <div class="col-md-6 col-xs-7 map-maker">
                             <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành từ Hà Nội - TP.HCM</span>
                          </div>
                          <div class="col-md-6 col-xs-5 numner-sit">
                             <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 7</span>
                          </div>
                       </div>
                       <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i></div>
                       <div class="group-book w100 fl">
                          <span class="price-sell">3.330.000 VNĐ </span>
                          <a href="https://vietnamtravel.net.vn/vi/chi-tiet-san-pham/452-du-lich-nha-trang-diem-du-xuan-hap-dan-va-an-toan-nhat-nam-2022.html" class="link-book btn_view_tour0">Xem chi tiết</a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>


     <div class="container box-list-tour top-15">
        <div class="row">
           <div class="col-md-12 col-xs-12 bx-title-lst-tour text-center">
              <!--	<div class="w100 fl child-lst-tour1">
                 <img src="https://vietnamtravel.net.vn/assets/desktop/images/icon-tit1.png" alt="icon">
                 </div> -->
              <div class="w100 fl title-tour1">
                 <h2 style="color: #ffc700; font-size:30px"><img src="https://vietnamtravel.net.vn/assets/desktop/images/icon_mb.png" alt="icon" style="width: 80px;">QUÝ KHÁCH CHỌN ĐỊA ĐIỂM DU LỊCH NÀO</h2>
              </div>
              <!--	<div class=" w100 fl child-lst-tour2">
                 <img src="https://vietnamtravel.net.vn/assets/desktop/images/icon-tit2.png" alt="icon"> -->
           </div>
        </div>
        <div class="col-md-12 col-xs-12 top-30 lst-tour-position">
           <div class="row">
            @foreach ($destinationNew  as $item)

             <div class="col-md-3 col-xs-6 cl-mb-half-4">
                <div class="bximg-request-dd">
                   <a href="">
                      <img src="{{ ('storage/images/' . $item->image) }}" alt="{{ $item->name }}">
                      <div class="capition-dd"><i class="fa fa-map-marker"></i> {{ $item->name }}</div>
                   </a>
                </div>
             </div>
            @endforeach


           </div>
        </div>
     </div>
     </div>
     <div class="container box-post-home top-15">
        <div class="row">
           <div class="col-md-4 col-xs-12 bx-child-ph bx-child-ph1">
              <div class="w100 fl tit-child-larg">
                 <h2 class="not-icon">Cẩm nang du lịch</h2>
              </div>
              <div class="w100 fl item-lst-pos1">
                 <a href="https://vietnamtravel.net.vn/vi/ct/100-10-diem-den-duoc-nguoi-viet-yeu-thich-nhat-trong-nam-2018.html">
                 <img src="/media/images/tin-tuc/thumb_9394578.jpg" alt="10 điểm đến được người Việt yêu thích nhất trong năm 2018">
                 </a>
                 <a href="https://vietnamtravel.net.vn/vi/ct/100-10-diem-den-duoc-nguoi-viet-yeu-thich-nhat-trong-nam-2018.html" class="ctlist-right">
                    <h4>10 điểm đến được người Việt yêu thích nhất trong năm 2018</h4>
                    <p>Theo số liệu thống k&ecirc; số kh&aacute;ch du lịch của tổng cục du lịch,10 điểm đến được người Việt y&ecirc;u th&iacute;ch nhất trong năm...</p>
                 </a>
              </div>
              <div class="w100 fl item-lst-pos1">
                 <a href="https://vietnamtravel.net.vn/vi/ct/96-cam-nang-di-du-lich-da-nang-tat-tan-tat-tu-a-z-vo-cung-re.html">
                 <img src="/media/images/tin-tuc/du-lich-da-nang.jpg" alt="Cẩm nang đi du lịch Đà Nẵng tất tần tật từ A -> Z vô cùng rẻ">
                 </a>
                 <a href="https://vietnamtravel.net.vn/vi/ct/96-cam-nang-di-du-lich-da-nang-tat-tan-tat-tu-a-z-vo-cung-re.html" class="ctlist-right">
                    <h4>Cẩm nang đi du lịch Đà Nẵng tất tần tật từ A -> Z vô cùng rẻ</h4>
                    <p>Đ&agrave; Nẵng&nbsp;&ndash; Th&agrave;nh phố của những t&acirc;m hồn đẹp v&agrave; thơ mộng với những danh lam thắng cảnh nổi tiếng. Kh&ocirc;ng...</p>
                 </a>
              </div>
           </div>
           <div class="col-md-4 col-xs-12 bx-child-ph bx-child-ph2">
              <div class="w100 fl tit-child-larg">
                 <h2 class="not-icon">Tai sao chọn Vietnamtravel</h2>
              </div>
              <div class="w100 fl item-lst-pos2">
                 <a href="https://vietnamtravel.net.vn/vi/ct/88-top-10-cong-ty-du-lich-hang-dau-hang-dau.html"><img src="/media/images/logo/Untitled-1.jpg" alt="Tốp 10 công ty du lịch hàng đầu  hàng đầu"></a>
                 <a href="https://vietnamtravel.net.vn/vi/ct/88-top-10-cong-ty-du-lich-hang-dau-hang-dau.html" class="ctlist-right">
                    <h4>Tốp 10 công ty du lịch hàng đầu  hàng đầu</h4>
                    <p>Vietnam Travel&nbsp;được vinh danh tại giải thưởng&nbsp;du lịch&nbsp;danhh gi&aacute; World Travel Awards với danh hiệu Nh&agrave;...</p>
                 </a>
              </div>
              <div class="w100 fl item-lst-pos2">
                 <a href="https://vietnamtravel.net.vn/vi/ct/82-hon-18-nam-kinh-nghiem.html"><img src="/media/images/logo/18_kinhnghiem_vn.jpg" alt="Hơn 18 năm kinh nghiệm"></a>
                 <a href="https://vietnamtravel.net.vn/vi/ct/82-hon-18-nam-kinh-nghiem.html" class="ctlist-right">
                    <h4>Hơn 18 năm kinh nghiệm</h4>
                    <p>Với 18 năm&nbsp;kinh nghiệm&nbsp;trong lĩnh vực lữ h&agrave;nh, ... mong muốn mang đến cho kh&aacute;ch h&agrave;ng những chuyến...</p>
                 </a>
              </div>
              <div class="w100 fl item-lst-pos2">
                 <a href="https://vietnamtravel.net.vn/vi/ct/81-dich-vu-247.html"><img src="/media/images/logo/uytin_24_7.jpg" alt="Dịch vụ 24/7"></a>
                 <a href="https://vietnamtravel.net.vn/vi/ct/81-dich-vu-247.html" class="ctlist-right">
                    <h4>Dịch vụ 24/7</h4>
                    <p>Đội ngũ c&aacute;n bộ nh&acirc;n vi&ecirc;n nhiệt t&igrave;nh&nbsp;v&agrave; s&aacute;ng tạo. Phục vụ kh&aacute;ch h&agrave;ng tận...</p>
                 </a>
              </div>
           </div>
           <div class="col-md-4 col-xs-12 bx-child-ph bx-child-ph3">
              <div class="w100 fl tit-child-larg">
                 <h2 class="not-icon">Hình ảnh chuyến đi</h2>
              </div>
              <script>
                 $(document).ready(function(){
                     $('.lst-thumb-video-home li img').click(function() {
                         var srcVideo = $(this).attr('src-video');
                         $('#iframe_video').attr('src', srcVideo);
                     });
                 });
              </script>
              <div class="video-play w100 fl top-15">
                 <div class="embed-responsive embed-responsive-4by3">
                    <iframe id="iframe_video" class="embed-responsive-item" src="https://www.youtube.com/embed/yWM-oOLOYNs?rel=0"></iframe>
                 </div>
              </div>
              <ul class="lst-thumb-video-home top-15" style="">
                 <li><img src="/media/images/menu/thai-lan.png" alt="2" src-video="https://www.youtube.com/embed/yWM-oOLOYNs?rel=0"></li>
                 <li><img src="/media/images/menu/singapo-malaysia.jpg" alt="2" src-video="https://www.youtube.com/embed/ZjtJIi39r4U?rel=0"></li>
                 <li><img src="/media/images/menu/da-nang.jpg" alt="2" src-video="https://www.youtube.com/embed/YgrvXPK4u4s?rel=0"></li>
              </ul>
           </div>
        </div>
     </div>

</div>
@endsection
