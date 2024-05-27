<?php

namespace App\Observers;

use App\Models\PembayaranIuran;
use App\Models\Pemasukan;

class PembayaranIuranObserver
{
    public function created(PembayaranIuran $pembayaranIuran)
    {
        $this->updatePemasukan($pembayaranIuran->tanggal);
    }

    public function updated(PembayaranIuran $pembayaranIuran)
    {
        $this->updatePemasukan($pembayaranIuran->tanggal);
    }

    public function deleted(PembayaranIuran $pembayaranIuran)
    {
        $this->updatePemasukan($pembayaranIuran->tanggal);
    }

    protected function updatePemasukan($tanggal)
    {
        $totalPembayaranIuran = PembayaranIuran::whereDate('tanggal', $tanggal)->sum('jumlah_pembayaran');

        $pemasukan = Pemasukan::firstOrNew(['tanggal' => $tanggal]);
        $pemasukan->jumlah_pemasukan = $totalPembayaranIuran;
        $pemasukan->jenis_pemasukan = 'iuran';
        $pemasukan->keterangan = 'iuran warga RW 9';
        $pemasukan->save();
    }
}