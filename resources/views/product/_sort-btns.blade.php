<div class="sort-btns d-flex justify-content-center mt-4">
    <a class="mx-2 " href="{{ route('products_index', ['sortOn' => 'title', 'sortBy' => 'asc']) }}" class="{{ request('sort') === 'asc' ? 'active' : '' }}">Sort A-Z</a>
    <a class="mx-2" href="{{ route('products_index', ['sortOn' => 'title', 'sortBy' => 'desc']) }}" class="{{ request('sort') === 'desc' ? 'active' : '' }}">Sort Z-A</a>
    <a class="mx-2" href="{{ route('products_index', ['sortOn' => 'price', 'sortBy' => 'asc']) }}" class="{{ request('sort') === 'asc' ? 'active' : '' }}">Sort $&#8594;$$$</a>
    <a class="mx-2" href="{{ route('products_index', ['sortOn' => 'price', 'sortBy' => 'desc']) }}" class="{{ request('sort') === 'desc' ? 'active' : '' }}">Sort $$$&#8594;$</a>
</div>
