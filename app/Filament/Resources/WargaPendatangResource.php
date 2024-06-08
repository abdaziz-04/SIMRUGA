<?php

namespace App\Filament\Resources;

use App\Models\RT;
use Filament\Forms;
use Filament\Tables;
use App\Models\Warga;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\WargaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WargaResource\RelationManagers;


class WargaPendatangResource extends Resource
{
    protected static ?string $model = Warga::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Daftar Warga Pendatang';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function shouldRegisterNavigation(): bool // Sembunyiin dari navigasi
    {
        if (auth()->user()->can('view_warga_pendatang')) // string dalem can sesuain sama permission yang dibuat
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

            Select::make('agama')
                ->options([
                    'Islam' => 'Islam',
                    'Kristen' => 'Kristen',
                    'Hindu' => 'Hindu',
                    'Buddha' => 'Buddha',
                ])->label('Agama')->required(),

            FileUpload::make('foto_warga')
                ->label('Foto Warga')
                ->nullable()
                ->visibility('public'),

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
            TextColumn::make('agama')->label('Agama')->searchable(),
            TextColumn::make('tanggal_lahir')->label('Tanggal Lahir')->sortable()->badge()->date()->color('success'),
            TextColumn::make('jenis_kelamin')->label('Jenis Kelamin')->formatStateUsing(function ($state) {
                return $state === 'L' ? 'Laki-laki' : 'Perempuan';
            }),
            TextColumn::make('rt.nama_rt')->label('RT'),
        ])
            ->filters([
                Filter::make('nama_rt')
                    ->form([
                        Select::make('rt_id')
                            ->relationship('rt', 'nama_rt')
                            ->label('RT'),
                    ])
                    ->query(function ($query, array $data) {
                        if ($data['rt_id']) {
                            $query->where('id_rt', $data['rt_id']);
                        }
                        return $query;
                    }),
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
