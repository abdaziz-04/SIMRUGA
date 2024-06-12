<?php

namespace App\Filament\Resources\PermintaanLayananResource\Pages;

use App\Models\User;
use Filament\Actions;
use Illuminate\Support\Facades\Auth;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PermintaanLayananResource;
use App\Models\PermintaanLayanan;

class EditPermintaanLayanan extends EditRecord
{
    protected static string $resource = PermintaanLayananResource::class;

    protected function getRedirectUrl(): string
    {
        // Mendapatkan detail dari record yang sedang diupdate
        // $name = Auth::user()->name;
        // $status = $this->record->status;
        // $catatan = $this->record->catatan;
        // $sekretaris = User::find(2);
        // $pemohon = User::find($this->record->user_id); // Mencari instance model pengguna berdasarkan ID

        // // if ($issekretaris) {
        // // Membuat dan mengirim notifikasi ke user yang mengajukan permintaan layanan
        // Notification::make()
        //     ->success()
        //     ->title('Pengajuan sudah di edit oleh ' . $name)
        //     ->body("Status: \"$status\".<br> Catatan: \"$catatan\".")
        //     ->sendToDatabase($pemohon); // Menggunakan instance model pengguna
        // } else {
        //     $sekretaris = User::find(2);
        //     Notification::make()
        //         ->success()
        //         ->title('Pengajuan sudah di edit ' . $name)
        //         ->body("Status: \"$status\".<br> Catatan: \"$catatan\".")
        //         ->sendToDatabase($sekretaris);
        // }

        return $this->getResource()::getUrl('index');
    }


    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
