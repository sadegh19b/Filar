<?php

declare(strict_types=1);

namespace Tests\Unit\Support\Enums;

test('options returns correct array with custom labels', function () {
    expect(TestOptionsEnum::options())->toBe([
        'one' => 'First Option',
        'two' => 'Second Option',
    ]);
});

test('options returns default labels when getLabel is not implemented', function () {
    expect(SimpleOptionsEnum::options())->toBe([
        'yes' => 'Yes',
        'no' => 'No',
    ]);
});
