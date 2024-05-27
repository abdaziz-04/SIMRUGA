<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use App\Models\LaporanKeuangan;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewBendahara extends BaseWidget
{
    use InteractsWithPageFilters;


    protected function getStats(): array
    {
        return $this->updateLaporanKeuangan();
    }

    protected function updateLaporanKeuangan(){
        $startDate = ! is_null($this->filters['startDate'] ?? null) ?
            Carbon::parse($this->filters['startDate']) :
            null;

        $endDate = ! is_null($this->filters['endDate'] ?? null) ?
            Carbon::parse($this->filters['endDate']) :
            now();

        $totalPemasukan = Pemasukan::whereBetween('tanggal', [$startDate, $endDate])->sum('jumlah_pemasukan');
        $totalPengeluaran = Pengeluaran::whereBetween('tanggal', [$startDate, $endDate])->sum('jumlah_pengeluaran');
        $laporan = LaporanKeuangan::firstOrNew(['tanggal' => now()->toDateString()]);
        $laporan->total_pemasukan = $totalPemasukan;
        $laporan->total_pengeluaran = $totalPengeluaran;

        return [
            Stat::make('Total Pemasukan', $totalPemasukan)
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),
            Stat::make('Total Pengeluaran', $totalPengeluaran)
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->color('danger'),
            Stat::make('Sisa Saldo', $totalPemasukan - $totalPengeluaran)
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),
        ];
    } 
}
