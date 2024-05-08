@extends('admin.index')
    @section('content')

    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group has-error">
            <label for="name" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" >
        </div>
        <div class="form-group has-error">
            <label for="exampleInputEmail1">ảnh </label>
            <input type="file" class="form-control" name='photo' placeholder="Enter Name">
        </div>

        <div class="form-group">
            <label>Danh Mục</label>
            <select class="form-control" name="category_id">
                <option value="0"> Danh Mục Cha </option>
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}"> {{ $item->name }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Danh Mục</label>
            <select class="form-control" name="user_id">
                <option value="0"> Danh Mục Cha </option>
                @foreach ($users as $item)
                    <option value="{{ $item->id }}"> {{ $item->name }} </option>
                @endforeach
            </select>
        </div>

        <div class="form-group has-error">
            <label for="description" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Thêm Blog</button>
    </form>

@endsection
