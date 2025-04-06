<?php

declare(strict_types=1);

use App\Fields\UserFields;
use App\Models\User\User;
use Filament\Panel;

test('to array', function () {
    $user = User::factory()->create()->refresh();

    expect(array_keys($user->toArray()))
        ->toBe([
            UserFields::ID,
            UserFields::NAME,
            UserFields::EMAIL,
            UserFields::EMAIL_VERIFIED_AT,
            UserFields::CREATED_AT,
            UserFields::UPDATED_AT,
        ]);
});

test('casts returns expected attributes', function () {
    $user = new User();

    expect($user->casts())
        ->toBe([
            UserFields::EMAIL_VERIFIED_AT => 'datetime',
            UserFields::PASSWORD => 'hashed',
        ]);
});

test('can access panel returns true', function () {
    $user = new User();
    $panel = mock(Panel::class);

    expect($user->canAccessPanel($panel))->toBeTrue();
});

test('get filament avatar url returns default avatar path', function () {
    $user = new User();

    expect($user->getFilamentAvatarUrl())
        ->toBe(asset('images/default-avatar.png'));
});
