<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = ucfirst(implode(' ', fake()->words(3)));
        $slug = Str::slug($title);

        // Could be replaced with some sort of helper function getSubcategories()
        $subcategories = Category::whereNotNull('parent_id')->get();

        return [
            'title' => $title,
            'slug' => $slug,
            'desc' => fake()->sentence(),
            'price' => fake()->randomNumber(3, false),
            'category_id' => $subcategories->random()->id,
            'img_url' => fake()->imageUrl(width: 600, height: 600)
        ];
    }
}
