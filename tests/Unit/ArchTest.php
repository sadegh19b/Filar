<?php

declare(strict_types=1);

pest()->presets()->custom('myStrict', function (array $userNamespaces) {
    return [
        expect([
            'sleep',
            'usleep',
        ])->not->toBeUsed(),
        expect($userNamespaces)->toUseStrictTypes(),
        expect($userNamespaces)->toUseStrictEquality(),
    ];
});

arch()->preset()->php();
arch()->preset()->myStrict();
arch()->preset()->laravel();
arch()->preset()->security();

arch('controllers')
    ->expect('App\Http\Controllers')
    ->not->toBeUsed();

arch('fields')
    ->expect('App\Fields')
    ->classes()
    ->toHaveSuffix('Fields')
    ->toBeReadOnly();
