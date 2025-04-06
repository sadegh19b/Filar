<?php

declare(strict_types=1);

namespace Tests\Unit\Support\Enums;

use App\Support\Enums\Concerns\HasOptions;

/**
 * @internal
 */
enum SimpleOptionsEnum: string
{
    use HasOptions;

    case Yes = 'yes';
    case No = 'no';
}
