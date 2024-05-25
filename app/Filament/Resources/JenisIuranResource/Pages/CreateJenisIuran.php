<?php

namespace App\Filament\Resources\JenisIuranResource\Pages;

use App\Filament\Resources\JenisIuranResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateJenisIuran extends CreateRecord
{
    protected static string $resource = JenisIuranResource::class;

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
