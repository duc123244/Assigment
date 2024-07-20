@extends('welcome')

@section('content')
<div class="features_items">
    <h2 class="title text-center">Sản phẩm</h2>

    @foreach ($books as $book) <!-- Sử dụng tên biến là $books -->
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="{{ Storage::url($book->image) }}" alt="{{ $book->name }}" />
                    <h2>${{ number_format($book->price, 2) }}</h2>
                    <p>{{ $book->name }}</p>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-default add-to-cart">
                        <i class="fa fa-shopping-cart"></i>Add to cart
                    </a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>${{ number_format($book->price, 2) }}</h2>
                        <p>{{ $book->name }}</p>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-default add-to-cart">
                            <i class="fa fa-shopping-cart"></i>Chi tiết sản phẩm<main></main>
                        </a>
                    </div>
                </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
