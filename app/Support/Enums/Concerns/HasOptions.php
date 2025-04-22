<?php

declare(strict_types=1);

namespace App\Support\Enums\Concerns;

trait HasOptions
{
    /**
     * Get an associative array with enum values as keys and labels as values.
     *
     * Enums that can have labels should implement the `getLabel` method.
     *
     * e.g.
     * ```php
     * public function getLabel(): string
     * {
     *     return match($this) {
     *         self::Item => __('enums.item'),
     *     };
     * }
     * ```
     *
     * @return array<string, string>
     */
    public static function options(): array
    {
        $labels = [];

        foreach (self::cases() as $status) {
            $label = (method_exists($status, 'getLabel'))
                ? $status->getLabel()
                : __(ucfirst((string) $status->name));

            $labels[$status->value] = $label;
        }

        return $labels;
    }
}
