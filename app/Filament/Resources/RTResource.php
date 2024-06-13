<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RTResource\Pages;
use App\Filament\Resources\RTResource\RelationManagers;
use App\Models\RT;
use App\Models\Warga;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;


class RTResource extends Resource
{
    protected static ?string $model = RT::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-asia-australia';
    protected static ?string $navigationLabel = 'Daftar RT';

    public static function getNavigationBadge(): ?string
    {
        // Menggunakan join untuk menghitung jumlah warga dengan id_rt tertentu
        $jumlah_rt = Warga::join('rt', 'warga.id_rt', '=', 'rt.id')
        ->whereNotNull('warga.id_rt') // Pastikan id_rt tidak null
        ->count();

        return $jumlah_rt;
    }

    public static function shouldRegisterNavigation(): bool // Sembunyiin dari navigasi
    {
        if(auth()->user()->can('view_daftar_rt')) // string dalem can sesuain sama permission yang dibuat
            return true;
        else
            return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nama_rt')
                            ->required(),
                        TextInput::make('alamat')
                            ->required(),
                        TextInput::make('ketua_rt')
                            ->required(),
                        TextInput::make('jumlah_anggota')
                            ->disabled()
                            ->default(0),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_rt')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('alamat')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('ketua_rt')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('jumlah_anggota')
                    ->label('Jumlah Warga')
                    ->getStateUsing(fn (RT $record) => $record->jumlah_anggota),
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
            'index' => Pages\ListRTS::route('/'),
            'create' => Pages\CreateRT::route('/create'),
            'edit' => Pages\EditRT::route('/{record}/edit'),
        ];
    }
}
