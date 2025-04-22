<?php

declare(strict_types=1);

namespace App\Support\Enums\Concerns;

trait HasValues
{
    /**
     * Handle dynamic static method calls to return the value of the enum case.
     *
     * @param  array<int, mixed>  $arguments
     */
    public static function __callStatic(string $name, array $arguments): string|int|null
    {
        foreach (self::cases() as $case) {
            if ($case->name === $name) {
                return $case->value;
            }
        }

        return null;
    }

    /**
     * Get all the enum values as an array.
     *
     * @return array<string|int|null>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
