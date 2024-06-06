<?php

namespace App\Filament\Resources\WargaPendatangResource\Pages;

use App\Filament\Resources\WargaPendatangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWargaPendatang extends EditRecord
{
    protected static string $resource = WargaPendatangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
