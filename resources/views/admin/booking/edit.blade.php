@extends('admin.index')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('booking.update', $booking->id) }}" accept-charset="UTF-8" class="form-horizontal" role="form">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="fullname" class="col-sm-3 control-label">Họ Tên</label>
            <div class="col-sm-9">
                <input type="text" name="fullname" class="form-control" value="{{ $booking->fullname }}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Điện Thoại</label>
            <div class="col-sm-9">
                <input type="text" name="phone" class="form-control" value="{{ $booking->phone }}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" name="email" class="form-control" value="{{ $booking->email }}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="adult" class="col-sm-3 control-label">Số Khách Người Lớn</label>
            <div class="col-sm-9">
                <input type="number" name="adult" class="form-control" value="{{ $booking->adult }}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="children" class="col-sm-3 control-label">Số Khách Trẻ Em</label>
            <div class="col-sm-9">
                <input type="number" name="children" class="form-control" value="{{ $booking->children }}">
            </div>
        </div>
        <div class="form-group">
            <label for="start_date_book" class="col-sm-3 control-label">Ngày Khởi Hành</label>
            <div class="col-sm-9">
                <input id="start_date_book" type="text" name="start_date_book" class="form-control" value="{{ $booking->start_date_book }}">
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="col-sm-3 control-label">Tin Nhắn</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="message">{{ $booking->message }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Cập Nhật</button>
            </div>
        </div>
    </form>
</div>
@endsection
