@extends('layout')

@section('content')

<div class="row">
    <div class="col-3">
        @include('category._sidebar')
    </div>
    <div class="col-9">
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
                    <h2 class="my-4">£{{$product->price}}</h2>
                    <p>Description: {{$product->desc}}</p>
                </div>
            </div>
        </div>  
    </div>
</div>

@endsection