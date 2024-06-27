<?php

namespace App\Filament\Widgets;

use App\Models\Rangking;
use Filament\Tables;
use App\Models\PermintaanLayanan;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Widgets\TableWidget as BaseWidget;

class PenerimaBansosTableWidget extends BaseWidget
{
    protected static ?string $heading = 'Penerima Bansos';
    protected int | String | array $columnSpan = 'full';

    public static ?int $sort = 10;

    protected function getTableQuery(): Builder
    {
        return Rangking::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('warga.nama_warga')->label('Nama'),
                TextColumn::make('warga.nik')->label('NIK'),
                TextColumn::make('warga.alamat')->label('Alamat'),
                TextColumn::make('warga.tanggal_lahir')->label('Tanggal Lahir'),
                TextColumn::make('warga.no_telepon')->label('No Telepon'),
                TextColumn::make('moora_value')->visible(fn () => auth()->user()->hasRole('sekretaris', 'admin', 'ketua_rw', 'ketua_rt1', 'ketua_rt2', 'ketua_rt3')),
                TextColumn::make('rangking')->visible(fn () => auth()->user()->hasRole('sekretaris', 'admin', 'ketua_rw', 'ketua_rt1', 'ketua_rt2', 'ketua_rt3')),
        ];
    }
}
