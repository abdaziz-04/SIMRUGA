<?php

namespace App\Filament\Resources\JenisIuranResource\Pages;

use App\Filament\Resources\JenisIuranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisIuran extends EditRecord
{
    protected static string $resource = JenisIuranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
