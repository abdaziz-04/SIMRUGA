<?php

namespace App\Filament\Widgets;

use Illuminate\Support\Facades\Auth; // Import Auth
use App\Models\RT;
use App\Models\Warga;
use Filament\Widgets\ChartWidget;
use Filament\Support\Colors\Color;
use Spatie\Permission\Models\Role;

class WargaChart extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Warga per RT';

    protected function getData(): array
    {
        $data = [];

        $rts = RT::all();

        foreach ($rts as $rt) {
            $data['labels'][] = $rt->nama_rt;
            $data['datasets'][0]['data'][] = Warga::where('id_rt', $rt->id)->count();
        }

        $data['datasets'][0]['label'] = 'RT';
        return $data;
    }

    protected function getType(): string
    {
        return 'bar';
    }

    public static function canView(): bool // Fungsi untuk memeriksa hak akses
    {
        return Auth::user()->hasPermissionTo('view_warga'); // Pastikan Anda memiliki hak akses yang sesuai dengan permissionn
    }
}
