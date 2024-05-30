<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LembagaPendukungResource\Pages;
use App\Filament\Resources\LembagaPendukungResource\RelationManagers;
use App\Models\LembagaPendukung;
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
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;

class LembagaPendukungResource extends Resource
{
    protected static ?string $model = LembagaPendukung::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Lembaga Pendukung';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_lembaga')->label('Nama Lembaga')->required(),
                TextInput::make('kontak_lembaga')->label('No Telpon')->required(),
                TextInput::make('deskripsi_lembaga')->label('Deskripsi')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_lembaga')->label('Nama Lembaga'),
                TextColumn::make('kontak_lembaga')->label('No Telpon'),
                TextColumn::make('deskripsi_lembaga')->label('Deskripsi'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('lapor')
                    ->label('Lapor')
                    ->url(fn (LembagaPendukung $record): string => $record->whatsappLink())
                    ->openUrlInNewTab(), // Membuka tautan di tab baru
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
            'index' => Pages\ListLembagaPendukungs::route('/'),
            'create' => Pages\CreateLembagaPendukung::route('/create'),
            'edit' => Pages\EditLembagaPendukung::route('/{record}/edit'),
        ];
    }
}
