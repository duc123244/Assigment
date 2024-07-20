@extends('admin.layouts.master')

@section('content')
<div class="container mt-4">
<!-- Menu -->
    <div class="menu mb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Bookstore</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        {{-- <a class="nav-link" href="{{ route('/') }}">Home <span class="sr-only">(current)</span></a> --}}
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="{{ route('pages.list') }}">Danh sách</a> --}}
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Danh sách danh mục
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($categories as $category)
                                <a class="dropdown-item" href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item" style="margin-left: 470px;">
                        {{-- <a class="nav-link" href="{{ route('cart.index')}}">🛒 </a> --}}
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Categories -->
    <div class="categories">
        <div class="container mt-5">
            <h1 class="mb-4">Danh mục</h1>
            
            <a href="/categories/create" class="btn btn-success mb-4">
                Tạo thêm danh mục
            </a>
            
            <div class="row">
                @foreach ($categories as $category)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</div>
@endsection
