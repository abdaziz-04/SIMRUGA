<?php

namespace App\Filament\Resources\SuratWargaResource\Pages;

use App\Filament\Resources\SuratWargaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratWarga extends EditRecord
{
    protected static string $resource = SuratWargaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
