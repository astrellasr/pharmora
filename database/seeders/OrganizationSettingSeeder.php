<?php

namespace Database\Seeders;

use App\Models\OrganizationSetting;
use Illuminate\Database\Seeder;

class OrganizationSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrganizationSetting::factory()->create();
    }
}