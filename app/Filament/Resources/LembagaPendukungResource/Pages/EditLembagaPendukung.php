<?php

namespace App\Filament\Resources\LembagaPendukungResource\Pages;

use App\Filament\Resources\LembagaPendukungResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLembagaPendukung extends EditRecord
{
    protected static string $resource = LembagaPendukungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
