<?php

namespace App\Observers;

use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\LaporanKeuangan;

class PengeluaranObserver
{
    public function created(Pengeluaran $pengeluaran)
    {
        $this->updateLaporanKeuangan($pengeluaran->tanggal);
    }

    public function updated(Pengeluaran $pengeluaran)
    {
        $this->updateLaporanKeuangan($pengeluaran->tanggal);
    }

    public function deleted(Pengeluaran $pengeluaran)
    {
        $this->updateLaporanKeuangan($pengeluaran->tanggal);
    }

    protected function updateLaporanKeuangan($tanggal)
    {
        $totalPemasukan = Pemasukan::whereDate('tanggal', $tanggal)->sum('jumlah_pemasukan');
        $totalPengeluaran = Pengeluaran::whereDate('tanggal', $tanggal)->sum('jumlah_pengeluaran');

        $keteranganPengeluaran = Pengeluaran::whereDate('tanggal', $tanggal)
            ->pluck('keterangan')
            ->implode(', ');

        $laporan = LaporanKeuangan::firstOrNew(['tanggal' => $tanggal]);
        $laporan->keterangan_pengeluaran = $keteranganPengeluaran;
        $laporan->total_pemasukan = $totalPemasukan;
        $laporan->total_pengeluaran = $totalPengeluaran;
        $laporan->total_saldo = $totalPemasukan - $totalPengeluaran;
        $laporan->save();
    }
}