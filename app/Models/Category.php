<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Models\Product;

class Category extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = ['name', 'slug', 'parent_id'];

    // Category belongs to a parent Category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Category has many subcategories
    public function subcategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // Category has many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getAllSubcategoryProducts()
    {
        $subcategoryIds = $this->subcategories()->pluck('id');

        // Fetch products where the category_id is in the subcategory IDs
        return Product::whereIn('category_id', $subcategoryIds);
    }
}
