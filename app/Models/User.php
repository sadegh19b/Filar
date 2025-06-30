<?php

declare(strict_types=1);

namespace App\Models;

use App\Fields\UserFld;
use App\Models\Traits\HasFilamentUser;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Models\Contracts\HasName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser, HasAvatar, HasName
{
    use HasFactory, HasFilamentUser, Notifiable;

    protected $hidden = [
        UserFld::PASSWORD,
        UserFld::REMEMBER_TOKEN,
    ];

    protected $casts = [
        UserFld::EMAIL_VERIFIED_AT => 'datetime',
        UserFld::PASSWORD => 'hashed',
    ];
}
