<?php

namespace App\Filament\Widgets;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;
use App\Models\SuratSekretaris;
use App\Models\SuratWarga;
use Illuminate\Support\Facades\Auth;

class ChartSurat extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'chartSurat';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Surat';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        $data = $this->getData();

        $barColors = ['#008ffb', '#00e396']; // Define custom colors for bars
        $textColor = '#000'; // Black color for text

        return [
            'series' => [
                [
                    'data' => $data['datasets'][0]['data'],
                ],
            ],
            'chart' => [
                'height' => 350,
                'type' => 'bar',
                'events' => [
                    'click' => 'function(chart, w, e) {
                        // console.log(chart, w, e);
                    }',
                ],
            ],
            'colors' => $barColors,
            'plotOptions' => [
                'bar' => [
                    'columnWidth' => '45%',
                    'distributed' => true,
                ],
            ],
            'dataLabels' => [
                'enabled' => false,
            ],
            'legend' => [
                'show' => false,
            ],
            'xaxis' => [
                'categories' => [
                    ['Surat Masuk'],
                    ['Surat Keluar'],
                ],
                'labels' => [
                    'style' => [
                        'colors' => $textColor, // Set text color to black
                        'fontSize' => '12px',
                    ],
                ],
            ],
        ];
    }


    protected function getData(): array
    {
        // Menghitung jumlah surat masuk dari surat_sekretaris
        $jumlahSuratMasuk = SuratSekretaris::count();
        
        // Menghitung jumlah surat keluar dari surat_Warga
        $jumlahSuratKeluar = SuratWarga::count();

        return [
            'labels' => ['Surat Masuk', 'Surat Keluar'],
            'datasets' => [
                [
                    'label' => 'Jumlah Surat',
                    'data' => [$jumlahSuratMasuk, $jumlahSuratKeluar],
                ],
            ],
        ];
    }
}
