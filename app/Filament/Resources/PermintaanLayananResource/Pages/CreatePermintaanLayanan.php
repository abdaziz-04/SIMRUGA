<?php

namespace App\Filament\Resources\PermintaanLayananResource\Pages;

use App\Filament\Resources\PermintaanLayananResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePermintaanLayanan extends CreateRecord
{
    protected static string $resource = PermintaanLayananResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
