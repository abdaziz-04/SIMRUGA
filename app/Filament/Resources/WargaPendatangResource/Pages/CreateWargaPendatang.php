<?php

namespace App\Filament\Resources\WargaPendatangResource\Pages;

use App\Filament\Resources\WargaPendatangResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWargaPendatang extends CreateRecord
{
    protected static string $resource = WargaPendatangResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
