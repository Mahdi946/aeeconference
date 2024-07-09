<?php

namespace Database\Factories;

use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => fake()->name(),
            'Family' => fake()->name(),
            'Name_fa' => fake()->name(),
            'Family_fa' => fake()->name(),
            'FatherName' => fake()->name(),
            'BirthCert' => fake()->numberBetween(0 ,005077627),
            'MobileNumber' => "09355192660",
            'PhoneNumber' => "77439145",
            'Email' => fake()->unique()->safeEmail(),
            'Field' =>  fake()->name(),
            'Edu' => "masster",
            'City' => fake()->name(),
            'City_fa' => fake()->name(),
            'Country' => "IRAN",
            'Rank' => fake()->name(),
            'Org' => fake()->name(),
            'Org_fa' => fake()->name(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
