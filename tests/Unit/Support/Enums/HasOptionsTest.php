<?php

declare(strict_types=1);

use App\Support\Enums\Concerns\HasOptions;

enum TestEnum: string
{
    use HasOptions;

    case One = 'one';
    case Two = 'two';

    public function getLabel(): string
    {
        return match ($this) {
            self::One => 'First Option',
            self::Two => 'Second Option',
        };
    }
}

enum SimpleEnum: string
{
    use HasOptions;

    case Yes = 'yes';
    case No = 'no';
}

test('options returns correct array with custom labels', function () {
    expect(TestEnum::options())->toBe([
        'one' => 'First Option',
        'two' => 'Second Option',
    ]);
});

test('options returns default labels when getLabel is not implemented', function () {
    expect(SimpleEnum::options())->toBe([
        'yes' => 'Yes',
        'no' => 'No',
    ]);
});
