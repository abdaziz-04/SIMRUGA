<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengeluaranResource\Pages;
use App\Filament\Resources\PengeluaranResource\RelationManagers;
use App\Models\Pengeluaran;
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
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\Split;
use Filament\Infolists\Components\Group;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Infolist;

class PengeluaranResource extends Resource
{
    protected static ?string $model = Pengeluaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-arrow-up';

    protected static ?string $navigationLabel = 'Pengeluaran Keuangan RW';

    public static function shouldRegisterNavigation(): bool // Sembunyiin dari navigasi
    {
        if (auth()->user()->can('view_pengeluaran_keuangan')) // string dalem can sesuain sama permission yang dibuat
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
                        TextInput::make('jenis_pengeluaran')->label('Jenis Pengeluaran')->required(),
                        DatePicker::make('tanggal')->label('Tanggal')->required(),
                        TextInput::make('jumlah_pengeluaran')->label('Jumlah Pengeluaran')->required(),
                        FileUpload::make('foto_struk')->label('Foto Struk')->nullable()->directory('struk')->visibility('public'),
                        TextInput::make('keterangan')->label('Keterangan'),
                    ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jenis_pengeluaran')->label('Jenis Pengeluaran')->searchable(),
                TextColumn::make('tanggal')->label('Tanggal')->searchable()->sortable()->badge()->date()->color('danger'),
                TextColumn::make('jumlah_pengeluaran')->label('Jumlah Pengeluaran'),
                ImageColumn::make('foto_struk')->label('Foto Struk')->height(50),
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
                                        TextEntry::make('jenis_pengeluaran')->label('Nama Pengeluaran'),
                                        TextEntry::make('tanggal')->label('Tanggal')->badge()->date()->color('success'),
                                    ]),
                                    Group::make([
                                        TextEntry::make('jumlah_pengeluaran')->label('Jumlah Pengeluaran'),
                                        TextEntry::make('keterangan')->label('Keterangan'),
                                    ]),
                                ]),
                            ImageEntry::make('foto_struk')
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
            'index' => Pages\ListPengeluarans::route('/'),
            'create' => Pages\CreatePengeluaran::route('/create'),
            'view' => Pages\ViewPengeluaran::route('/{record}'),
            'edit' => Pages\EditPengeluaran::route('/{record}/edit'),
        ];
    }
}
