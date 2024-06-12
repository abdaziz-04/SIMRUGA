<?php

namespace App\Filament\Resources\PermintaanLayananResource\Pages;

use App\Filament\Resources\PermintaanLayananResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPermintaanLayanan extends ViewRecord
{
    protected static string $resource = PermintaanLayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
