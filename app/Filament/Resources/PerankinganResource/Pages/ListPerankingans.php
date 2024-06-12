<?php

namespace App\Filament\Resources\PerankinganResource\Pages;

use Filament\Actions;
use App\Services\MooraService;
use Filament\Pages\Actions\ButtonAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\PerankinganResource;
use Filament\Notifications\Notification;

class ListPerankingans extends ListRecords
{
    protected static string $resource = PerankinganResource::class;


    protected function getActions(): array
    {
        return [
            ButtonAction::make('Prediksi Penerima Bantuan')
                ->action('perangkingan')
                ->color('primary'),
        ];
    }

    public function perangkingan()
    {
        $service = new MooraService();
        $service->calculateMoora();

        // $this->notify('success', 'Berhasil normalisasi data.');
        Notification::make()
            ->success()
            ->title('Data Perankingan Berhasil diperbarui')
            // ->body('Hasil telah diperbarui.')
            ->send();
    }
    public function hapusData()
    {
        $service = new MooraService();
        $service->deleteData();

        // $this->notify('success', 'Berhasil hapus data.');
    }
}
