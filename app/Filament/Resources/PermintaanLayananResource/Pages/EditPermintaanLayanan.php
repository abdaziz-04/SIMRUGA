<?php

namespace App\Filament\Resources\PermintaanLayananResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Auth;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PermintaanLayananResource;

class EditPermintaanLayanan extends EditRecord
{
    protected static string $resource = PermintaanLayananResource::class;

    protected function getRedirectUrl(): string
    {

        // Mendapatkan detail dari record yang sedang diupdate
        $name = Auth::user()->name;
        $status = $this->record->status;
        $catatan = $this->record->catatan;
        $pemohon = $this->record->user_id;
        dump($pemohon);

        // Membuat dan mengirim notifikasi ke user yang mengajukan permintaan layanan
        Notification::make()
            ->success()
            ->title('Pengajuan anda sudah direspon oleh ' . $name)
            ->body("Status: \"$status\".<br> Catatan: \"$catatan\".")
            ->sendToDatabase($pemohon);

        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
