<?php

namespace App\Filament\Resources\SuratSekretarisresourceResource\Pages;

use App\Filament\Resources\SuratSekretarisresourceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratSekretarisresources extends ListRecords
{
    protected static string $resource = SuratSekretarisresourceResource::class;
    
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
