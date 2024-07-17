@extends('layout')


@section('content')

    <h2>Products</h2>

    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                @include('product._card')
            @endforeach 
        </div>
    </div>   

@endsection