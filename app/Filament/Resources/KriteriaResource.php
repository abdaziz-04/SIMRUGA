<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kriteria;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\KriteriaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KriteriaResource\RelationManagers;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class KriteriaResource extends Resource
{
    protected static ?string $model = Kriteria::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Perhitungan Bansos';

    public static function shouldRegisterNavigation(): bool // Sembunyiin dari navigasi
    {
        if (auth()->user()->can('view_bansos')) // string dalem can sesuain sama permission yang dibuat
            return true;
        else
            return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kriteria')->required(),
                TextInput::make('bobot')->required(),
                Select::make('jenis')
                    ->options([
                        'Benefit' => 'Benefit',
                        'Cost' => 'Cost',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('kriteria'),
                TextColumn::make('bobot'),
                TextColumn::make('jenis'),

            ])
            ->filters([
                //
            ])
            ->actions([
                // EditAction::make(),
                // DeleteAction::make(),
            ])
            ->bulkActions([]);
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
            'index' => Pages\ListKriterias::route('/'),
            // 'create' => Pages\CreateKriteria::route('/create'),
            // 'view' => Pages\ViewKriterias::route('/{record}'),
            // 'edit' => Pages\EditKriteria::route('/{record}/edit'),
        ];
    }
}
