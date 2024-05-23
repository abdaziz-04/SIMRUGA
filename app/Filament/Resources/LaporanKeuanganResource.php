<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporanKeuanganResource\Pages;
use App\Filament\Resources\LaporanKeuanganResource\RelationManagers;
use App\Models\LaporanKeuangan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;

class LaporanKeuanganResource extends Resource
{
    protected static ?string $model = LaporanKeuangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Laporan Keuangan';
    protected static ?string $navigationGroup = 'Bendahara';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pemasukan_keuangan.tanggal')->label('Tanggal Pemasukan'),
                TextColumn::make('pemasukan_keuangan.jumlah_pemasukan')->label('Jumlah Pemasukan'),
                TextColumn::make('pengeluaran_keuangan.tanggal')->label('Tanggal Pengeluaran'),
                TextColumn::make('pengeluaran_keuangan.jumlah_pengeluaran')->label('Jumlah Pengeluaran'),
                TextColumn::make('total_saldo')->label('Sisa Saldo'),
            ])

            ->filters([
                //
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLaporanKeuangans::route('/'),
            'create' => Pages\CreateLaporanKeuangan::route('/create'),
            'edit' => Pages\EditLaporanKeuangan::route('/{record}/edit'),
        ];
    }
}
