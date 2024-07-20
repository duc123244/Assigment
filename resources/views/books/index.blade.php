@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h1>Quản lý sách</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary">Thêm mới</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Nhà xuất bản</th>
                <th>Tác giả</th>
                <th>Ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Trạng thái</th>
                <th>Danh mục</th>
                <th>Hành động</th>
            </tr>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->public_company }}</td>
                    <td>{{ $item->author ? $item->author->name : 'N/A' }}</td>
                    <td>
                        <div style="width:100px; height:100px;">
                            <img src="{{ Storage::url($item->image) }}" alt="" style="width:100px; height:100px;">
                        </div>
                    </td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{$item->price}}</td>
                    <td>
                        {!! $item->is_active
                            ? '<span class="badge bg-success">Còn hàng</span>'
                            : '<span class="badge bg-danger">Hết hàng</span>' !!}
                    </td>
                    <td>{{ $item->category ? $item->category->name : 'N/A' }}</td>
                    <td>
                        <a href="{{ route('books.show', $item) }}" class="btn btn-info">
                            Xem</a>
                        <a href="{{ route('books.edit', $item) }}" class="btn btn-success">
                            Sửa</a>
                        <form action="{{ route('books.destroy', $item) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection
