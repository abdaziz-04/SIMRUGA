<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use App\Models\LaporanKeuangan;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth; // Import Auth

class StatsOverviewBendahara extends BaseWidget
{
    use InteractsWithPageFilters;

    protected ?string $heading = 'Keuangan RW 8';
    protected static ?string $pollingInterval = '5s';

    protected function getStats(): array
    {
        return $this->updateLaporanKeuangan();
    }

    protected function updateLaporanKeuangan()
    {
        $totalPemasukan = Pemasukan::sum('jumlah_pemasukan');
        $totalPengeluaran = Pengeluaran::sum('jumlah_pengeluaran');
        $laporan = LaporanKeuangan::firstOrNew(['tanggal' => now()->toDateString()]);
        $laporan->total_pemasukan = $totalPemasukan;
        $laporan->total_pengeluaran = $totalPengeluaran;

        return [
            Stat::make('Total Pemasukan', $this->formatRupiah($totalPemasukan))
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('Total Pengeluaran', $this->formatRupiah($totalPengeluaran))
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->color('danger'),
            Stat::make('Sisa Saldo', $this->formatRupiah($totalPemasukan - $totalPengeluaran))
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
        ];
    }

    public static function canView(): bool // Fungsi untuk memeriksa hak akses
    {
        return Auth::user()->hasPermissionTo('view_laporan_keuangan_widget'); // Pastikan Anda memiliki hak akses yang sesuai dengan permissionn
    }

    public function formatRupiah($amount)
    {
        return 'Rp' . number_format($amount, 2, ',', '.');
    }
}
