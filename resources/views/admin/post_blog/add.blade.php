@extends('admin.index')
@section('content')
<form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf


    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" >
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content">content</textarea>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control-file" id="image" name="photo">

    </div>

    <div class="form-group">
        <label for="category_id">Category</label>
        <select class="form-control" id="category_id" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ isset($post) && $post->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">  Add Blog</button>
</form>

@endsection
