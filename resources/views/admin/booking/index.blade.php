@extends('admin.index')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th>STT</th>
        <th>Tên Tour </th>
        <th>Họ tên</th>
        <th>Điện thoại</th>
        <th>Email</th>
        <th>Số người lớn</th>
        <th>Số trẻ em</th>
        <th>Ngày khởi hành</th>
        <th>Tin nhắn</th>
        <th>Tùy chọn</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($bookings as $booking)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $booking->tour->title }}</td>
            <td>{{ $booking->fullname }}</td>
            <td>{{ $booking->phone }}</td>
            <td>{{ $booking->email }}</td>
            <td>{{ $booking->adult }}</td>
            <td>{{ $booking->children }}</td>
            <td>{{ $booking->start_date_book }}</td>
            <td>{{ $booking->message }}</td>
            <td >
                <a href="{{ route('booking.edit',$booking->id) }}" class="btn btn-warning">sửa</a>

                <form action="{{ route('booking.destroy', $booking->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="9">Chưa có dữ liệu</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
