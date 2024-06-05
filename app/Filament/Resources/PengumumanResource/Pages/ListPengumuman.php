<?php

namespace App\Filament\Resources\PengumumanResource\Pages;

use App\Filament\Resources\PengumumanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengumuman extends ListRecords
{
    protected static string $resource = PengumumanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(fn () => auth()->user()->hasRole('sekretaris', 'admin', 'ketua_rw', 'ketua_rt1', 'ketua_rt2', 'ketua_rt3')),
        ];
    }
}
