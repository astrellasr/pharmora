<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * The name of the model that the factory corresponds to.
     *
     * @var class-string<\App\Models\Product>
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => (string) Str::uuid(),

            'category_id' => Category::factory(),
            'supplier_id' => Supplier::factory(),

            'sku' => fake()->unique()->numerify('PRD-######'),

            'barcode' => fake()->optional()->unique()->ean13(),

            'name' => fake()->words(3, true),

            'description' => fake()->optional()->sentence(),

            'current_stock' => fake()->numberBetween(0, 500),

            'minimum_stock' => fake()->numberBetween(5, 50),

            'status' => 'active',
        ];
    }
}