<?php

namespace App\Filament\Widgets;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget\Card;

class iStatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '5s';

    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::query()->count())->url('admin/users'),
        ];
    }

    public static function canView(): bool
    {
        return Auth::user()->hasPermissionTo('view_admin');
    }
}
