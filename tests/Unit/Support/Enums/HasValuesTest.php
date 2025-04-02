<?php

declare(strict_types=1);

use App\Support\Enums\Concerns\HasValues;

enum TestValueEnum: string
{
    use HasValues;

    case Active = 'active';
    case Inactive = 'inactive';
    case Pending = 'pending';
}

test('__callStatic returns correct value for existing case', function () {
    expect(TestValueEnum::Active())->toBe('active')
        ->and(TestValueEnum::Inactive())->toBe('inactive')
        ->and(TestValueEnum::Pending())->toBe('pending');
});

test('__callStatic returns null for non-existing case', function () {
    expect(TestValueEnum::NonExisting())->toBeNull();
});

test('values returns array of all enum values', function () {
    expect(TestValueEnum::values())->toBe([
        'active',
        'inactive',
        'pending',
    ]);
});
