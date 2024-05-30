<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisIuranResource\Pages;
use App\Filament\Resources\JenisIuranResource\RelationManagers;
use App\Models\JenisIuran;
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
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;


class JenisIuranResource extends Resource
{
    protected static ?string $model = JenisIuran::class;

    protected static ?string $navigationIcon = 'heroicon-o-wallet';
    protected static ?string $navigationLabel = 'Jenis Iuran';
    protected static ?string $navigationGroup = 'Menu Bendahara';

    public static function shouldRegisterNavigation(): bool // Sembunyiin dari navigasi
    {
        if(auth()->user()->can('view_jenis_iuran')) // string dalem can sesuain sama permission yang dibuat
            return true;
        else
            return false;
    }

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
            // Grid::make()
            ->schema([
                TextInput::make('nama_iuran')->label('Nama Iuran')->required(),
                TextInput::make('jumlah_iuran')->label('Jumlah Iuran')->required(),
            ])->columns(1)
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_iuran')->label('Nama Iuran')->searchable(),
                TextColumn::make('jumlah_iuran')->label('Jumlah Iuran'),
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
            'index' => Pages\ListJenisIurans::route('/'),
            'create' => Pages\CreateJenisIuran::route('/create'),
            'edit' => Pages\EditJenisIuran::route('/{record}/edit'),
        ];
    }
}
