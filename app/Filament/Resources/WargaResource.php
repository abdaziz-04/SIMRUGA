<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Warga;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\WargaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WargaResource\RelationManagers;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;

class WargaResource extends Resource
{
    protected static ?string $model = Warga::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Daftar Warga';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function shouldRegisterNavigation(): bool // Sembunyiin dari navigasi
    {
        if(auth()->user()->can('view_warga')) // string dalem can sesuain sama permission yang dibuat
            return true;
        else
            return false;
    }


    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('nama_warga')->label('Nama')->required(),
            TextInput::make('NIK')->label('NIK')->required()->unique(),
            TextInput::make('alamat')->label('Alamat')->required(),
            TextInput::make('no_telepon')->label('No Telepon')->required(),
            TextInput::make('email')->label('Email')->required(),
            DatePicker::make('tanggal_lahir')->label('Tanggal Lahir')->required(),
            Select::make('jenis_kelamin')
                ->options([
                    'L' => 'Laki-laki',
                    'P' => 'Perempuan',
                ])->label('Jenis Kelamin')->required(),
            TextInput::make('status_kawin')->label('Status Kawin')->required(),
            TextInput::make('pekerjaan')->label('Pekerjaan')->required(),
            FileUpload::make('foto_warga')->label('Foto Warga')->nullable()->directory('warga')->visibility('public'),
            TextInput::make('transportasi')->label('Transportasi')->required(),
            TextInput::make('status_kepemilikan_rumah')->label('Status Kepemilikan Rumah')->required(),
            TextInput::make('status_perkawinan')->label('Status Perkawinan')->required(),
            TextInput::make('sumber_air_bersih')->label('Sumber Air Bersih')->required(),
            TextInput::make('penerangan_rumah')->label('Penerangan Rumah')->required(),
            TextInput::make('luas_bangunan')->label('Luas Bangunan')->required(),
            TextInput::make('pengeluaran_bulanan')->label('Pengeluaran Bulanan')->required(),
            TextInput::make('jumlah_anggota_keluarga')->label('Jumlah Anggota Keluarga')->required(),
            TextInput::make('penghasilan')->label('Penghasilan')->required(),
            TextInput::make('tanggungan')->label('Tanggungan')->required(),
            TextInput::make('jenis_warga')->label('Jenis Warga')->required(),
        ]);

    }

    public static function table(Table $table): Table
{
    return $table->columns([
        TextColumn::make('nama_warga')->label('Nama')->searchable(),
        TextColumn::make('tanggal_lahir')->label('Tanggal Lahir')->sortable(),
        TextColumn::make('jenis_kelamin')->label('Jenis Kelamin'),
        TextColumn::make('status_kawin')->label('Status Kawin'),
        TextColumn::make('pekerjaan')->label('Pekerjaan'),
    ])
    ->filters([
        //
    ])
    ->actions([
        Tables\Actions\ViewAction::make(),
        Tables\Actions\EditAction::make(),
        Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListWargas::route('/'),
            'create' => Pages\CreateWarga::route('/create'),
            'edit' => Pages\EditWarga::route('/{record}/edit'),
        ];
    }
}
