<?php

namespace App\Filament\Widgets;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;
use App\Models\Pemasukan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PemasukanChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'pemasukanChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Pemasukan';

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
                    'name' => 'Pemasukan',
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
            'colors' => ['#00e396'],
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
            if ($pemasukanPerBulan->has($month)) {
                $jumlahPemasukanPerBulan[$month] = $pemasukanPerBulan[$month]->sum(function ($p) {
                    return (int) $p->jumlah_pemasukan; // Konversikan menjadi integer
                });
            } else {
                $jumlahPemasukanPerBulan[$month] = 0;
            }
        }

        // Masukkan data ke dalam array data untuk chart
        $data['labels'] = $allMonths->toArray();
        $data['datasets'][0]['label'] = 'Pemasukan';
        $data['datasets'][0]['data'] = array_values($jumlahPemasukanPerBulan);

        return $data;
    }

    public static function canView(): bool
    {
        return Auth::user()->hasPermissionTo('view_pemasukan_keuangan'); // Pastikan Anda memiliki hak akses yang sesuai dengan permission
    }
}
