<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = ['name', 'slug', 'desc', 'price', 'category_id'];

    // Product belongs to a Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
