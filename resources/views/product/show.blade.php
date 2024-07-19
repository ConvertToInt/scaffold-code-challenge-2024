@extends('layout')

@section('content')

<div class="row">
    
    @include('category._sidebar')
    
    <div class="col-12 col-md-9">
        <div class="container product-container mt-5">
            <div class="d-flex justify-content-between">
                <h1>{{$product->title}}</h1>
                <a class="text-black" href="{{ url()->previous() }}">Go back</a>
            </div>
            <div class="row mt-5">
                <div class="col-6">
                    <img src="{{$product->img_url}}" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-6">
                    <h2 class="my-4">{{$product->title}}</h2>
                    <h2>£{{$product->price}}</h2>
                </div>
            </div>
            <h2 class="ml-3 mt-5">Description:</h2>
            <p>{{$product->desc}}</p>
            <h2 class="ml-3 mt-5">Category:</h2>
            <p>{{$product->category->name}}</p>
        </div>
    </div>
</div>

@endsection