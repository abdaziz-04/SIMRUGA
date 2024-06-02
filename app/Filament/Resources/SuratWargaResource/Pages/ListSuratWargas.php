<?php

namespace App\Filament\Resources\SuratWargaResource\Pages;

use App\Filament\Resources\SuratWargaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratWargas extends ListRecords
{
    protected static string $resource = SuratWargaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
