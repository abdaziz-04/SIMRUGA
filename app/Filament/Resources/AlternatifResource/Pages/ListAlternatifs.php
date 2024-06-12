<?php

namespace App\Filament\Resources\AlternatifResource\Pages;

use Filament\Actions;
use Filament\Pages\Actions\ButtonAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\AlternatifResource;

class ListAlternatifs extends ListRecords
{
    protected static string $resource = AlternatifResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getHeaderActions(): array
    {
        return [
            \EightyNine\ExcelImport\ExcelImportAction::make()
                ->color("primary"),
            Actions\CreateAction::make(),
            ButtonAction::make('Hapus Data')
                ->action('hapusData')
                ->color('danger')
                ->label('Hapus Data'),
        ];
    }
}
