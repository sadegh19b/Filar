<?php

declare(strict_types=1);

namespace Tests\Unit\Support\Enums;

test('__callStatic returns correct value for existing case', function () {
    expect(TestValuesEnum::Active())->toBe('active')
        ->and(TestValuesEnum::Inactive())->toBe('inactive')
        ->and(TestValuesEnum::Pending())->toBe('pending');
});

test('__callStatic returns null for non-existing case', function () {
    expect(TestValuesEnum::NonExisting())->toBeNull();
});

test('values returns array of all enum values', function () {
    expect(TestValuesEnum::values())->toBe([
        'active',
        'inactive',
        'pending',
    ]);
});
