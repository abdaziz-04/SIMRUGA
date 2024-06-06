<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalResource\Pages;
use App\Filament\Resources\JadwalResource\RelationManagers;
use App\Models\Jadwal;
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
use Filament\Forms\Components\DatePicker;

class JadwalResource extends Resource
{
    protected static ?string $model = Jadwal::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationLabel = 'Jadwal Pertemuan';

    public static function shouldRegisterNavigation(): bool // Sembunyiin dari navigasi
    {
        if (auth()->user()->can('view_jadwal_pertemuan')) // string dalem can sesuain sama permission yang dibuat
            return true;
        else
            return false;
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nama_pertemuan')->label('Nama Pertemuan')->required(),
                        DatePicker::make('tanggal_pertemuan')->label('Tanggal Pertemuan')->required(),
                        TextInput::make('keterangan_jadwal')->label('Keterangan')->required(),
                        TextInput::make('pihak_terlibat')->label('Pihak Terlibat')->required(),
                    ])->columns(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_pertemuan')->label('Nama Pertemuan')->searchable(),
                TextColumn::make('tanggal_pertemuan')->label('Tanggal Pertemuan'),
                TextColumn::make('keterangan_jadwal')->label('Keterangan Jadwal')->searchable(),
                TextColumn::make('pihak_terlibat')->label('Pihak Terlibat'),
            ])
            ->filters([
                //
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make()->visible(fn () => auth()->user()->hasRole('sekretaris', 'admin', 'ketua_rw', 'ketua_rt1', 'ketua_rt2', 'ketua_rt3')),
                DeleteAction::make()->visible(fn () => auth()->user()->hasRole('sekretaris', 'admin', 'ketua_rw', 'ketua_rt1', 'ketua_rt2', 'ketua_rt3')),
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
            'index' => Pages\ListJadwals::route('/'),
            'create' => Pages\CreateJadwal::route('/create'),
            'edit' => Pages\EditJadwal::route('/{record}/edit'),
        ];
    }
}
