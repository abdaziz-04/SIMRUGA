<?php

namespace App\Filament\Resources\LembagaPendukungResource\Pages;

use App\Filament\Resources\LembagaPendukungResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLembagaPendukungs extends ListRecords
{
    protected static string $resource = LembagaPendukungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
