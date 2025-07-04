<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Fields\UserFld;
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
            UserFld::NAME => fake()->name(),
            UserFld::EMAIL => fake()->unique()->safeEmail(),
            UserFld::EMAIL_VERIFIED_AT => now(),
            UserFld::PASSWORD => static::$password ??= Hash::make('password'),
            UserFld::REMEMBER_TOKEN => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes): array => [
            UserFld::EMAIL_VERIFIED_AT => null,
        ]);
    }
}
