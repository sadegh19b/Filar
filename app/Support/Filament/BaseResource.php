<?php

declare(strict_types=1);

namespace App\Support\Filament;

use App\Support\Filament\Concerns\ResourceLabelsTranslation;
use Filament\Resources\Resource;

abstract class BaseResource extends Resource
{
    use ResourceLabelsTranslation;
}
