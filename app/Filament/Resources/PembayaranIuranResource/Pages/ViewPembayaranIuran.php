<?php

namespace App\Filament\Resources\PembayaranIuranResource\Pages;

use App\Filament\Resources\PembayaranIuranResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPembayaranIuran extends ViewRecord
{
    protected static string $resource = PembayaranIuranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
