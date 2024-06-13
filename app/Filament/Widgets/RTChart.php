<?php

namespace App\Filament\Widgets;

use App\Models\RT;
use App\Models\Warga;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;
use Illuminate\Support\Facades\Auth; // Import Auth

class RTChart extends ApexChartWidget
{
    public static ?int $sort = 10;

    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'blogPostsChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Jumlah Data Warga Tiap RT';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        $labels = [];
        $pendatangData = [];
        $lokalData = [];

        $rts = RT::all();

        foreach ($rts as $rt) {
            $labels[] = $rt->nama_rt;
            $pendatangData[] = Warga::where('id_rt', $rt->id)->where('jenis_warga', 'Pendatang')->count();
            $lokalData[] = Warga::where('id_rt', $rt->id)->where('jenis_warga', 'Lokal')->count();
        }

        return [
            'chart' => [
                'type' => 'bar',
                'stacked' => true,
            ],
            'plotOptions' => [
                'bar' => [
                    'horizontal' => false,
                ],
            ],
            'series' => [
                [
                    'name' => 'Pendatang',
                    'data' => $pendatangData,
                ],
                [
                    'name' => 'Lokal',
                    'data' => $lokalData,
                ],
            ],
            'xaxis' => [
                'categories' => $labels,
            ],
            'yaxis' => [
                'title' => [
                    'text' => 'Jumlah Warga',
                ],
            ],
            'legend' => [
                'position' => 'top',
            ],
            'fill' => [
                'opacity' => 1,
            ],
        ];
    }

    public static function canView(): bool // Fungsi untuk memeriksa hak akses
    {
        return Auth::user()->hasPermissionTo('view_laporan_keuangan_widget'); // Pastikan Anda memiliki hak akses yang sesuai dengan permissionn
    }
}
