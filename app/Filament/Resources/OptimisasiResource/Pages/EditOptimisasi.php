<?php

namespace App\Filament\Resources\OptimisasiResource\Pages;

use App\Filament\Resources\OptimisasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOptimisasi extends EditRecord
{
    protected static string $resource = OptimisasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
