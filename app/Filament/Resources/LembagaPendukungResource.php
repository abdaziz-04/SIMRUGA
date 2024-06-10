<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\LembagaPendukung;
use Filament\Infolists\Infolist;
use Filament\Infolists;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Infolists\Components\Grid;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\Group;
use Filament\Infolists\Components\Split;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Infolists\Components\ImageEntry;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LembagaPendukungResource\Pages;
use App\Filament\Resources\LembagaPendukungResource\RelationManagers;


class LembagaPendukungResource extends Resource
{
    protected static ?string $model = LembagaPendukung::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationLabel = 'Lembaga Pendukung';


    public static function shouldRegisterNavigation(): bool // Sembunyiin dari navigasi
    {
        if (auth()->user()->can('view_warga')) // string dalem can sesuain sama permission yang dibuat
            return true;
        else
            return false;
    }

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
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('lapor')
                    ->label('Lapor')
                    ->icon('heroicon-o-document')
                    ->url(fn (LembagaPendukung $record): string => $record->whatsappLink())
                    ->openUrlInNewTab(),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make()
                    ->schema([
                        Split::make([
                            Grid::make(2)
                                ->schema([
                                    Group::make([
                                        TextEntry::make('nama_lembaga'),
                                        TextEntry::make('kontak_lembaga'),
                                    ]),
                                    Group::make([
                                        TextEntry::make('deskripsi_lembaga'),
                                    ]),
                                ]),
                        ])->from('lg'),
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
            'view' => Pages\ViewLembagaPendukung::route('/{record}'),
            'edit' => Pages\EditLembagaPendukung::route('/{record}/edit'),
        ];
    }
}
