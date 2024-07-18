<div class="container category-container p-3">
    <div class="category-textbox">
        <h2>CATEGORIES_</h2>
        <div class="category-list mt-5 text-uppercase">
        <a class="text-decoration-none category-name" href="{{route('products_index')}}"><p>All</p></a>
            @foreach ($categories as $category)
                <a class="text-decoration-none category-name" href="{{route('category_show', $category->slug)}}"><p>{{$category->name}} ({{$category->getAllSubcategoryProducts()->count()}})</p></a>
                <ul class="subcategory-list d-none">
                    @foreach ($category->subcategories()->get() as $subcategory)
                        <li>{{$subcategory->name}} ({{$subcategory->products->count()}})</li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>
</div>