<?php

namespace App\Services;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Rangking;

class MooraService
{
    public function calculate(array $data): array
    {
        // 1. Normalisasi
        $normalisasi = $this->normalisasi($data);

        // 2. Optimisasi
        $optimisasi = $this->optimisasi($normalisasi);

        // 3. Perankingan
        $rangking = $this->rangking($optimisasi);

        // Simpan hasil perhitungan ke database
        foreach ($rangking as $key => $value) {
            Rangking::create([
                'alternatif' => $value['alternatif'],
                'skor' => $value['skor'],
                'rangking' => $key + 1,
            ]);
        }

        return $rangking;
    }

    private function normalisasi($data): array
    {
        $normalisasi = [];
        $criteria = Kriteria::all();

        foreach ($data['alternatif'] as $key => $alternatif) {
            $normalisasi[$key] = [];
            foreach ($criteria as $k => $criterion) {
                if ($criterion->jenis == 'benefit') {
                    $normalisasi[$key][$k] = $alternatif[$criterion->kode_kriteria] / max(array_column($data['alternatif'], $criterion->kode_kriteria));
                } else {
                    $normalisasi[$key][$k] = min(array_column($data['alternatif'], $criterion->kode_kriteria)) / $alternatif[$criterion->kode_kriteria];
                }
            }
        }

        return $normalisasi;
    }

    private function optimisasi($normalisasi): array
    {
        $optimisasi = [];
        $criteria = Kriteria::all();

        foreach ($normalisasi as $key => $alternatif) {
            $optimisasi[$key] = [];
            foreach ($criteria as $k => $criterion) {
                $optimisasi[$key][$k] = $alternatif[$k] * $criterion->bobot;
            }
        }

        return $optimisasi;
    }

    private function rangking($optimisasi): array
    {
        $rangking = [];

        foreach ($optimisasi as $key => $alternatif) {
            $rangking[$key] = [
                'alternatif' => $key + 1,
                'skor' => array_sum($alternatif),
            ];
        }

        usort($rangking, function ($a, $b) {
            return $b['skor'] - $a['skor'];
        });

        return $rangking;
    }
}
