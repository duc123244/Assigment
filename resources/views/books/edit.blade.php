@extends('admin.layouts.master')

@section('content')
    <div class="container">
    <h1>Cập nhật sách</h1>
    <form action="{{ route('books.update',$book) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="mt-3 mb-4">
                <label for="" class="form-label">Tên</label>
                <input type="text" class="form-control" name="name" value="{{ $book->name }}">
            </div>
            <div class="mt-3 mb-4">
                <label for="" class="form-label">Nhà xuất bản</label>
                <input type="text" class="form-control" name="public_company"value="{{$book->public_company}}">
            </div>
            <div class="mt-3 mb-4">
                <label for="" class="form-label">Tác giả</label>
                <select name="author_id" id="" class="form-control" >
                    @foreach($authors as $data => $name )
                    <option value="{{$data}}"
                     @selected($book->author_id = $data)>{{$name}}</option>
                        
                    @endforeach
                </select>
            </div>
            <div class="mt-3 mb-4">
                <label for="" class="form-label">Ảnh</label>
                @if (!empty($book->image))
                <div style="width:100px; height:100px;">
                    <img src="{{ Storage::url($book->image) }}" style="width:100px; height:100px;" alt="Ảnh sách hiện tại">
                </div>
                @endif
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <label for="price">Giá cả:</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $book->price }}" required>
            </div>
            
            <div class="form-group">
                <label for="quantity">Số lượng:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $book->quantity }}" required>
            </div>
            <div class="mt-3 mb-4">
                <label for="" class="form-label">Trạng thái</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="is_active"@checked($book->is_active)>
                    <label class="form-check-label" for="is_active">Có</label>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Cập nhật</button>
            </div>
     </form>
    @endsection

