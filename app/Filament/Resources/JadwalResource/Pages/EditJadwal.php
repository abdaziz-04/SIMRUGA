<?php

namespace App\Filament\Resources\JadwalResource\Pages;

use App\Filament\Resources\JadwalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditJadwal extends EditRecord
{
    protected static string $resource = JadwalResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\DeleteAction::make(),
    //     ];
    // }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Data updated')
            ->body('The data has been saved successfully.');
    }
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
