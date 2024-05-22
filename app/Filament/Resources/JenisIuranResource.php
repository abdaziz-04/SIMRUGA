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

class JenisIuranResource extends Resource
{
    protected static ?string $model = JenisIuran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                TextColumn::make('nama_iuran')->label('Nama Iuran'),
                TextColumn::make('jumlah_iuran')->label('Jumlah Iuran'),
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
            'index' => Pages\ListJenisIurans::route('/'),
            'create' => Pages\CreateJenisIuran::route('/create'),
            'edit' => Pages\EditJenisIuran::route('/{record}/edit'),
        ];
    }
}
