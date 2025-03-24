<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::factory()->create([
            'name' => 'Service 1',
            'duration' => 15 * 60,
        ]);
        Service::factory()->create([
            'name' => 'Service 2',
            'duration' => 30 * 60,
        ]);
        Service::factory()->create([
            'name' => 'Service 3',
            'duration' => 45 * 60,
        ]);
        Service::factory()->create([
            'name' => 'Service 4',
            'duration' => 60 * 60,
        ]);
        Service::factory()->create([
            'name' => 'Service 5',
            'duration' => 90 * 60,
        ]);
    }
}
