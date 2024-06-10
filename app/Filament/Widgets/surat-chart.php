<?php

// namespace App\Filament\Widgets;

// use Filament\Widgets\ChartWidget;
// use App\Models\SuratSekretaris;   Pastikan namespace ini benar sesuai dengan struktur proyek Anda
// use App\Models\SuratWarga;       Pastikan namespace ini benar sesuai dengan struktur proyek Anda

// class SuratChart extends ChartWidget
// // {
// //     protected static ?string $heading = 'Surat';

// //     protected function getData(): array
// //     {
//         Menghitung jumlah surat masuk dari surat_sekretaris
//         $jumlahSuratMasuk = SuratSekretaris::count();
        
//         Menghitung jumlah surat keluar dari surat_Warga
//         $jumlahSuratKeluar = SuratWarga::count();

//         return [
//             'labels' => ['Surat Masuk', 'Surat Keluar'],
//             'datasets' => [
        //         [
        //             'label' => 'Jumlah Surat',
        //             'backgroundColor' => ['#4CAF50', '#FF6384'],
        //             'data' => [$jumlahSuratMasuk, $jumlahSuratKeluar],
        //         ],
        //     ],
        // ];
//     }

//     protected function getType(): string
//     {
//         return 'bar';
//     }
// }
