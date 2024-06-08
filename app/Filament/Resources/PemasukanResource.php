<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PemasukanResource\Pages;
use App\Filament\Resources\PemasukanResource\RelationManagers;
use App\Models\Pemasukan;
use App\Models\PembayaranIuran;
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
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\Split;
use Filament\Infolists\Components\Group;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Infolist;

class PemasukanResource extends Resource
{
    protected static ?string $model = Pemasukan::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-arrow-down';
    protected static ?string $navigationLabel = 'Pemasukan Keuangan RW';

    public static function shouldRegisterNavigation(): bool // Sembunyiin dari navigasi
    {
        if (auth()->user()->can('view_pemasukan_keuangan')) // string dalem can sesuain sama permission yang dibuat
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
                        TextInput::make('jenis_pemasukan')->label('Jenis Pemasukan')->required(),
                        DatePicker::make('tanggal')->label('Tanggal')->required(),
                        TextInput::make('jumlah_pemasukan')->label('Jumlah Pemasukan')->required(),
                        TextInput::make('keterangan')->label('Keterangan'),
                    ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jenis_pemasukan')->label('Jenis Pemasukan')->searchable(),
                TextColumn::make('tanggal')->label('Tanggal')->searchable()->sortable()->badge()->date()->color('success'),
                TextColumn::make('jumlah_pemasukan')->label('Jumlah Pemasukan'),
                TextColumn::make('keterangan')->label('Keterangan'),
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
                                        TextEntry::make('jenis_pemasukan')->label('Nama Pemasukan'),
                                        TextEntry::make('tanggal')->label('Tanggal')->badge()->date()->color('success'),
                                    ]),
                                    Group::make([
                                        TextEntry::make('jumlah_pemasukan')->label('Jumlah Pemasukan'),
                                        TextEntry::make('keterangan')->label('Keterangan'),
                                    ]),
                                ])
                        ])
                    ])
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
            'index' => Pages\ListPemasukans::route('/'),
            'create' => Pages\CreatePemasukan::route('/create'),
            'view' => Pages\ViewPemasukan::route('/{record}'),
            'edit' => Pages\EditPemasukan::route('/{record}/edit'),
        ];
    }
}
