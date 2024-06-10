<?php

// namespace App\Filament\Widgets;

// use Filament\Widgets\StatsOverviewWidget as BaseWidget;
// use Filament\Widgets\StatsOverviewWidget\Card;
// use App\Models\SuratSekretaris;
// use App\Models\SuratWarga;
// use Illuminate\Support\Facades\Auth;

// class CardSuratOverview extends BaseWidget
// {
//     protected static ?string $pollingInterval = '5s';

//     public static function canView(): bool  
//     {
//         return Auth::user()->hasPermissionTo('view_surat_widget'); 
//     }

//     protected function getCards(): array
//     {
//         // Menghitung jumlah surat masuk dari SuratSekretaris
//         $jumlahSuratMasuk = SuratSekretaris::count();
        
//         // Menghitung jumlah surat keluar dari SuratWarga
//         $jumlahSuratKeluar = SuratWarga::count();

//         return [
//             Card::make('Surat Masuk', $jumlahSuratMasuk)
//                 ->url('admin/surat-sekretaris')
//                 ->color('primary')
//                 ->icon('heroicon-o-inbox')
//                 ->extraAttributes(['class' => 'hover-shadow']),
            
//             Card::make('Surat Keluar', $jumlahSuratKeluar)
//                 ->url('admin/surat-warga')
//                 ->color('secondary')
//                 ->icon('heroicon-o-envelope')
//                 ->extraAttributes(['class' => 'hover-shadow']),
//         ];
//     }
// }
