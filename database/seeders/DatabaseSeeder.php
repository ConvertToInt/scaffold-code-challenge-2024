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
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Create categories
        Category::factory()
            ->count(6)
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
            ->count(50)
            ->create();
    }
}
