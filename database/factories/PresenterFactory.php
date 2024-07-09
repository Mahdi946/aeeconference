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
            'UserID' => User::factory(),
            'Description' => $this->faker->sentence,
            'StartDate' =>  $this->faker->dateTime,
            'EndDate' =>  $this->faker->dateTime,
            'CongressID' => Congress::factory(),
        ];
    }
}
