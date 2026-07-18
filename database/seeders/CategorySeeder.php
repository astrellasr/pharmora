<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'uuid' => (string) Str::uuid(),
                'code' => 'CAT-001',
                'name' => 'Prescription Medicine',
                'description' => 'Medicines that require a doctor\'s prescription.',
                'status' => 'active',
            ],
            [
                'uuid' => (string) Str::uuid(),
                'code' => 'CAT-002',
                'name' => 'Over-the-Counter (OTC)',
                'description' => 'Medicines available without a prescription.',
                'status' => 'active',
            ],
            [
                'uuid' => (string) Str::uuid(),
                'code' => 'CAT-003',
                'name' => 'Vitamins & Supplements',
                'description' => 'Nutritional supplements and vitamins.',
                'status' => 'active',
            ],
            [
                'uuid' => (string) Str::uuid(),
                'code' => 'CAT-004',
                'name' => 'Medical Devices',
                'description' => 'Medical equipment and healthcare devices.',
                'status' => 'active',
            ],
            [
                'uuid' => (string) Str::uuid(),
                'code' => 'CAT-005',
                'name' => 'Personal Care',
                'description' => 'Personal hygiene and self-care products.',
                'status' => 'active',
            ],
            [
                'uuid' => (string) Str::uuid(),
                'code' => 'CAT-006',
                'name' => 'Baby Care',
                'description' => 'Baby health and care products.',
                'status' => 'active',
            ],
        ];

        Category::upsert(
            $categories,
            ['code'],
            ['name', 'description', 'status']
        );
    }
}