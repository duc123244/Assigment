@extends('admin.layouts.master')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Tạo mới danh mục</h1>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên danh mục:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>

        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>
@endsection
