<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengumumanResource\Pages;
use App\Models\Pengumuman;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PengumumanResource extends Resource
{
    protected static ?string $model = Pengumuman::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Pengumuman';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gambar')->label('Gambar')->nullable()->directory('gambar')->visibility('public'),
                TextInput::make('nama_pengumuman')->label('Nama Pengumuman')->required(),
                TextArea::make('isi_pengumuman')->label('Isi Pengumuman')->required(),
                DatePicker::make('tanggal_pengumuman')->label('Tanggal Pengumuman')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')->label('Gambar'),
                TextColumn::make('nama_pengumuman')->label('Nama Pengumuman'),
                TextColumn::make('isi_pengumuman')->label('Isi Pengumuman'),
                TextColumn::make('tanggal_pengumuman')->label('Tanggal Pengumuman'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->visible(fn () => auth()->user()->hasRole('sekretaris', 'admin', 'ketua_rw', 'ketua_rt1', 'ketua_rt2', 'ketua_rt3')),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ])->visible(fn () => auth()->user()->hasRole('sekretaris', 'admin', 'ketua_rw', 'ketua_rt1', 'ketua_rt2', 'ketua_rt3')),
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
            'index' => Pages\ListPengumuman::route('/'),
            'create' => Pages\CreatePengumuman::route('/create'),
            'edit' => Pages\EditPengumuman::route('/{record}/edit'),
        ];
    }
}
