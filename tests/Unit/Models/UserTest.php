<?php

declare(strict_types=1);

use App\Fields\UserFields;
use App\Models\User\User;

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
