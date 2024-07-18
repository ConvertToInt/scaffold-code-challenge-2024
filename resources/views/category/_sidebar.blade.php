<div class="container category-container p-3">
    <div class="category-textbox">
        <h2>CATEGORIES_</h2>
        <div class="category-list mt-5 text-uppercase">
        <a class="text-decoration-none category-name" href="{{route('products_index')}}"><p>All</p></a>
            @foreach ($categories as $category)
                <div class="d-flex justify-content-between">
                    <a class="text-decoration-none category-name" href="{{route('category_show', $category->slug)}}"><p>{{$category->name}} ({{$category->getAllSubcategoryProducts()->count()}})</p></a>
                    <i class="fa-solid fa-arrow-down fa-lg toggle-subcategories" id="{{$category->id}}"></i>
                </div>
                <ul class="subcategory-list category-{{$category->id}} {{(isset($currentCategory) && $currentCategory->parent == $category) ? '' : 'd-none'}}">
                    @foreach ($category->subcategories()->get() as $subcategory)
                        <a class="text-decoration-none category-name" href="{{route('category_show', $subcategory->slug)}}"><li>{{$subcategory->name}} ({{$subcategory->products->count()}})</li></a>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>
</div>