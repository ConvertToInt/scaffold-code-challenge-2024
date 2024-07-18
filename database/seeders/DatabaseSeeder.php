<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create categories
        Category::factory()
            ->count(8)
            ->create();

        // Create subcategories
        Category::all()->each(function ($category) {
            Category::factory()
            ->count(3)
            ->create([
                'parent_id' => $category->id
            ]);
        });

        // Create products
        Product::factory()
            ->count(200)
            ->create();
    }
}
