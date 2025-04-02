<?php

declare(strict_types=1);

namespace App\Support\Filament\Concerns;

use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;

trait ResourceLabelsTranslation
{
    public static function getModelLabel(): string
    {
        return static::getTranslateLabel('singular') ?? parent::getModelLabel();
    }

    public static function getPluralModelLabel(): string
    {
        return static::getTranslateLabel('plural') ?? parent::getPluralModelLabel();
    }

    public static function getNavigationLabel(): string
    {
        return static::getTranslateLabel('navigation') ?? parent::getNavigationLabel();
    }

    public static function getEmptyStateHeading(): string
    {
        return __('filament.empty_state.heading', ['attribute' => static::getTranslateLabel('empty_state') ?? static::getModelLabel()]);
    }

    public static function getEmptyStateDescription(): string
    {
        return __('filament.empty_state.description', ['attribute' => static::getModelLabel()]);
    }

    protected static function getTranslateLabel(string $type): ?string
    {
        if (! in_array($type, ['singular', 'plural', 'navigation', 'empty_state'])) {
            return null;
        }

        $resourceName = Str::kebab(str_replace('Resource', '', class_basename(static::class)));
        $transKey = "filament.resources.{$resourceName}.resource.{$type}";

        if (! Lang::has($transKey)) {
            return null;
        }

        $translation = Lang::get($transKey);

        return is_string($translation) ? $translation : null;
    }
}
