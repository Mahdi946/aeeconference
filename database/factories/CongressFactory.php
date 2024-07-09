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
                'Name' => fake()->name(),

                'Description' => $this->faker->sentence,

                'SecretaryID' => User::factory(),

                'StartDate' =>  $this->faker->dateTime,
                'EndDate' =>  $this->faker->dateTime,

            ];

    }
}
