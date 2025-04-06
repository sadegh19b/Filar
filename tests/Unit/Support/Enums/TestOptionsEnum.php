<?php

declare(strict_types=1);

namespace Tests\Unit\Support\Enums;

use App\Support\Enums\Concerns\HasOptions;

/**
 * @internal
 */
enum TestOptionsEnum: string
{
    use HasOptions;

    case One = 'one';
    case Two = 'two';

    public function getLabel(): string
    {
        return match ($this) {
            self::One => 'First Option',
            self::Two => 'Second Option',
        };
    }
}
