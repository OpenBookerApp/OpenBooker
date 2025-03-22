<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'zip_code' => $this->faker->postcode(),
            'country' => $this->faker->country(),
            'language' => $this->faker->languageCode(),
            'timezone' => $this->faker->timezone(),
            'notes' => $this->faker->text(),
        ];
    }
}
