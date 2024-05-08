@extends('admin.index')
@section('content')

<form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group has-error">
        <label for="name" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
    </div>
    <div class="form-group has-error">
        <label for="exampleInputEmail1">ảnh </label>
        <input type="file" class="form-control" name='photo' placeholder="Enter Name">
        @if ($post->image)
        <div>
            <img src="{{ asset('storage/images/' . $post->image) }}" style="max-width:100px; margin-top: 10px;" />
            <p>Ảnh hiện tại</p>
        </div>
    @endif
    </div>
    <div class="form-group">
        <label>Danh Mục</label>
        <select class="form-control" name="category_id">
            <option value="0"> Danh Mục Cha </option>
            @foreach ($categories as $item)
                <option value="{{ $item->id }}" {{ $post->category_id == $item->id ? 'selected' : '' }}> {{ $item->name }} </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>User</label>
        <select class="form-control" name="user_id">
            <option value="0"> Danh Mục Cha </option>
            @foreach ($users as $item)
                <option value="{{ $item->id }}" {{ $post->user_id == $item->id ? 'selected' : '' }}> {{ $item->name }} </option>
            @endforeach
        </select>
    </div>

    <div class="form-group has-error">
        <label for="description" class="form-label">Content</label>
        <textarea class="form-control" id="content" name="content" rows="4">{{ $post->content }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật Blog</button>
</form>

@endsection
