<?php

namespace App\Filament\Resources\LembagaPendukungResource\Pages;

use Filament\Actions;
use App\Models\LembagaPendukung;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\LembagaPendukungResource;

class ViewLembagaPendukung extends ViewRecord
{
    protected static string $resource = LembagaPendukungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('lapor')
                ->label('Lapor')
                ->url(fn (LembagaPendukung $record): string => $record->whatsappLink())
                ->openUrlInNewTab(), // Membuka tautan di tab baru
        ];
    }
}
