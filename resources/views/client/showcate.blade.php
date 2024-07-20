@extends('welcome')
@section('content')

        @foreach ($products as $product)
            <div class="product-item">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <p>Price: {{ $product->price }}</p>
            </div>
        @endforeach

@endsection