<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Warga;
use App\Models\Rangking;
use Filament\Forms\Form;
use App\Models\Alternatif;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AlternatifResource\Pages;

class AlternatifResource extends Resource
{
    protected static ?string $model = Alternatif::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Perhitungan Bansos';

    public static function shouldRegisterNavigation(): bool // Sembunyiin dari navigasi
    {
        if (auth()->user()->can('view_bansos')) // string dalem can sesuain sama permission yang dibuat
            return true;
        else
            return false;
    }

    public static function form(Form $form): Form
    {
        $daftarWarga = Warga::pluck('nama_warga', 'id')->toArray();
        return $form
            ->schema([
                Select::make('alternatif')->required()->label('Nama Warga')
                    ->options(Warga::all()->pluck('nama_warga', 'id'))->searchable(),

                Select::make('kondisi_rumah')->required()->label('Kondisi Rumah')
                    ->options([
                        1 => 'Layak',
                        2 => 'Cukup Layak',
                        3 => 'Tidak Layak',
                    ]),

                Select::make('kelayakan')->required()->label('Kelayakan') //Sesuai persepsi admin
                    ->options([
                        1 => 'Tidak Layak',
                        2 => 'Cukup Layak',
                        3 => 'Layak',
                        4 => 'Sangat Layak',
                    ]),

                Select::make('status_pernikahan')->required()->label('Status Pernikahan')
                    ->options([
                        1 => 'Belum Menikah',
                        2 => 'Sudah Menikah',
                        3 => 'Cerai',
                    ]),
                Select::make('jumlah_anak')->required()->label('Jumlah Anak')
                    ->options([
                        1 => 'Anak 1',
                        2 => 'Anak 2',
                        3 => 'Anak 3',
                        4 => 'Anak 4',
                        5 => 'Anak lebih dari 4',
                    ]),
                Select::make('jumlah_tanggungan')->required()->label('Jumlah Tanggungan')
                    ->options([
                        1 => 'Tidak Ada',
                        2 => '1 - 2 Tanggungan',
                        3 => '3 - 4 Tanggungan',
                        4 => 'Lebih dari 4 Tanggungan',
                    ]),
                Select::make('umur_yang_bekerja')->required()->label('Umur Yang Bekerja')
                    ->options([
                        1 => '20 - 30 Tahun',
                        2 => '31 - 40 Tahun',
                        3 => '41 - 50 Tahun',
                        4 => 'Lebih dari 50 Tahun',
                    ]),
                Select::make('phk')->required()->label('PHK')
                    ->options([
                        1 => 'Tidak Sedang PHK',
                        2 => 'Sedang PHK',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('alternatif')->label('Nama Warga')->formatStateUsing(function ($state) {
                    $warga = Warga::find($state);
                    return $warga->nama_warga;
                }),
                TextColumn::make('warga.no_telepon')->label('Kondisi Rumah'),
                TextColumn::make('kondisi_rumah')->label('Kondisi Rumah')
                    ->formatStateUsing(function ($state) {
                        $kondisi_rumah = [
                            1 => 'Layak',
                            2 => 'Cukup Layak',
                            3 => 'Tidak Layak',
                        ];
                        return $kondisi_rumah[$state];
                    }),

                TextColumn::make('kelayakan')->label('Kelayakan')
                    ->formatStateUsing(function ($state) {
                        $kelayakan = [
                            1 => 'Tidak Layak',
                            2 => 'Cukup Layak',
                            3 => 'Layak',
                            4 => 'Sangat Layak',
                        ];
                        return $kelayakan[$state];
                    }),

                TextColumn::make('status_pernikahan')->label('Status Pernikahan')
                    ->formatStateUsing(function ($state) {
                        $status_pernikahan = [
                            1 => 'Belum Menikah',
                            2 => 'Sudah Menikah',
                            3 => 'Cerai',
                        ];
                        return $status_pernikahan[$state];
                    }),

                TextColumn::make('jumlah_anak')->label('Jumlah Anak')
                    ->formatStateUsing(function ($state) {
                        $jumlah_anak = [
                            1 => 'Anak 1',
                            2 => 'Anak 2',
                            3 => 'Anak 3',
                            4 => 'Anak 4',
                            5 => 'Anak lebih dari 4',
                        ];
                        return $jumlah_anak[$state];
                    }),

                TextColumn::make('jumlah_tanggungan')->label('Jumlah Tanggungan')
                    ->formatStateUsing(function ($state) {
                        $jumlah_tanggungan = [
                            1 => 'Tidak Ada',
                            2 => '1 - 2 Tanggungan',
                            3 => '3 - 4 Tanggungan',
                            4 => 'Lebih dari 4 Tanggungan',
                        ];
                        return $jumlah_tanggungan[$state];
                    }),

                TextColumn::make('umur_yang_bekerja')->label('Umur Yang Bekerja')
                    ->formatStateUsing(function ($state) {
                        $umur_yang_bekerja = [
                            1 => '20 - 30 Tahun',
                            2 => '31 - 40 Tahun',
                            3 => '41 - 50 Tahun',
                            4 => 'Lebih dari 50 Tahun',
                        ];
                        return $umur_yang_bekerja[$state];
                    }),

                TextColumn::make('phk')->label('PHK')
                    ->formatStateUsing(function ($state) {
                        $phk = [
                            1 => 'Tidak Sedang PHK',
                            2 => 'Sedang PHK',
                        ];
                        return $phk[$state];
                    }),
                TextColumn::make('rangking')->label('Rangking')
                    ->formatStateUsing(function ($state) {
                        $rangking = Rangking::where('alternatif_id', $state)->first();
                        return $rangking ? $rangking->rangking : '-';
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAlternatifs::route('/'),
            'create' => Pages\CreateAlternatif::route('/create'),
            'edit' => Pages\EditAlternatif::route('/{record}/edit'),
        ];
    }
}
