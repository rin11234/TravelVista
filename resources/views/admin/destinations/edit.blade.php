@extends('admin.index')
    @section('content')

    <form action="{{ route('destinations.update', $destination->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group has-error">
            <label for="name" class="form-label">Tên Sản Phẩm</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $destination->name }}" >
        </div>

        <div class="form-group has-error">
            <label for="exampleInputEmail1">ảnh </label>
            <input type="file" class="form-control" name='photo' placeholder="Enter Name">
            @if ($destination->image)
            <div>
                <img src="{{ asset('storage/images/' . $destination->image) }}" style="max-width:100px; margin-top: 10px;" />
                <p>Ảnh hiện tại</p>
        </div>
        @endif

        </div>

        <div class="form-group">
            <label>Danh Mục</label>
            <select class="form-control" name="category_id">
                <option value="0"> Danh Mục Cha </option>
                @foreach ($categories as $item)
                    <option value="{{ $item->id }} " {{ $item->id == $destination->category_id ? 'selected' : '' }}> {{ $item->name }} </option>
                @endforeach
            </select>
        </div>

        <div class="form-group has-error">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $destination->slug }}" required>
        </div>

        <div class="form-group has-error">
            <label for="description" class="form-label">Mô Tả</label>
            <textarea class="form-control" id="description" name="description" rows="4" >{{ $destination->description  }}</textarea>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="stock">
            <label class="form-check-label" for="flexCheckChecked">
                Checked checkbox
            </label>
        </div>

        <button type="submit" class="btn btn-primary">cập nhật điểm đến </button>
    </form>

@endsection
