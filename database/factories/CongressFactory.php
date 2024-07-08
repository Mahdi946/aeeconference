<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Congress>
 */
class CongressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


            return [
                'name' => fake()->name(),

                'description' => $this->faker->sentence,

                'secretary_id' => User::factory(),

                'start_date' =>  $this->faker->dateTime,
                'end_date' =>  $this->faker->dateTime,

            ];

    }
}
