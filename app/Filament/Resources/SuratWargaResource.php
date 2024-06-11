<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratWargaResource\Pages;
use App\Models\SuratWarga;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class SuratWargaResource extends Resource
{
    protected static ?string $model = SuratWarga::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Surat';

    public static function shouldRegisterNavigation(array $parameters = []): bool
    {
        if(auth()->user()->can('view_buat_surat_warga')) // string dalem can sesuain sama permission yang dibuat
            return true;
        else
            return false;
    }

    public static function getTitle(Model $record): string
    {
        return "Surat";
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('jenis_surat')
                    ->label('Jenis Surat')
                    ->required()
                    ->options([
                        'Kematian' => 'Surat Kematian',
                        'Pengantar' => 'Surat Pengantar',
                        'Tidak Mampu' => 'Surat Tidak Mampu',
                    ])
                    ->reactive()
                    ->afterStateUpdated(function (callable $set, $state) {
                        $user = Auth::user();

                        if ($state === 'Pengantar' || $state === 'Tidak Mampu') {
                            $set('nama_warga', $user->name);
                            $set('jenis_kelamin', $user->jenis_kelamin);
                            $set('NIK', $user->NIK);
                            $set('alamat', $user->alamat);
                            $set('tanggal_lahir', $user->tanggal_lahir);
                        }
                    }),
                Forms\Components\Fieldset::make('Form Surat')
                    ->schema(function (callable $get) {
                        $jenisSurat = $get('jenis_surat');

                        switch ($jenisSurat) {
                            case 'Kematian':
                                return [
                                    TextInput::make('nama_alm')
                                        ->label('Nama Lengkap')
                                        ->required(),
                                    TextInput::make('NIK_alm')
                                        ->label('NIK')
                                        ->required(),
                                    TextInput::make('alamat_alm')
                                        ->label('Alamat')
                                        ->required(),
                                    Select::make('jenis_kelamin_alm')
                                        ->label('Jenis Kelamin')
                                        ->required()
                                        ->options([
                                            'L' => 'Laki Laki',
                                            'P' => 'Perempuan',
                                        ]),
                                    TextInput::make('usia_alm')
                                        ->label('Usia')
                                        ->required(),
                                    DatePicker::make('tanggal_lahir_alm')
                                        ->label('Tanggal lahir')
                                        ->required(),
                                    DatePicker::make('waktu_kematian_alm')
                                        ->label('Tanggal Kematian')
                                        ->required(),
                                    TextInput::make('sebab_kematian_alm')
                                        ->label('Penyebab Kematian')
                                        ->required(),
                                    TextInput::make('tempat_kematian_alm')
                                        ->label('Tempat Kematian')
                                        ->required(),
                                ];
                            case 'Pengantar':
                                return [
                                    TextInput::make('tujuan_surat')
                                        ->label('Tujuan Kegiatan')
                                        ->required(),
                                    TextInput::make('nama_warga')
                                        ->label('Nama Lengkap')
                                        ->required(),
                                    Select::make('jenis_kelamin')
                                        ->label('Jenis Kelamin')
                                        ->options([
                                            'L' => 'Laki Laki',
                                            'P' => 'Perempuan',
                                        ])
                                        ->required(),
                                    DatePicker::make('tanggal_lahir')
                                        ->label('Tanggal Lahir')
                                        ->required(),
                                    TextInput::make('NIK')
                                        ->label('NIK')
                                        ->required(),
                                    TextInput::make('alamat')
                                        ->label('Alamat')
                                        ->required(),
                                ];
                            case 'Tidak Mampu':
                                return [
                                    TextInput::make('nama_warga')
                                        ->label('Nama Lengkap')
                                        ->required(),
                                    Select::make('jenis_kelamin')
                                        ->label('Jenis Kelamin')
                                        ->options([
                                            'L' => 'Laki Laki',
                                            'P' => 'Perempuan',
                                        ])
                                        ->required(),
                                    DatePicker::make('tanggal_lahir')
                                        ->label('Tanggal Lahir')
                                        ->required(),
                                    TextInput::make('NIK')
                                        ->label('NIK')
                                        ->required(),
                                    TextInput::make('alamat')
                                        ->label('Alamat')
                                        ->required(),
                                    TextInput::make('pekerjaan')
                                        ->label('Pekerjaan')
                                        ->required(),
                                ];
                            default:
                                return [];
                        }
                    })
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jenis_surat')
                    ->label('Jenis Surat'),
                TextColumn::make('created_at')
                    ->label('Tanggal Surat')
                    ->date(), 
            ])
            ->filters([
                // Add filters here if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('download_pdf')
                    ->label('Download PDF')
                    // ->icon('panels::widgets.filament-info.open-documentation-button')
                    ->url(fn ($record) => route('surat_warga.download', $record)) // Ubah rute sesuai kebutuhan
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListSuratWargas::route('/'),
            'create' => Pages\CreateSuratWarga::route('/create'),
            'edit' => Pages\EditSuratWarga::route('/{record}/edit'),
        ];
    }
}
