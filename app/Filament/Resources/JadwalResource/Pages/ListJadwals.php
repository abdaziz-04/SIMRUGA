<?php

namespace App\Filament\Resources\JadwalResource\Pages;

use App\Filament\Resources\JadwalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJadwals extends ListRecords
{
    protected static string $resource = JadwalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(fn () => !auth()->user()->hasRole('sekretaris', 'admin', 'ketua_rw', 'ketua_rt1', 'ketua_rt2', 'ketua_rt3')),
        ];
    }
}
