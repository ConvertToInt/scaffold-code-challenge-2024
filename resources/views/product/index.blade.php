@extends('layout')


@section('content')

    <div class="container product-container mt-5">
        <div class="row">
            @foreach ($products as $product)
                @include('product._card')
            @endforeach 
        </div>
    </div>   

    <div class="container links-container">
        {{ $products->links() }}
    </div>

@endsection