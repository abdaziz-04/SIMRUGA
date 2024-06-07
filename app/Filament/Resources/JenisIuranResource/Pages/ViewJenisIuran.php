<?php

namespace App\Filament\Resources\JenisIuranResource\Pages;

use App\Filament\Resources\JenisIuranResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJenisIuran extends ViewRecord
{
    protected static string $resource = JenisIuranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
