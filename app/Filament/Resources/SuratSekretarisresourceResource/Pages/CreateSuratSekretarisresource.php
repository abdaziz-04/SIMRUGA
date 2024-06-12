<?php

namespace App\Filament\Resources\SuratSekretarisresourceResource\Pages;

use App\Filament\Resources\SuratSekretarisresourceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateSuratSekretarisresource extends CreateRecord
{
    protected static string $resource = SuratSekretarisresourceResource::class;
    protected static ?string $navigationLabel = 'Arsipan Surat';

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
