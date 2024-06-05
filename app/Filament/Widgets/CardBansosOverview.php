<?php

namespace App\Filament\Widgets;

use App\Models\Rangking;
use Illuminate\Support\Facades\Auth;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class CardBansosOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '5s';

    protected function getCards(): array
    {
        $jumlahPenerimaBansos = Rangking::where('alternatif_id')->count();

        return [
            Card::make('Penerima Bansos', $jumlahPenerimaBansos)
                ->url('admin/perankingans')
                ->color('primary')
                ->icon('heroicon-o-users')
                ->extraAttributes(['class' => 'hover-shadow']),
        ];
    }

    public static function canView(): bool // Fungsi untuk memeriksa hak akses
    {
        return Auth::user()->hasPermissionTo('view_bansos'); // Pastikan Anda memiliki hak akses yang sesuai dengan permissionn
    }
}
