<?php

namespace App\Filament\Resources\PermintaanLayananResource\Pages;

use App\Filament\Resources\PermintaanLayananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPermintaanLayanans extends ListRecords
{
    protected static string $resource = PermintaanLayananResource::class;


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Ajukan Layanan')->visible(fn () => !auth()->user()->hasRole('sekretaris')),
        ];
    }
}
