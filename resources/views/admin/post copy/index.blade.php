@extends('admin.index')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Category</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->title }}</td>

                <td>{{ $item->category->name }}</td>
                <td>
                    <img src="{{ asset('storage/images/' . $item->image) }}" alt="" width="150px">
                </td>
                <td>
                    <a href="{{ route('postBlog.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('postBlog.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection
