<?php

namespace Database\Factories;

use App\Models\Congress;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'Location' => $this->faker->sentence,
            'Phone' => $this->faker->sentence,
            'CongressID' => Congress::factory(),
        ];
    }
}
