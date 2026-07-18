<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create default administrator account
        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@pharmora.test',
        ]);

        // Seed application data
        $this->call([
            OrganizationSettingSeeder::class,
            CategorySeeder::class,
            SupplierSeeder::class,
            ProductSeeder::class,
            InventoryMovementSeeder::class,
        ]);
    }
}