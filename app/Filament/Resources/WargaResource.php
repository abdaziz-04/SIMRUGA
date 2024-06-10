<?php

namespace App\Filament\Resources;

use App\Models\RT;
use Filament\Forms;
use Filament\Tables;
use App\Models\Warga;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Select;
use Filament\Support\Enums\FontWeight;
use Filament\Infolists\Components\Card;
use Filament\Infolists\Components\Grid;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\Group;
use Filament\Infolists\Components\Split;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use App\Filament\Resources\WargaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WargaResource\RelationManagers;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;
use Ysfkaya\FilamentPhoneInput\Tables\PhoneColumn;
use Ysfkaya\FilamentPhoneInput\Infolists\PhoneEntry;
use Ysfkaya\FilamentPhoneInput\PhoneInputNumberType;

class WargaResource extends Resource
{
    protected static ?string $model = Warga::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Daftar Warga';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function shouldRegisterNavigation(): bool // Sembunyiin dari navigasi
    {
        if (auth()->user()->can('view_warga')) // string dalem can sesuain sama permission yang dibuat
            return true;
        else
            return false;
    }


    public static function form(Form $form): Form
    {

        $daftarRT = RT::pluck('nama_rt', 'id')->toArray();

        return $form->schema([
            TextInput::make('nama_warga')->label('Nama')->required(),
            TextInput::make('NIK')->label('NIK')->required()->unique(ignoreRecord: true),
            TextInput::make('alamat')->label('Alamat')->required(),
            PhoneInput::make('phone')->required(),
            Select::make('id_rt')
                ->label('RT')->options($daftarRT)
                ->required(),

            DatePicker::make('tanggal_lahir')->label('Tanggal Lahir')->required(),

            Select::make('jenis_kelamin')
                ->options([
                    'L' => 'Laki-laki',
                    'P' => 'Perempuan',
                ])->label('Jenis Kelamin')->required(),

            Select::make('agama')
                ->options([
                    'Islam' => 'Islam',
                    'Kristen' => 'Kristen',
                    'Hindu' => 'Hindu',
                    'Buddha' => 'Buddha',
                ])->label('Agama')->required(),

            FileUpload::make('foto_warga')
                ->label('Foto Warga')
                ->nullable()
                ->visibility('public'),

            Select::make('jenis_warga')->label('Jenis Warga')
                ->options([
                    'Lokal' => 'Lokal',
                    'Pendatang' => 'Pendatang',
                ])->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('nama_warga')->label('Nama')->searchable(),
            TextColumn::make('agama')->label('Agama')->searchable(),
            TextColumn::make('tanggal_lahir')->label('Tanggal Lahir')->sortable()->badge()->date()->color('success'),
            TextColumn::make('jenis_kelamin')->label('Jenis Kelamin')->formatStateUsing(function ($state) {
                return $state === 'L' ? 'Laki-laki' : 'Perempuan';
            }),
            TextColumn::make('rt.nama_rt')->label('RT'),
        ])
            ->filters([
                Filter::make('nama_rt')
                    ->form([
                        Select::make('rt_id')
                            ->relationship('rt', 'nama_rt')
                            ->label('RT'),
                    ])
                    ->query(function ($query, array $data) {
                        if ($data['rt_id']) {
                            $query->where('id_rt', $data['rt_id']);
                        }
                        return $query;
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    // public static function infolist(Infolist $infolist): Infolist
    // {
    //     return $infolist
    //         ->schema([

    //             Split::make([
    //                 Section::make([
    //                     TextEntry::make('nama_warga')
    //                         ->weight(FontWeight::Bold),
    //                     TextEntry::make('NIK')
    //                         ->label('NIK'),
    //                     TextEntry::make('alamat')
    //                         ->label('Alamat'),
    //                     TextEntry::make('tanggal_lahir')->label('Tanggal Lahir'),
    //                     TextEntry::make('jenis_kelamin')->label('Jenis Kelamin'),
    //                     TextEntry::make('agama')->label('Agama'),
    //                 ]),
    //                 // Section::make([
    //                 //     TextEntry::make('no_telepon')
    //                 //         ->label('No Telepon'),
    //                 //     TextEntry::make('rt.nama_rt')->label('RT'),
    //                 //     TextEntry::make('jenis_warga')->label('Jenis Warga'),
    //                 // ]),
    //                 Section::make([
    //                     ImageEntry::make('foto_warga')->label('Foto Warga')->defaultImageUrl(url('/gambar/placeholder.jpeg'))
    //                         ->size(300),
    //                 ])->grow(false),
    //             ])->from('lg')

    //             // Personal Information
    //             //     Card::make('Informasi Pribadi')
    //             //         ->schema([
    //             //             TextEntry::make('nama_warga')->label('Nama Warga'),
    //             //             TextEntry::make('NIK')->label('NIK'),
    //             //             TextEntry::make('alamat')->label('Alamat'),
    //             //             TextEntry::make('no_telepon')->label('No Telepon'),
    //             //             TextEntry::make('rt.nama_rt')->label('RT'),
    //             //
    //             //             TextEntry::make('jenis_warga')->label('Jenis Warga'),
    //             //         ]),

    //             //     // Demographics
    //             //     Card::make('Demografi')
    //             //         ->schema([
    //             //             TextEntry::make('tanggal_lahir')->label('Tanggal Lahir'),
    //             //             TextEntry::make('jenis_kelamin')->label('Jenis Kelamin'),
    //             //             TextEntry::make('agama')->label('Agama'),
    //             //         ]),
    //         ]);
    // }

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
                                        TextEntry::make('nama_warga'),
                                        TextEntry::make('NIK')->label('NIK'),
                                        TextEntry::make('agama'),
                                        TextEntry::make('alamat'),
                                        PhoneEntry::make('no_telepon')->displayFormat(PhoneInputNumberType::NATIONAL),
                                        TextEntry::make('rt.nama_rt'),
                                        TextEntry::make('jenis_warga')
                                        ->badge()
                                        
                                    ]),
                                    Group::make([
                                        ImageEntry::make('foto_warga')->size(300),
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
            'index' => Pages\ListWargas::route('/'),
            'create' => Pages\CreateWarga::route('/create'),
            'edit' => Pages\EditWarga::route('/{record}/edit'),
            'view' => Pages\ViewWarga::route('/{record}'),
        ];
    }
}
