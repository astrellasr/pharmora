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
                'code' => 'CAT-001',
                'name' => 'Prescription Medicine',
                'description' => 'Medicines that require a doctor\'s prescription.',
            ],
            [
                'code' => 'CAT-002',
                'name' => 'Over-the-Counter (OTC)',
                'description' => 'Medicines available without a prescription.',
            ],
            [
                'code' => 'CAT-003',
                'name' => 'Vitamins & Supplements',
                'description' => 'Nutritional supplements and vitamins.',
            ],
            [
                'code' => 'CAT-004',
                'name' => 'Medical Devices',
                'description' => 'Medical equipment and healthcare devices.',
            ],
            [
                'code' => 'CAT-005',
                'name' => 'Personal Care',
                'description' => 'Personal hygiene and self-care products.',
            ],
            [
                'code' => 'CAT-006',
                'name' => 'Baby Care',
                'description' => 'Baby health and care products.',
            ],
        ];

        foreach ($categories as $category) {
            Category::create([
                'uuid' => (string) Str::uuid(),
                'code' => $category['code'],
                'name' => $category['name'],
                'description' => $category['description'],
                'status' => 'active',
            ]);
        }
    }
}