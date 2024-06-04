<?php

namespace App\Filament\Resources\NormalisasiResource\Pages;

use App\Filament\Resources\NormalisasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNormalisasis extends ListRecords
{
    protected static string $resource = NormalisasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
