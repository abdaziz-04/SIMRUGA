<?php

namespace App\Filament\Resources\PembayaranIuranResource\Pages;

use App\Filament\Resources\PembayaranIuranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPembayaranIurans extends ListRecords
{
    protected static string $resource = PembayaranIuranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
