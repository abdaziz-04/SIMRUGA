<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Rangking; 

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
}
