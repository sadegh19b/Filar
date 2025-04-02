<?php

declare(strict_types=1);

namespace Database\Factories\User;

use App\Fields\UserFields;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User\User>
 */
final class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    private static ?string $password = null;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            UserFields::NAME => fake()->name(),
            UserFields::EMAIL => fake()->unique()->safeEmail(),
            UserFields::EMAIL_VERIFIED_AT => now(),
            UserFields::PASSWORD => self::$password ??= Hash::make('password'),
            UserFields::REMEMBER_TOKEN => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes): array => [
            UserFields::EMAIL_VERIFIED_AT => null,
        ]);
    }
}
