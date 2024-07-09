<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArticleFile>
 */
class ArticleFileFactory extends Factory
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
             //
             'ArticleID' => Article::factory(),
             'description' => $this->faker->sentence,
             'FileType' => fake()->name(),
             'Location' => fake()->name(),
             
        ];
    }
}
