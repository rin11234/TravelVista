@extends('admin.index')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th >STT</th>
        <th >Tên Điểm Đến </th>
        <th >tên danh mục</th>
        <th >ngày tạo</th>
        <th >hình ảnh</th>
        <th >tùy chọn</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($destinations as $item)
        <tr>
            <td >{{ $loop->iteration }}</td>
            <td >{{ $item->name }}</td>
            <td >{{ $item->category->name}}</td>
            <td >{{ $item->created_at }}</>

            <td >
                <img src="{{ asset('storage/images/' . $item->image) }}" alt="" width="150px">
            </td>
            <td >
                <a href="{{ route('destinations.edit',$item->id) }}" class="btn btn-warning">sửa</a>

                <form action="{{ route('destinations.destroy', $item->id) }}" method="POST" style="display: inline-block;">
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
