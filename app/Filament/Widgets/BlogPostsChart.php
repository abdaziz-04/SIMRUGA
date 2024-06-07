<?php

namespace App\Filament\Widgets;

use App\Models\RT;
use App\Models\Warga;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class BlogPostsChart extends ApexChartWidget
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
        $data = [];

        $rts = RT::all();

        foreach ($rts as $rt) {
            $labels[] = $rt->nama_rt;
            $data[] = Warga::where('id_rt', $rt->id)->count();
        }

        return [
            'chart' => [
                'type' => 'bar',
            ],
            'series' => [
                [
                    'name' => 'Jumlah Warga',
                    'data' => $data,
                ],
            ],
            'xaxis' => [
                'categories' => $labels,
            ],
        ];
    }
}
