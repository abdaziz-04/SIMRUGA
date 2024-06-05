<?php

namespace App\Filament\Widgets;

use App\Models\Pengeluaran;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth; // Import Auth

class WidgetPengeluaranChart extends ChartWidget
{
    protected static ?string $heading = 'Pengeluaran';
    protected static string $color = 'danger';

    protected function getData(): array
    {
        $data = [];

        // Daftar lengkap nama bulan
        $allMonths = collect([
            'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
        ]);

        // Ambil data pengeluaran
        $pengeluaran = Pengeluaran::all();

        // Kelompokkan data pengeluaran per bulan
        $pengeluaranPerBulan = $pengeluaran->groupBy(function ($pengeluaran) {
            return Carbon::parse($pengeluaran->tanggal)->format('F'); // Formatkan tanggal menjadi nama bulan
        });

        // Siapkan data jumlah pengeluaran per bulan
        $jumlahPengeluaranPerBulan = [];

        // Isi data jumlah pengeluaran per bulan dengan 0 jika tidak ada data pengeluaran untuk bulan tersebut
        foreach ($allMonths as $month) {
            $jumlahPengeluaranPerBulan[$month] = $pengeluaranPerBulan->has($month) ? $pengeluaranPerBulan[$month]->sum('jumlah_pengeluaran') : 0;
        }

        // Masukkan data ke dalam array data untuk chart
        $data['labels'] = $allMonths->toArray();
        $data['datasets'][0]['label'] = 'Pengeluaran';
        $data['datasets'][0]['data'] = array_values($jumlahPengeluaranPerBulan);

        return $data;
    }
    protected function getType(): string
    {
        return 'line';
    }

    public static function canView(): bool // Fungsi untuk memeriksa hak akses
    {
        return Auth::user()->hasPermissionTo('view_pengeluaran_keuangan'); // Pastikan Anda memiliki hak akses yang sesuai dengan permissionn
    }
}
