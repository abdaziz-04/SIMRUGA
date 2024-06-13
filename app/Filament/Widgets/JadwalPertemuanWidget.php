<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\JadwalResource;
use App\Models\Jadwal;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Auth; // Import Auth

class JadwalPertemuanWidget extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(JadwalResource::getEloquentQuery())
            ->columns([
                TextColumn::make('nama_pertemuan')->label('Nama Pertemuan')->searchable(),
                TextColumn::make('tanggal_pertemuan')->label('Tanggal Pertemuan'),
                TextColumn::make('keterangan_jadwal')->label('Keterangan Jadwal')->searchable(),
                TextColumn::make('pihak_terlibat')->label('Pihak Terlibat'),
            ]);
            // ->actions([
            //     Tables\Actions\ViewAction::make('edit')
            //         ->url(fn (Jadwal $record): string => JadwalResource::getUrl('edit', ['record' => $record])),
            // ]);
    }
}