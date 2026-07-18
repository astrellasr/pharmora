<?php

namespace Database\Factories;

use App\Models\InventoryMovement;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InventoryMovement>
 */
class InventoryMovementFactory extends Factory
{
    /**
     * The name of the model that the factory corresponds to.
     *
     * @var class-string<\App\Models\InventoryMovement>
     */
    protected $model = InventoryMovement::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => (string) Str::uuid(),

            'product_id' => Product::factory(),

            'user_id' => User::factory(),

            'movement_type' => fake()->randomElement([
                'stock_in',
                'stock_out',
            ]),

            'quantity' => fake()->numberBetween(1, 100),

            'notes' => fake()->optional()->sentence(),

            'reference_number' => fake()->unique()->numerify('MOV-######'),

            'created_at' => fake()->dateTimeBetween('-6 months', 'now'),
        ];
    }
}