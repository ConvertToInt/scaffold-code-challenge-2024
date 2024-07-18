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

        // If parent_id is null, the category is a base category, otherwise it is a subcategory
        if (is_null($category->parent_id)) {
            $products = $category->getAllSubcategoryProducts()->paginate(15);
        } else {
            $products = $category->products()->paginate(15);
        }

        return view('category.show', [
            'currentCategory' => $category,
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
