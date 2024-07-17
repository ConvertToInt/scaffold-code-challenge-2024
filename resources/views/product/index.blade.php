@extends('layout')


@section('content')

    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                @include('product._card')
            @endforeach 
        </div>
    </div>   

    {{ $products->links() }}

@endsection