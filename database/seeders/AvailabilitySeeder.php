<?php

namespace Database\Seeders;

use App\Models\Availability;
use Illuminate\Database\Seeder;

class AvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Availability::create([
            'day' => 'Monday',
            'start' => '09:00',
            'end' => '17:00',
            'enabled' => true,
        ]);
        Availability::create([
            'day' => 'Tuesday',
            'start' => '09:10',
            'end' => '17:10',
            'enabled' => true,
        ]);
        Availability::create([
            'day' => 'Wednesday',
            'start' => '09:20',
            'end' => '17:20',
            'enabled' => true,
        ]);
        Availability::create([
            'day' => 'Thursday',
            'start' => '09:30',
            'end' => '17:30',
            'enabled' => true,
        ]);
        Availability::create([
            'day' => 'Friday',
            'start' => '09:40',
            'end' => '17:40',
            'enabled' => true,
        ]);
        Availability::create([
            'day' => 'Saturday',
            'start' => '09:50',
            'end' => '17:50',
            'enabled' => false,
        ]);
        Availability::create([
            'day' => 'Sunday',
            'start' => '09:00',
            'end' => '17:00',
            'enabled' => false,
        ]);
    }
}
