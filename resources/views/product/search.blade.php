@extends('layout')


@section('content')

<div class="row">
    <div class="col-3">
        @include('category._sidebar')
    </div>
    <div class="col-9">
        <div class="container product-container mt-5">
            <h1>Results for '{{$searchTerm}}'</h1>
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