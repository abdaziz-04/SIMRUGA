<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RTResource\Pages;
use App\Filament\Resources\RTResource\RelationManagers;
use App\Models\RT;
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

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Daftar RT';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('level_id'),
                        TextInput::make('username'),
                        TextInput::make('nama'),
                        TextInput::make('password'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('rt_id'),
                TextColumn::make('nama_RT'),
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
