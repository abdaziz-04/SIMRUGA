<?php

namespace App\Filament\Resources\PembayaranIuranResource\Pages;

use App\Filament\Resources\PembayaranIuranResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreatePembayaranIuran extends CreateRecord
{
    protected static string $resource = PembayaranIuranResource::class;

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Data saved')
            ->body('The data has been saved successfully.');
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
