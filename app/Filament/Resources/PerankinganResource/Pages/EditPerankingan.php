<?php

namespace App\Filament\Resources\PerankinganResource\Pages;

use App\Filament\Resources\PerankinganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerankingan extends EditRecord
{
    protected static string $resource = PerankinganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
