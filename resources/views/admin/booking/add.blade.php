@extends('admin.index')
@section('content')

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

    {{-- <input type="hidden" name="product_id" value=""> --}}
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-success">Đặt tour</button>
        </div>
    </div>
</form>


@endsection
