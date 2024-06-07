<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratSekretarisresourceResource\Pages;
use App\Filament\Resources\SuratSekretarisresourceResource\RelationManagers;
use App\Models\suratSekretaris;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\FileColumn; // Pastikan Anda mengimpor FileColumn
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuratSekretarisresourceResource extends Resource
{
    protected static ?string $model = suratSekretaris::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Arsipan Surat';
    // protected static ?string $navigationGroup = 'Sekretaris';

    
    public static function shouldRegisterNavigation(array $parameters = []): bool
    {
        if(auth()->user()->can('view_arsipan_surat')) // string dalem can sesuain sama permission yang dibuat
            return true;
        else
            return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('instansi')
                    ->label('Nama Instansi')
                    ->required(),
                TextInput::make('kegiatan')
                    ->label('Nama Kegiatan')
                    ->required(),
                FileUpload::make('file')
                    ->label('Upload File')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('instansi')
                    ->label('Nama Instansi'),
                TextColumn::make('kegiatan')
                    ->label('Nama Kegiatan'),
                TextColumn::make('created_at')
                    ->label('Tanggal Upload Surat')
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Tambahkan relation manager jika diperlukan
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSuratSekretarisresources::route('/'),
            'create' => Pages\CreateSuratSekretarisresource::route('/create'),
            'edit' => Pages\EditSuratSekretarisresource::route('/{record}/edit'),
        ];
    }
}
