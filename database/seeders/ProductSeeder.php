<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'sku' => 'PRD-000001',
                'name' => 'Paracetamol 500 mg',
                'category' => 'CAT-001',
                'supplier' => 'SUP-001',
                'stock' => 150,
                'minimum_stock' => 25,
            ],
            [
                'sku' => 'PRD-000002',
                'name' => 'Amoxicillin 500 mg',
                'category' => 'CAT-001',
                'supplier' => 'SUP-002',
                'stock' => 85,
                'minimum_stock' => 20,
            ],
            [
                'sku' => 'PRD-000003',
                'name' => 'Cetirizine 10 mg',
                'category' => 'CAT-002',
                'supplier' => 'SUP-003',
                'stock' => 120,
                'minimum_stock' => 20,
            ],
            [
                'sku' => 'PRD-000004',
                'name' => 'Omeprazole 20 mg',
                'category' => 'CAT-001',
                'supplier' => 'SUP-004',
                'stock' => 70,
                'minimum_stock' => 15,
            ],
            [
                'sku' => 'PRD-000005',
                'name' => 'Vitamin C 1000 mg',
                'category' => 'CAT-003',
                'supplier' => 'SUP-001',
                'stock' => 200,
                'minimum_stock' => 30,
            ],
            [
                'sku' => 'PRD-000006',
                'name' => 'Vitamin D3',
                'category' => 'CAT-003',
                'supplier' => 'SUP-005',
                'stock' => 95,
                'minimum_stock' => 20,
            ],
            [
                'sku' => 'PRD-000007',
                'name' => 'Digital Thermometer',
                'category' => 'CAT-004',
                'supplier' => 'SUP-006',
                'stock' => 35,
                'minimum_stock' => 10,
            ],
            [
                'sku' => 'PRD-000008',
                'name' => 'Blood Pressure Monitor',
                'category' => 'CAT-004',
                'supplier' => 'SUP-006',
                'stock' => 18,
                'minimum_stock' => 5,
            ],
            [
                'sku' => 'PRD-000009',
                'name' => 'Hand Sanitizer 500 mL',
                'category' => 'CAT-005',
                'supplier' => 'SUP-005',
                'stock' => 110,
                'minimum_stock' => 20,
            ],
            [
                'sku' => 'PRD-000010',
                'name' => 'Surgical Mask',
                'category' => 'CAT-005',
                'supplier' => 'SUP-002',
                'stock' => 300,
                'minimum_stock' => 50,
            ],
            [
                'sku' => 'PRD-000011',
                'name' => 'Baby Lotion',
                'category' => 'CAT-006',
                'supplier' => 'SUP-003',
                'stock' => 60,
                'minimum_stock' => 15,
            ],
            [
                'sku' => 'PRD-000012',
                'name' => 'Baby Diapers',
                'category' => 'CAT-006',
                'supplier' => 'SUP-001',
                'stock' => 140,
                'minimum_stock' => 30,
            ],
        ];

        foreach ($products as $product) {
            Product::create([
                'uuid' => (string) Str::uuid(),
                'category_id' => Category::where('code', $product['category'])->firstOrFail()->id,
                'supplier_id' => Supplier::where('code', $product['supplier'])->firstOrFail()->id,
                'sku' => $product['sku'],
                'barcode' => fake()->unique()->ean13(),
                'name' => $product['name'],
                'description' => null,
                'current_stock' => $product['stock'],
                'minimum_stock' => $product['minimum_stock'],
                'status' => 'active',
            ]);
        }
    }
}