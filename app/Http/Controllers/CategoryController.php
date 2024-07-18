<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category) 
    {
        // Fetch all top level categories
        $categories = Category::whereNull('parent_id')->get();
        // Fetch all subcategories for the given Category
        $subcategories = $category->subcategories;
        // Get all products within the given subcategories
        $products = $category->getAllSubcategoryProducts()->paginate(15);

        return view('category.show', [
            'currentCategory' => $category,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'products' => $products
        ]);
    }
}
