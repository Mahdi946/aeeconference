<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Congress;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Presenter>
 */
class PresenterFactory extends Factory
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
            'user_id' => User::factory(),
            'description' => $this->faker->sentence,
            'start_date' =>  $this->faker->dateTime,
            'end_date' =>  $this->faker->dateTime,
            'congress_id' => Congress::factory(),
        ];
    }
}
