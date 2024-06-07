<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KartuKeluargaResource\Pages;
use App\Filament\Resources\KartuKeluargaResource\RelationManagers;
use App\Filament\Resources\KartuKeluargaResource\RelationManagers\WargaRelationManager;
use App\Models\KartuKeluarga;
use App\Models\KK;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class KartuKeluargaResource extends Resource
{
    protected static ?string $model = KK::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Kartu Keluarga';

    public static function shouldRegisterNavigation(): bool // Sembunyiin dari navigasi
    {
        if(auth()->user()->can('view_kartu_keluarga')) // string dalem can sesuain sama permission yang dibuat
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
                    TextInput::make('nama_kepala_keluarga')->label('Nama Kepala Keluarga')->required(),
                    TextInput::make('no_kk')->label('No KK')->required(),
                    Select::make('rt_rw')
                    ->options([
                        '001/009' => '01/09',
                        '002/009' => '02/09',
                        '003/009' => '03/09',
                    ])->label('RT/RW')->required(),
                    TextInput::make('alamat')->label('Alamat')->required(),
                ])->columns(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_kepala_keluarga')->label('Nama Kepala Keluarga')->searchable(),
                TextColumn::make('no_kk')->label('No KK'),
                TextColumn::make('rt_rw')->label('RT/RW'),
                TextColumn::make('alamat')->label('Alamat'),
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
            WargaRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKartuKeluargas::route('/'),
            'create' => Pages\CreateKartuKeluarga::route('/create'),
            'edit' => Pages\EditKartuKeluarga::route('/{record}/edit'),
        ];
    }
}
