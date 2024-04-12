@extends('admin.index')
@section('content')
    <form action="{{ route('tours.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group has-error">
            <label for="title" class="form-label">Tên Tour</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="ma_tour">Mã Tour:</label>
            <input type="text" id="ma_tour" name="ma_tour" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ngay_khoi_hanh">Ngày khởi hành:</label>
            <input type="text" id="ngay_khoi_hanh" name="ngay_khoi_hanh" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="thoi_gian">Thời gian:</label>
            <input type="text" id="thoi_gian" name="thoi_gian" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="xuat_phat">Xuất phát:</label>
            <input type="text" id="xuat_phat" name="xuat_phat" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="xuat_phat">So chỗ</label>
            <input type="text" id="xuat_phat" name="so_cho" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="diem_du_lich">Điểm du lịch:</label>
            <input type="text" id="diem_du_lich" name="diem_du_lich" class="form-control" required>
        </div>

        <div class="form-group has-error">
            <label for="price" class="form-label">Giá</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>


        <div class="form-group has-error">
            <label for="sale_price" class="form-label">Giá Khuyến Mại</label>
            <input type="text" class="form-control" id="sale_price" name="sale_price">
        </div>
        <div class="form-group">

            <label>Mô Tả Chi Tiết</label>
            <textarea type name="description" id="content" class="form-control"></textarea>
        </div>


        <div class="form-group">
            <label for="destination_id">Điểm Đến</label>
            <select class="form-control" id="destination_id" name="destination_id">
                <option value="0">Chọn điểm đến</option>
                @foreach ($destinations as $destination)
                    <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group has-error">
            <label for="photo" class="form-label">Ảnh</label>
            <input type="file" class="form-control" id="photo" name='photo' placeholder="Enter Name">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="stock">
            <label class="form-check-label" for="flexCheckChecked">
                Checked checkbox
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Thêm Tours</button>
    </form>
@endsection
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
