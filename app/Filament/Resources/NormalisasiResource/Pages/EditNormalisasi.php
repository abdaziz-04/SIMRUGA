<?php

namespace App\Filament\Resources\NormalisasiResource\Pages;

use App\Filament\Resources\NormalisasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNormalisasi extends EditRecord
{
    protected static string $resource = NormalisasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
