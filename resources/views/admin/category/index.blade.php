@extends('admin.index')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                Danh sách danh mục
            </div>
            <div class="card-body">
                <a href="{{ route('category.index') }}" class="btn btn-primary mb-3">Tạo mới danh mục</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Danh mục cha</th>
                            <th scope="col">Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->parent ? $category->parent->name : 'Không có' }}</td>
                                <td>{{ $category->status == 1 ? 'Hiển thị' : 'Ẩn' }}</td>
                                <td >
                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning">sửa</a>

                                    <form action="{{ route('destinations.destroy',  $category->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


