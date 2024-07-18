@extends('layout')


@section('content')

<div class="row">
    <div class="col-3">
        @include('category._sidebar')
    </div>
    <div class="col-9">
        <div class="container product-container mt-5">
            <div class="d-flex justify-content-between">
                <h1>All Products_</h1>
                <a class="text-black" href="{{ url()->previous() }}">Go back</a>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    @include('product._card')
                @endforeach 
            </div>
        </div>   
    
        <div class="container links-container">
            {{ $products->links() }}
        </div>
    </div>
</div> 

@endsection