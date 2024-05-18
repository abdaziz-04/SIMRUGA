<?php

namespace App\Providers;

use App\Filament\Widgets\CurrentDateTimeWidget;
use Filament\FilamentServiceProvider as BaseFilamentServiceProvider;
use Filament\Widgets\Widget;

class FilamentServiceProvider extends BaseFilamentServiceProvider
{
    protected function getDashboardWidgets(): array
    {
        return [
            // ... other widgets
            // Widget::make(CurrentDateTimeWidget::class),
        ];
    }
}
