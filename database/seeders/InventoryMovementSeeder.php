<?php

namespace Database\Seeders;

use App\Models\InventoryMovement;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InventoryMovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $user = User::firstOrFail();

        for ($i = 1; $i <= 30; $i++) {
            InventoryMovement::create([
                'uuid' => (string) Str::uuid(),

                'product_id' => $products->random()->id,

                'user_id' => $user->id,

                'movement_type' => fake()->randomElement([
                    'stock_in',
                    'stock_out',
                ]),

                'quantity' => fake()->numberBetween(1, 20),

                'notes' => fake()->optional()->sentence(),

                'reference_number' => sprintf('MOV-%06d', $i),

                'created_at' => fake()->dateTimeBetween('-30 days', 'now'),
            ]);
        }
    }
}