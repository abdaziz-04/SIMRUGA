<?php

namespace App\Filament\Resources\PemasukanResource\Pages;

use App\Filament\Resources\PemasukanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditPemasukan extends EditRecord
{
    protected static string $resource = PemasukanResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\DeleteAction::make(),
    //     ];
    // }

    // protected function getSavedNotificationTitle(): ?string
    // {
    //     return 'Successfully Updated';
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
