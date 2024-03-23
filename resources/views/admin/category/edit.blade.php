@extends('admin.index')
@section('content')
<form action="{{ route('category.store') }}" method="POST" >
    @csrf
    <div class="card-body">
      <div class="form-group has-error">
        <label for="exampleInputEmail1">Tên Danh mục </label>
        <input type="text" class="form-control" name='name' placeholder="Enter Name">


      </div>
      <div class="form-group">
        <label>Danh Mục</label>
        <select class="form-control" name="parent_id">
            <option value="0"> Danh Mục Cha </option>
           @foreach ($categories as $item)
           <option value="{{ $item->id }}"> {{ $item->name }} </option>
           @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="status">Trạng thái</label>
        <select class="form-control" id="status" name="status">
            <option value="1">Hiển thị</option>
            <option value="0">Ẩn</option>
        </select>
    </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-danger">Tạo Danh Mục</button>
    </div>
  </form>
@endsection
