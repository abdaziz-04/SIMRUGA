<?php

namespace App\Filament\Resources\PengeluaranResource\Pages;

use App\Filament\Resources\PengeluaranResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreatePengeluaran extends CreateRecord
{
    protected static string $resource = PengeluaranResource::class;

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
