<?php

declare(strict_types=1);

namespace Tests\Unit\Support\Enums;

use App\Support\Enums\Concerns\HasValues;

/**
 * @internal
 */
enum TestValuesEnum: string
{
    use HasValues;

    case Active = 'active';
    case Inactive = 'inactive';
    case Pending = 'pending';
}
