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
}
