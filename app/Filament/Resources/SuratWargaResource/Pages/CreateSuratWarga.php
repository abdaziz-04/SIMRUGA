<?php

namespace App\Filament\Resources\SuratWargaResource\Pages;

use App\Filament\Resources\SuratWargaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateSuratWarga extends CreateRecord
{
    protected static string $resource = SuratWargaResource::class;

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
