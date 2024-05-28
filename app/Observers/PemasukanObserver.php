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
    // Ambil data pemasukan sebelum tanggal tertentu
    $totalPemasukanSebelumTanggal = Pemasukan::whereDate('tanggal', '<', $tanggal)->sum('jumlah_pemasukan');

    // Ambil data pengeluaran sebelum tanggal tertentu
    $totalPengeluaranSebelumTanggal = Pengeluaran::whereDate('tanggal', '<', $tanggal)->sum('jumlah_pengeluaran');

    // Hitung total pemasukan pada tanggal tertentu
    $totalPemasukanHariIni = Pemasukan::whereDate('tanggal', $tanggal)->sum('jumlah_pemasukan');

    // Hitung total pengeluaran pada tanggal tertentu
    $totalPengeluaranHariIni = Pengeluaran::whereDate('tanggal', $tanggal)->sum('jumlah_pengeluaran');

    // Hitung saldo sebelum tanggal pemasukan
    $saldoSebelumPemasukan = $totalPemasukanSebelumTanggal - $totalPengeluaranSebelumTanggal;

    // Hitung total saldo setelah memperbarui pemasukan
    $totalSaldoSetelahPemasukan = $saldoSebelumPemasukan + $totalPemasukanHariIni - $totalPengeluaranHariIni;

    // Ambil keterangan pemasukan pada tanggal tertentu
    $keteranganPemasukan = Pemasukan::whereDate('tanggal', $tanggal)->pluck('keterangan')->implode(', ');

    // Simpan atau perbarui data laporan keuangan
    $laporan = LaporanKeuangan::firstOrNew(['tanggal' => $tanggal]);
    $laporan->total_pemasukan = $totalPemasukanHariIni;
    $laporan->total_pengeluaran = $totalPengeluaranHariIni;
    $laporan->total_saldo = $totalSaldoSetelahPemasukan;
    $laporan->keterangan_pemasukan = $keteranganPemasukan;
    $laporan->save();
}

}

