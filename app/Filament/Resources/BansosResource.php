<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BansosResource\Pages;
use App\Filament\Resources\BansosResource\RelationManagers;
use App\Models\Bansos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BansosResource extends Resource
{
    protected static ?string $model = Bansos::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';
    protected static ?string $navigationLabel = 'Bantuan Sosial';
    protected static ?string $navigationGroup = 'Sekretaris';
    protected static ?int $navigationSort = 1;

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
                //
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
            'index' => Pages\ListBansos::route('/'),
            'create' => Pages\CreateBansos::route('/create'),
            'edit' => Pages\EditBansos::route('/{record}/edit'),
        ];
    }
}
