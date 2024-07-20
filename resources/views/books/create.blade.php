@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h1>Thêm mới sách</h1>
        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Tên sách</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="public_company">Nhà xuất bản</label>
                <input type="text" class="form-control" id="public_company" name="public_company" required>
            </div>
            <div class="form-group">
                <label for="author_id">Tác giả</label>
                <select class="form-control" id="author_id" name="author_id" required>
                    @foreach ($authors as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Đảm bảo bạn đã truyền đúng dữ liệu vào view -->
            <div class="form-group">
                <label for="category_id">Danh mục</label>
                <select name="category_id" class="form-control">
                    <option value="">Chọn danh mục</option>
                    @foreach ($categories as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="image">Ảnh</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <div class="form-group">
                <label for="price">Giá cả:</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="quantity">Số lượng</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active">
                <label class="form-check-label" for="is_active">Còn hàng</label>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
@endsection
