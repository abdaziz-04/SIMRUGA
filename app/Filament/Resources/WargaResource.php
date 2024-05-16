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

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Daftar Warga';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('nama')->label('Nama'),
            FileUpload::make('foto')->label('Foto'),
            TextInput::make('NIK')->label('NIK'),
            TextInput::make('rt_id')->label('RT ID'),
            TextInput::make('alamat')->label('Alamat'),
            Datepicker::make('tanggal_lahir')->label('Tanggal Lahir'),
            TextInput::make('gaji')->label('Gaji'),
            TextInput::make('tanggungan')->label('Tanggungan'),
            Select::make('jenis_kelamin')->options([
                'Laki-laki' => 'Laki-laki',
                'Perempuan' => 'Perempuan',
            ])->label('Jenis Kelamin'),
            TextInput::make('pekerjaan')->label('Pekerjaan'),
        ]);

    }

    public static function table(Table $table): Table
{
    return $table
    ->columns([
        TextColumn::make('nama')->label('Nama'),
        TextColumn::make('alamat')->label('Alamat'),
        TextColumn::make('tanggal_lahir')->label('Tanggal Lahir'),
        TextColumn::make('jenis_kelamin')->label('Jenis Kelamin'),
    ])
    ->filters([
        //
    ])
    ->actions([
        Tables\Actions\EditAction::make(),
        Tables\Actions\ViewAction::make(),
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
