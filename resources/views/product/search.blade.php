@extends('layout')

@section('content')

<div class="row">
    
    @include('category._sidebar')
    
    <div class="col-12 col-md-9">
        <div class="container product-container mt-5">
            <div class="d-flex justify-content-between">
                <h1>Results for '{{$searchTerm}}'</h1>
                <a class="text-black" href="{{ url()->previous() }}">Go back</a>
            </div>
            @include('product._sort-btns')
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