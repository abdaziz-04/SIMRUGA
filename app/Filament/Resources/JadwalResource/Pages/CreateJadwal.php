<?php

namespace App\Filament\Resources\JadwalResource\Pages;

use App\Filament\Resources\JadwalResource;
use Filament\Actions;
use App\Models\User;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class CreateJadwal extends CreateRecord
{
    protected static string $resource = JadwalResource::class;

    protected function getRedirectUrl(): string
    {
        $name = Auth::user()->name;
        $jadwal = $this->record->nama_pertemuan; 
        $tanggal = $this->record->tanggal_pertemuan; 
        $keterangan = $this->record->keterangan_jadwal;
        $pihak = $this->record->pihak_terlibat;

        // Simpan notifikasi ke database
        Notification::make()
            ->success()
            ->title('Jadwal Pertemuan dibuat oleh ' . $name)
            ->body("Jadwal Pertemuan \"$jadwal\" telah dibuat. <br> Tanggal Pertemuan: \"$tanggal\".<br> Keterangan: \"$keterangan\". <br> Pertemuan untuk: \"$pihak\" ")
            ->sendToDatabase(User::whereNot('id', auth()->user()->id)->get());

        // Kembalikan URL redirect
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
