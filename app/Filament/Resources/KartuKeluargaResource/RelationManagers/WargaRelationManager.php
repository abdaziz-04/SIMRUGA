<?php

namespace App\Filament\Resources\KartuKeluargaResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use App\Models\Warga;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;

class WargaRelationManager extends RelationManager
{
    protected static string $relationship = 'Warga';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
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

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('NIK'),
                TextColumn::make('nama_warga'),
                TextColumn::make('tanggal_lahir'),
                TextColumn::make('jenis_kelamin'),
                TextColumn::make('status_kawin'),
                TextColumn::make('pekerjaan'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
