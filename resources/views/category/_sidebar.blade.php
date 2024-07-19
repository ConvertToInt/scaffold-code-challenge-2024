<div class="col-sm-12 col-md-3">
    <div class="category-container p-3">
        <div class="category-textbox">
            <div class="d-flex justify-content-between">
                <h2>CATEGORIES_</h2>
                <i class="fa-solid fa-arrows-up-down fa-xl d-block d-md-none toggle-categories"></i>
            </div>
            <div class="category-list mt-5 text-uppercase d-none d-md-block">
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
                <div class="search-bar mt-3 d-block d-md-none">
                    <form class="form-inline my-2 my-lg-0" action="{{ route('product_search')}}" method="GET">
                        <input class="form-control mr-sm-2" name="product" placeholder="Search for products..." aria-label="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>