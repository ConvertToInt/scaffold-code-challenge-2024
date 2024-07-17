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
            ->count(8)
            ->create();

        // Create subcategories
        Category::all()->each(function ($category) {
            Category::factory()
            ->count(6)
            ->create([
                'parent_id' => $category->id
            ]);
        });

        // Create products
        // Product::factory()
        //     ->has(Category::factory()->count(5)->create())
        //     ->count(5)
        //     ->create();
    }
}
