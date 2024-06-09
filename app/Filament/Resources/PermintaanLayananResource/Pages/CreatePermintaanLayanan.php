<?php

namespace App\Filament\Resources\PermintaanLayananResource\Pages;

use App\Models\User;
use Filament\Actions;
use Illuminate\Support\Facades\Auth;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\PermintaanLayananResource;

class CreatePermintaanLayanan extends CreateRecord
{
    protected static string $resource = PermintaanLayananResource::class;

    protected function getRedirectUrl(): string
    {

        // Mendapatkan detail dari record yang sedang diupdate
        $name = Auth::user()->name;
        $sekretaris = User::find(2);


        // Membuat dan mengirim notifikasi ke user yang mengajukan permintaan layanan
        Notification::make()
            ->success()
            ->title('Pengajuan diajukan oleh ' . $name)
            ->body("CEK")
            ->sendToDatabase($sekretaris);


        return $this->getResource()::getUrl('index');
    }
}
