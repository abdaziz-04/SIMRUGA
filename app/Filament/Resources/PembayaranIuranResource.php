<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PembayaranIuranResource\Pages;
use App\Filament\Resources\PembayaranIuranResource\RelationManagers;
use App\Models\JenisIuran;
use App\Models\PembayaranIuran;
use App\Models\KK;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;


class PembayaranIuranResource extends Resource
{
    protected static ?string $model = PembayaranIuran::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?string $navigationLabel = 'Pembayaran Iuran';

    public static function shouldRegisterNavigation(): bool // Sembunyiin dari navigasi
    {
        if (auth()->user()->can('view_pembayaran_iuran')) // string dalem can sesuain sama permission yang dibuat
            return true;
        else
            return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    DatePicker::make('tanggal')->label('Tanggal Pembayaran'),
                    Select::make('id_kk')
                        ->label('Nama Kepala Keluarga')
                        ->options(KK::all()->pluck('nama_kepala_keluarga', 'id'))
                        ->searchable()
                        ->required(),
                    Select::make('id_iuran')
                        ->label('Jenis Iuran')
                        ->options(JenisIuran::all()->pluck('nama_iuran', 'id'))
                        ->searchable()
                        ->required(),
                    TextInput::make('jumlah_pembayaran')->label('Jumlah Pembayaran')
                ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tanggal')->label('Tanggal Pembayaran')->sortable(),
                TextColumn::make('kk.nama_kepala_keluarga')->label('Nama Kepala Keluarga')->searchable(),
                TextColumn::make('jenisIuran.nama_iuran')->label('Jenis Iuran')->searchable(),
                TextColumn::make('jumlah_pembayaran')->label('Jumlah Pembayaran')->searchable()->sortable(),
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
            'index' => Pages\ListPembayaranIurans::route('/'),
            'create' => Pages\CreatePembayaranIuran::route('/create'),
            'edit' => Pages\EditPembayaranIuran::route('/{record}/edit'),
        ];
    }
}
