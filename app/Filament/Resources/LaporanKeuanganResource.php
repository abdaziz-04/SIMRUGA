<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\LaporanKeuangan;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LaporanKeuanganResource\Pages;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use App\Filament\Resources\LaporanKeuanganResource\RelationManagers;


class LaporanKeuanganResource extends Resource
{
    protected static ?string $model = LaporanKeuangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Laporan Keuangan RW';

    public static function shouldRegisterNavigation(): bool // Sembunyiin dari navigasi
    {
        if (auth()->user()->can('view_laporan_keuangan')) // string dalem can sesuain sama permission yang dibuat
            return true;
        else
            return false;
    }

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
                TextColumn::make('tanggal')->label('Tanggal')->sortable(),
                TextColumn::make('keterangan_pemasukan')->label('Keterangan Pemasukan')->searchable(),
                TextColumn::make('total_pemasukan')->label('Jumlah Pemasukan')->sortable(),
                TextColumn::make('keterangan_pengeluaran')->label('Keterangan Pengeluaran')->sortable(),
                TextColumn::make('total_pengeluaran')->label('Jumlah Pengeluaran')->sortable(),
                TextColumn::make('total_saldo')->label('Sisa Saldo')->sortable(),
            ])

            ->filters([
                //
            ])
            ->actions([
                // ViewAction::make(),
                // EditAction::make(),
                // DeleteAction::make(),
            ])
            ->bulkActions([
                ExportBulkAction::make()
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
            // 'create' => Pages\CreateLaporanKeuangan::route('/create'),
            // 'edit' => Pages\EditLaporanKeuangan::route('/{record}/edit'),
        ];
    }

    public static function indexQuery(Builder $query): Builder
    {
        return $query->with(['pemasukanKeuangan', 'pengeluaranKeuangan']);
    }
}
