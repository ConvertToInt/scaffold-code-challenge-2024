<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $sortBy = $request->input('sortBy', 'asc'); // Set what to sort by, default to ascending order
        $sortOn = $request->input('sortOn', 'title'); // Set what field to sort on, default to title

        $categories = Category::whereNull('parent_id')->get();
        $products = Product::orderBy($sortOn, $sortBy)->paginate(9);

        return view('product.index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function show(Product $product)
    {
        $categories = Category::whereNull('parent_id')->get();

        return view('product.show', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function search(Request $request)
    {
        $categories = Category::whereNull('parent_id')->get();

        // Get the search value from the request
        $search = $request->input('product');
    
        // Search in the title and body columns from the posts table
        $products = Product::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->paginate(9);
    
        // Return the search view with the resluts compacted
        return view('product.search', [
            'searchTerm' => $search,
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
