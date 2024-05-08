@extends('admin.index')

@section('content')
<table class="table">
    <a href="{{ route('destinations.create') }}" class="btn btn-primary mb-3">Tạo mới </a>
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Điểm Đến</th>
            <th>Tên Danh Mục</th>
            <th>Ngày Tạo</th>
            <th>Hình Ảnh</th>
            <th>Tùy Chọn</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($destinations as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->category->name }}</td>
            <td>{{ $item->created_at->format('d/m/Y') }}</td>
            <td>
                <img src="{{ asset('storage/images/' . $item->image) }}" alt="" width="150px">
            </td>
            <td>
                <a href="{{ route('destinations.edit',$item->id) }}" class="btn btn-warning">Sửa</a>
                <form action="{{ route('destinations.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Xóa</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">Chưa có dữ liệu</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
