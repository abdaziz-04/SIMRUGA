<?php

namespace App\Filament\Widgets;

use App\Models\Pemasukan;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Facades\Auth; // Import Auth

class WidgetPemasukanChart extends ChartWidget
{
    protected static ?string $heading = 'Pemasukan';
    protected static string $color = 'success';

//     protected function getData(): array
// {
//     $data = [];

//     // Ambil data pemasukan
//     $pemasukan = Pemasukan::all();

//     // Kelompokkan data pemasukan per bulan
//     $pemasukanPerBulan = $pemasukan->groupBy(function ($pemasukan) {
//         return Carbon::parse($pemasukan->tanggal)->format('F'); // Formatkan tanggal menjadi nama bulan
//     });

//     // Hitung jumlah pemasukan per bulan
//     $jumlahPemasukanPerBulan = $pemasukanPerBulan->map(function ($items) {
//         return $items->sum('jumlah_pemasukan');
//     });

//     // Masukkan data ke dalam array data untuk chart
//     $data['labels'] = $jumlahPemasukanPerBulan->keys()->toArray();
//     $data['datasets'][0]['label'] = 'Pemasukan';
//     $data['datasets'][0]['data'] = $jumlahPemasukanPerBulan->values()->toArray();

//     return $data;
// }

protected function getData(): array
{
        $data = [];

        // Daftar lengkap nama bulan
        $allMonths = collect([
            'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
        ]);

        // Ambil data pemasukan
        $pemasukan = Pemasukan::all();

        // Kelompokkan data pemasukan per bulan
        $pemasukanPerBulan = $pemasukan->groupBy(function ($pemasukan) {
            return Carbon::parse($pemasukan->tanggal)->format('F'); // Formatkan tanggal menjadi nama bulan
        });

        // Siapkan data jumlah pemasukan per bulan
        $jumlahPemasukanPerBulan = [];

        // Isi data jumlah pemasukan per bulan dengan 0 jika tidak ada data pemasukan untuk bulan tersebut
        foreach ($allMonths as $month) {
            $jumlahPemasukanPerBulan[$month] = $pemasukanPerBulan->has($month) ? $pemasukanPerBulan[$month]->sum('jumlah_pemasukan') : 0;
        }

        // Masukkan data ke dalam array data untuk chart
        $data['labels'] = $allMonths->toArray();
        $data['datasets'][0]['label'] = 'Pemasukan';
        $data['datasets'][0]['data'] = array_values($jumlahPemasukanPerBulan);

        return $data;
    }

    protected function getType(): string
    {
        return 'line';
    }

    public static function canView(): bool // Fungsi untuk memeriksa hak akses
    {
        return Auth::user()->hasPermissionTo('view_pemasukan_keuangan'); // Pastikan Anda memiliki hak akses yang sesuai dengan permissionn
    }
}