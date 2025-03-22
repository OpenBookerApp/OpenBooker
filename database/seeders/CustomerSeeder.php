<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $i = 1;
        while ($i <= 10) {
            $user = User::factory()->create();
            Customer::factory()->create([
                'user_id' => $user->id,
            ]);
            $i++;
        }
    }
}
