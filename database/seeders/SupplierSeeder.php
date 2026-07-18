<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = [
            [
                'code' => 'SUP-001',
                'name' => 'PT Kalbe Farma Tbk',
                'contact_person' => 'Budi Santoso',
                'email' => 'sales@kalbe.demo',
                'phone' => '+62 21 5555 1001',
                'address' => 'Jakarta, Indonesia',
            ],
            [
                'code' => 'SUP-002',
                'name' => 'PT Kimia Farma Trading & Distribution',
                'contact_person' => 'Andi Pratama',
                'email' => 'sales@kimiafarma.demo',
                'phone' => '+62 21 5555 1002',
                'address' => 'Jakarta, Indonesia',
            ],
            [
                'code' => 'SUP-003',
                'name' => 'PT Dexa Medica',
                'contact_person' => 'Rina Maharani',
                'email' => 'sales@dexa.demo',
                'phone' => '+62 21 5555 1003',
                'address' => 'Tangerang, Indonesia',
            ],
            [
                'code' => 'SUP-004',
                'name' => 'PT Sanbe Farma',
                'contact_person' => 'Dimas Saputra',
                'email' => 'sales@sanbe.demo',
                'phone' => '+62 21 5555 1004',
                'address' => 'Bandung, Indonesia',
            ],
            [
                'code' => 'SUP-005',
                'name' => 'PT Soho Global Health',
                'contact_person' => 'Siti Wulandari',
                'email' => 'sales@soho.demo',
                'phone' => '+62 21 5555 1005',
                'address' => 'Jakarta, Indonesia',
            ],
            [
                'code' => 'SUP-006',
                'name' => 'PT Tempo Scan Pacific Tbk',
                'contact_person' => 'Fajar Nugroho',
                'email' => 'sales@temposcan.demo',
                'phone' => '+62 21 5555 1006',
                'address' => 'Jakarta, Indonesia',
            ],
        ];

        foreach ($suppliers as $supplier) {
            Supplier::create([
                'uuid' => (string) Str::uuid(),
                'code' => $supplier['code'],
                'name' => $supplier['name'],
                'contact_person' => $supplier['contact_person'],
                'email' => $supplier['email'],
                'phone' => $supplier['phone'],
                'address' => $supplier['address'],
                'status' => 'active',
            ]);
        }
    }
}