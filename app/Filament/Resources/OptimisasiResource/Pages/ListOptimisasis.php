<?php

namespace App\Filament\Resources\OptimisasiResource\Pages;

use App\Filament\Resources\OptimisasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOptimisasis extends ListRecords
{
    protected static string $resource = OptimisasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
