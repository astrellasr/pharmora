<?php

namespace Database\Factories;

use App\Models\OrganizationSetting;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<OrganizationSetting>
 */
class OrganizationSettingFactory extends Factory
{
    /**
     * The name of the model that the factory corresponds to.
     *
     * @var class-string<OrganizationSetting>
     */
    protected $model = OrganizationSetting::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'organization_name' => 'Pharmora Demo Pharmacy',
            'business_type' => 'Pharmacy',
            'workspace_email' => 'admin@pharmora.test',
            'phone' => '+62 21 5555 1234',
            'address' => 'Jl. Jenderal Sudirman No. 100, Jakarta, Indonesia',
            'logo' => null,
            'country' => 'Indonesia',
            'timezone' => 'Asia/Jakarta',
            'language' => 'id',
        ];
    }
}