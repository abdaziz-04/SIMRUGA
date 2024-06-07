<?php

namespace App\Filament\Resources;

use View;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\PermintaanLayanan;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PermintaanLayananResource\Pages;
use App\Filament\Resources\PermintaanLayananResource\RelationManagers;
use Filament\Tables\Columns\ImageColumn;
use Filament\Notifications\Notification;

class PermintaanLayananResource extends Resource
{
    protected static ?string $model = PermintaanLayanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-stack';
    protected static ?string $navigationLabel = 'Permintaan Layanan';

    public static function getNavigationBadge(): ?string
    {
        if (auth()->user()->hasRole('sekretaris')) {
            return static::getModel()::count();
        } else {
            return static::getModel()::where('Nama Pengaju', auth()->user()->name)->count();
        }
    }

    public static function shouldRegisterNavigation(): bool // Sembunyiin dari navigasi
    {
        if (auth()->user()->can('view_layanan')) // string dalem can sesuain sama permission yang dibuat
            return true;
        else
            return false;
    }


    public static function form(Form $form): Form
    {

        $layananRW = [
            'Kebersihan Lingkungan',
            'Permintaan Infrastruktur',
            'Kerusakan Infrastruktur',
            'Lainnya',
        ];

        $options = array_combine($layananRW, $layananRW);


        return $form
            ->schema([
                TextInput::make('Nama Pengaju')->default(auth()->user()->name),
                Select::make('Tipe Layanan')
                    ->options($options),
                Textarea::make('deskripsi'),
                FileUpload::make('berkas')->label('Unggah Berkas')->visibility('public'),
            ]);
    }

    public static function table(Table $table): Table
    {
        $query = static::getModel()::query();

        // If the authenticated user is not a secretary, filter records based on the user's name
        if (!auth()->user()->hasRole('sekretaris')) {
            $query->where('Nama Pengaju', auth()->user()->name);
        }

        return $table
            ->query($query)
            ->columns([
                TextColumn::make('Nama Pengaju'),
                TextColumn::make('Tipe Layanan'),
                BadgeColumn::make('status')
                    ->colors([
                        'danger' => 'ditolak',
                        'warning' => 'pending',
                        'success' => 'selesai',
                        'primary' => 'proses',
                    ]),
                TextColumn::make('deskripsi'),
                TextColumn::make('catatan')->visible(fn () => auth()->user()->hasRole('warga')),
                ImageColumn::make('berkas'),
                TextColumn::make('created_at')->dateTime()->label('Dibuat Pada'),
            ])
            ->filters([
                // Action::make('status')
                //     ->label('Status')
                //     ->form([
                //         Select::make('status')
                //             ->options([
                //                 'pending' => 'Pending',
                //                 'proses' => 'Diproses',
                //                 'ditolak' => 'Ditolak',
                //                 'selesai' => 'Selesai',
                //             ])
                //             ->required(),
                //     ])
            ])
            ->actions([
                ViewAction::make()->visible(fn () => auth()->user()->hasRole('sekretaris')),
                EditAction::make()->visible(fn () => auth()->user()->hasRole('warga')),
                Action::make('ubahStatus')
                    ->label('Ubah Status')
                    ->form([
                        Select::make('status')
                            ->options([
                                'pending' => 'Pending',
                                'proses' => 'Diproses',
                                'ditolak' => 'Ditolak',
                                'selesai' => 'Selesai',
                            ])
                            ->required(),
                        Textarea::make('catatan')->label('Catatan'),
                    ])
                    ->action(function (PermintaanLayanan $record, array $data): void {
                        $record->status = $data['status'];
                        $record->catatan = $data['catatan']; // Simpan catatan yang diberikan oleh sekretaris
                        $record->save();

                        // Kirim notifikasi ke pengaju
                        $userPengaju = $record->user;
                        Notification::make()
                            ->success()
                            ->title('Status Permintaan Layanan Telah Diubah')
                            ->body("Status permintaan layanan Anda dengan ID #" . $record->id . " telah diubah menjadi: " . $data['status'])
                            ->sendTo($userPengaju);
                    })
                    ->visible(fn () => auth()->user()->hasRole('sekretaris')),
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

    protected function beforeSave($record, Forms\Form $form)
    {
        // Jika user_id belum diisi (kemungkinan field tidak ditampilkan kepada pengguna),
        // maka isi user_id dengan ID pengguna yang sedang login
        if (!$record->user_id) {
            $record->user_id = auth()->id();
        }
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPermintaanLayanans::route('/'),
            'create' => Pages\CreatePermintaanLayanan::route('/create'),
            'edit' => Pages\EditPermintaanLayanan::route('/{record}/edit'),
        ];
    }
}
