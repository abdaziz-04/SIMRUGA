<?php

namespace App\Filament\Widgets;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;
use App\Models\Pengeluaran;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ZPengeluaranChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'pengeluaranChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Pengeluaran';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        $data = $this->getData();

        return [
            'chart' => [
                'type' => 'line',
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'PengeluaranChart',
                    'data' => $data['datasets'][0]['data'],
                ],
            ],
            'xaxis' => [
                'categories' => $data['labels'],
                'labels' => [
                    'style' => [
                        'fontFamily' => 'inherit',
                    ],
                ],
            ],
            'yaxis' => [
                'labels' => [
                    'style' => [
                        'fontFamily' => 'inherit',
                    ],
                ],
            ],
            'colors' => ['#FF0000'],
            'stroke' => [
                'curve' => 'smooth',
            ],
        ];
    }

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

    public static function canView(): bool
    {
        return Auth::user()->hasPermissionTo('view_pengeluaran_keuangan'); // Pastikan Anda memiliki hak akses yang sesuai dengan permission
    }
}