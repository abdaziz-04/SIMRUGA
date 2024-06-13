<?php

namespace App\Filament\Widgets;

use App\Models\Pengumuman;
use Filament\Tables;
use App\Models\PermintaanLayanan;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Widgets\TableWidget as BaseWidget;

class PermintaanLayananWidget extends BaseWidget
{
    protected static ?string $heading = 'Pengumuman';
    protected int | String | array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        return Pengumuman::query();
    }

    protected function getTableColumns(): array
    {
        return [
            ImageColumn::make('gambar')->label('Gambar'),
            TextColumn::make('nama_pengumuman')->label('Nama Pengumuman'),
            TextColumn::make('isi_pengumuman')->label('Isi Pengumuman'),
            TextColumn::make('tanggal_pengumuman')->label('Tanggal Pengumuman'),
        ];
    }
}
