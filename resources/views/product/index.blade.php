@extends('layout')


@section('content')

<div class="row">
    <div class="col-3">
        <div class="container category-container p-3">
            <div class="category-textbox">
                <h2>CATEGORIES_</h2>
                <div class="category-list mt-5 text-uppercase">
                @foreach ($categories as $category)
                    <a class="text-decoration-none category-name" href="/"><p>{{$category->name}} ({{$category->getAllSubcategoryProducts()->count()}})</p></a>
                    <ul class="subcategory-list d-none">
                        @foreach ($category->subcategories()->get() as $subcategory)
                            <li>{{$subcategory->name}} ({{$subcategory->products->count()}})</li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
            </div>
        </div>
    </div>
    <div class="col-9">
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
    </div>
</div> 

@endsection