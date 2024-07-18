<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent_id')->get();
        $products = Product::paginate(15);

        return view('product.index', [
            'products' => $products,
            'categories' => $categories,
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
            ->paginate(15);
    
        // Return the search view with the resluts compacted
        return view('product.search', [
            'searchTerm' => $search,
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
