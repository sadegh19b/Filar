<?php

declare(strict_types=1);

namespace App\Models\Traits;

use App\Fields\UserFld;
use App\Models\User;
use Filament\Panel;

/**
 * @mixin User
 */
trait HasFilamentUser
{
    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    public function getFilamentAvatarUrl(): string
    {
        return asset('images/default-avatar.png');
    }

    public function getFilamentName(): string
    {
        return $this->getAttribute(UserFld::NAME);
    }
}
