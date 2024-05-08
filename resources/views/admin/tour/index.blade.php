@extends('admin.index')

@section('content')
<table class="table">
    <a href="{{ route('tours.create') }}" class="btn btn-primary mb-3">Tạo mới Tours</a>
    <thead>
      <tr>
        <th >STT</th>
        <th >tên tours</th>
        <th >xuất phát</th>
        <th >khởi hành </th>
        <th >thời gian</th>
        <th >giá sale</th>
        <th >giá sale</th>
        <th >điểm đến</th>
        <th >ngày tạo</th>
        <th >hình ảnh</th>
        <th >tùy chọn</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($tours as $item)
        <tr>
            <td >{{ $loop->iteration }}</td>
            <td >{{ $item->title }}</td>
            <td >{{ $item->xuat_phat }}</td>
            <td >{{ $item->ngay_khoi_hanh }}</td>
            <td >{{ $item->thoi_gian }}</td>
            <td >{{ $item->price }}</td>
            <td >{{ $item->sale_price }}</td>
            <td >{{ $item->destination->name}}</td>
            <td >{{ $item->created_at }}</>

            <td >
                <img src="{{ asset('storage/images/' . $item->image) }}" alt="" width="150px">
            </td>
            <td >
                <a href="{{ route('tours.edit',$item->id) }}" class="btn btn-warning">sửa</a>

                <form action="{{ route('tours.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
          </tr>
        @empty
            <span>Chưa có dữ liệu</span>
        @endforelse

    </tbody>
  </table>
@endsection
