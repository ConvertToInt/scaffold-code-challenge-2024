<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(15);
        $categories = Category::whereNull('parent_id')->get();
        $subcategories = Category::whereNotNull('parent_id')->get();


        return view('product.index', [
            'products' => $products,
            'categories' => $categories,
            'subcategoeies' => $subcategories
        ]);
    }
}
