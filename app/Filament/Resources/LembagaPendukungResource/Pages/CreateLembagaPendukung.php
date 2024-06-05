<?php

namespace App\Filament\Resources\LembagaPendukungResource\Pages;

use App\Filament\Resources\LembagaPendukungResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLembagaPendukung extends CreateRecord
{
    protected static string $resource = LembagaPendukungResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
