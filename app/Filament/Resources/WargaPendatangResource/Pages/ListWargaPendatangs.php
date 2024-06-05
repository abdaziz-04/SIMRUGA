<?php

namespace App\Filament\Resources\WargaPendatangResource\Pages;

use App\Filament\Resources\WargaPendatangResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWargaPendatangs extends ListRecords
{
    protected static string $resource = WargaPendatangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
