<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Congress;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
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
             'CongressID' => Congress::factory(),
             'TypeID' => fake()->numberBetween(0 ,1),
             'FullTitle' => fake()->name(),
             'ShortTitle' =>  fake()->name(),
             'FullTitle_fa' =>  fake()->name(),
             'ShortTitle_fa' =>  fake()->name(),
             'Tags' =>  fake()->name(),
             'Tags_fa' =>  fake()->name(),
        ];
    }
}
