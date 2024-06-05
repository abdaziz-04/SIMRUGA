<?php

namespace App\Filament\Widgets;

use Illuminate\Support\Facades\Auth;  
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::query()->count()),
        ];
    }

    public static function canView(): bool // Fungsi untuk memeriksa hak akses
    {
        return Auth::user()->hasPermissionTo('view_admin'); // Pastikan Anda memiliki hak akses yang sesuai dengan permissionn
    }
}
