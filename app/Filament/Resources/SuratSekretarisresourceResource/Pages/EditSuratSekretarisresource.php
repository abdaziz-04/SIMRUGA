<?php

namespace App\Filament\Resources\SuratSekretarisresourceResource\Pages;

use App\Filament\Resources\SuratSekretarisresourceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratSekretarisresource extends EditRecord
{
    protected static string $resource = SuratSekretarisresourceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
