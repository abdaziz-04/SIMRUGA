<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Warga;
use App\Models\RT;
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
use Illuminate\Support\Facades\Storage;


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

        $daftarRT = RT::pluck('nama_rt', 'id')->toArray();

        return $form->schema([
            TextInput::make('nama_warga')->label('Nama')->required(),
            TextInput::make('NIK')->label('NIK')->required()->unique(ignoreRecord: true),
            TextInput::make('alamat')->label('Alamat')->required(),
            TextInput::make('no_telepon')->label('No Telepon')->required(),
            Select::make('id_rt')
            ->label('RT')->options($daftarRT)
            ->required(),
            DatePicker::make('tanggal_lahir')->label('Tanggal Lahir')->required(),
            Select::make('jenis_kelamin')
                ->options([
                    'L' => 'Laki-laki',
                    'P' => 'Perempuan',
                ])->label('Jenis Kelamin')->required(),
            TextInput::make('pekerjaan')->label('Pekerjaan')->required(),
            FileUpload::make('foto_warga')
            ->label('Foto Warga')
            ->nullable()
            ->visibility('public'),
            Select::make('status_kepemilikan_rumah')
            ->options([
                'Milik Sendiri' => 'Milik Sendiri',
                'Sewa' => 'Sewa',
                'Kontrak' => 'Kontrak',
                'Tinggal Bersama Orang Tua' => 'Tinggal Bersama Orang Tua',
                'Dinas' => 'Dinas',
            ])
            ->label('Status Kepemilikan Rumah')->required(),
            Select::make('status_kawin')
            ->options([
                'Kawin' => 'Kawin',
                'Belum Kawin' => 'Belum Kawin',
            ])
            ->label('Status Perkawinan')->required(),
            Select::make('sumber_air_bersih')
            ->label('Sumber Air Bersih')
            ->options([
                'PDAM' => 'PDAM',
                'Sumur' => 'Sumur',
                'Mata Air' => 'Mata Air',
                'Sungai' => 'Sungai',
            ])
            ->required(),
            TextInput::make('jumlah_anggota_keluarga')->label('Jumlah Anggota Keluarga')->required(),
            TextInput::make('penghasilan')->label('Penghasilan')->required(),
            TextInput::make('tanggungan')->label('Tanggungan')->required(),
            Select::make('jenis_warga')->label('Jenis Warga')
            ->options([
                'Lokal' => 'Lokal',
                'Pendatang' => 'Pendatang',
            ])->required(),
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
        TextColumn::make('rt.nama_rt')->label('RT'),
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
