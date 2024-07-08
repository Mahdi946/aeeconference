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
            'location' => $this->faker->sentence,
            'phone' => $this->faker->sentence,
            'congress_id' => Congress::factory(),
        ];
    }
}
