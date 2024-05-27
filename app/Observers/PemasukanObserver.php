<?php

namespace App\Observers;

use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\LaporanKeuangan;

class PemasukanObserver
{
    public function created(Pemasukan $pemasukan)
    {
        $this->updateLaporanKeuangan($pemasukan->tanggal);
    }

    public function updated(Pemasukan $pemasukan)
    {
        $this->updateLaporanKeuangan($pemasukan->tanggal);
    }

    public function deleted(Pemasukan $pemasukan)
    {
        $this->updateLaporanKeuangan($pemasukan->tanggal);
    }

    protected function updateLaporanKeuangan($tanggal)
    {
        $totalPemasukan = Pemasukan::whereDate('tanggal', $tanggal)->sum('jumlah_pemasukan');
        $totalPengeluaran = Pengeluaran::whereDate('tanggal', $tanggal)->sum('jumlah_pengeluaran');

        $keteranganPemasukan = Pemasukan::whereDate('tanggal', $tanggal)
            ->pluck('keterangan')
            ->implode(', ');

        $laporan = LaporanKeuangan::firstOrNew(['tanggal' => $tanggal]);
        $laporan->total_pemasukan = $totalPemasukan;
        $laporan->total_pengeluaran = $totalPengeluaran;
        $laporan->total_saldo = $totalPemasukan - $totalPengeluaran;
        $laporan->keterangan_pemasukan = $keteranganPemasukan;
        $laporan->save();
    }
}

