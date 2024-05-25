<?php

namespace App\Filament\Resources\JenisIuranResource\Pages;

use App\Filament\Resources\JenisIuranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisIurans extends ListRecords
{
    protected static string $resource = JenisIuranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
