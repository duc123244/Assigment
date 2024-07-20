@extends('admin.layouts.master')

@section('content')
    <title>Chi tiết sách</title>
</head>
<body>
    <h1>Chi tiết sách</h1>
    <p>Tên: {{$book->name}}</p>
    <p>Nhà xuất bản: {{$book->public_company}}</p>
    <p>Tác giả: {{$book->author->name}}</p>
    <p>Ảnh:
        @if (!empty($book->image))
        <div style="width:100px, height:100px;">
            <img src="{{Storage::url($book->image)}}"
            style="width:100px, height:100px;" alt="">
        </div>
        @endif
    </p>
    <li>Giá cả: {{$book->price}}</li>
    <li>Số lượng: {{$book->quantity}}</li>
   <li>Trạng thái: 
    <input type="checkbox" class="forn-check-input" @checked($book->is_active)>
    </li>
    <a href="{{ route('books.index') }}">Quay lại danh sách</a>
    </button>
    @endsection

