<?php

namespace App\Filament\Resources\PermintaanLayananResource\Pages;

use App\Filament\Resources\PermintaanLayananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditPermintaanLayanan extends EditRecord
{
    protected static string $resource = PermintaanLayananResource::class;

    protected function afterSave(): void
    {
        // Fetch the updated record
        $record = $this->record;
        
        // Send notification to the user
        $userPengaju = $record->user;
        Notification::make()
            ->success()
            ->title('Status Permintaan Layanan Telah Diubah')
            ->body("Status permintaan layanan Anda dengan ID #" . $record->id . " telah diubah menjadi: " . $record->status)
            ->sendTo($userPengaju);
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
