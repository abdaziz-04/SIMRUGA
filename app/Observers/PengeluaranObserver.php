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
    // Ambil data pemasukan sebelum tanggal tertentu
    $totalPemasukanSebelumTanggal = Pemasukan::whereDate('tanggal', '<', $tanggal)->sum('jumlah_pemasukan');

    // Ambil data pengeluaran sebelum tanggal tertentu
    $totalPengeluaranSebelumTanggal = Pengeluaran::whereDate('tanggal', '<', $tanggal)->sum('jumlah_pengeluaran');

    // Hitung saldo sebelum tanggal pemasukan
    $saldoSebelumPemasukan = $totalPemasukanSebelumTanggal - $totalPengeluaranSebelumTanggal;

    // Hitung total pemasukan pada tanggal tertentu
    $totalPemasukanHariIni = Pemasukan::whereDate('tanggal', $tanggal)->sum('jumlah_pemasukan');

    // Hitung total pengeluaran pada tanggal tertentu
    $totalPengeluaranHariIni = Pengeluaran::whereDate('tanggal', $tanggal)->sum('jumlah_pengeluaran');

    // Hitung saldo sebelum pengeluaran hari ini
    $saldoSebelumPengeluaran = $saldoSebelumPemasukan + $totalPemasukanHariIni - $totalPengeluaranHariIni;

    // Ambil keterangan pengeluaran pada tanggal tertentu
    $keteranganPengeluaran = Pengeluaran::whereDate('tanggal', $tanggal)->pluck('keterangan')->implode(', ');

    // Simpan atau perbarui data laporan keuangan
    $laporan = LaporanKeuangan::firstOrNew(['tanggal' => $tanggal]);
    $laporan->total_pemasukan = $totalPemasukanHariIni;
    $laporan->total_pengeluaran = $totalPengeluaranHariIni;
    $laporan->total_saldo = $saldoSebelumPengeluaran;
    $laporan->keterangan_pengeluaran = $keteranganPengeluaran;
    $laporan->save();
}

}