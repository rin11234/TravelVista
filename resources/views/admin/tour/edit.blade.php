@extends('admin.index')
    @section('content')

    <form action="{{ route('tours.update', $tour->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')
        <div class="form-group has-error">
            <label for="name" class="form-label">Tên tours</label>
            <input type="text" class="form-control" id="name" name="title" value="{{$tour->title }}" >
        </div>
        <div class="form-group">
            <label for="ma_tour">Mã Tour:</label>
            <input type="text" id="ma_tour" name="ma_tour" class="form-control" value="{{ $tour->ma_tour }}" required>
        </div>
        <div class="form-group">
            <label for="ngay_khoi_hanh">Ngày khởi hành:</label>
            <input type="text" id="ngay_khoi_hanh" name="ngay_khoi_hanh" class="form-control" value="{{ $tour->ngay_khoi_hanh }}" required>
        </div>
        <div class="form-group">
            <label for="ngay_khoi_hanh">Thời gian:</label>
            <input type="text" id="ngay_khoi_hanh" name="so_cho" class="form-control" value="{{ $tour->ngay_khoi_hanh }}" required>
        </div>
        <div class="form-group">
            <label for="thoi_gian">Xuất phát:</label>
            <input type="text" id="thoi_gian" name="thoi_gian" class="form-control" value="{{ $tour->thoi_gian }}" required>
        </div>
        <div class="form-group">
            <label for="xuat_phat">Số chỗ:</label>
            <input type="text" id="xuat_phat" name="xuat_phat" class="form-control" value="{{ $tour->xuat_phat }}" required>
        </div>
        <div class="form-group">
            <label for="diem_du_lich">Điểm du lịch:</label>
            <input type="text" id="diem_du_lich" name="diem_du_lich" class="form-control" value="{{ $tour->diem_du_lich }}" required>
        </div>
        <div class="form-group">
            <label>Mô Tả Chi Tiết</label>
            <textarea type name="description" id="content" class="form-control" value="{{ $tour->description }}"> {{ $tour->description }}</textarea>
        </div>

        <div class="form-group has-error">
            <label for="price" class="form-label">Giá</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$tour->price }}">
        </div>

        <div class="form-group has-error">
            <label for="sale_price" class="form-label">Giá Khuyến Mại</label>
            <input type="text" class="form-control" id="sale_price" name="sale_price" value="{{$tour->sale_price }}">
        </div>
        <div class="form-group">
            <label for="destination_id">Điểm Đến</label>
            <select class="form-control" id="destination_id" name="destination_id">
                <option value="0">Chọn điểm đến</option>
                @foreach ($destinations as $destination)
                    <option value="{{ $destination->id }}" {{ $destination->id == $tour->destination_id ? 'selected' : '' }}>{{ $destination->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group has-error">
            <label for="exampleInputEmail1">ảnh </label>
            <input type="file" class="form-control" name='photo' placeholder="Enter Name">
            @if ($tour->image)
            <div>
                <img src="{{ asset('storage/images/' .$tour->image) }}" style="max-width:100px; margin-top: 10px;" />
                <p>Ảnh hiện tại</p>
            </div>
        @endif

        </div>

        <button type="submit" class="btn btn-primary">cập nhật tours du lịch</button>
    </form>
    <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>

    <!-- Initialize CKEditor -->
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection

