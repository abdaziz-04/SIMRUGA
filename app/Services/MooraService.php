<?php

namespace App\Services;

use App\Models\Alternatif;
use App\Models\Rangking;

class MooraService
{
    public function calculateMoora()
    {
        // Ambil data dari tabel alternatif
        $alternatifs = Alternatif::all();

        // Bobot kriteria dengan nama asli
        $weights = [
            // Benefit
            'kondisi_rumah' => 0.15,
            'kelayakan' => 0.13,
            'status_pernikahan' => 0.13,
            'jumlah_anak' => 0.12,
            'jumlah_tanggungan' => 0.08,

            // Cost
            'umur_yang_bekerja' => -0.10,
            'phk' => -0.05,
        ];

        // Hitung nilai normalisasi
        $normalizedValues = $this->calculateNormalizedValues($alternatifs);

        // Hitung nilai MOORA
        $mooraValues = $this->calculateMooraValues($normalizedValues, $weights);

        // Hitung peringkat
        $rankings = $this->calculateRankings($mooraValues);

        // Simpan peringkat ke tabel rangkings
        $this->saveRankings($rankings);
    }

    private function calculateNormalizedValues($alternatifs)
    {
        $normalizedValues = [];
        $criteria = [
            'kondisi_rumah', 'kelayakan', 'status_pernikahan',
            'jumlah_anak', 'jumlah_tanggungan', 'umur_yang_bekerja', 'phk'
        ];

        // Hitung jumlah kuadrat nilai kriteria untuk setiap alternatif
        $squares = [];
        foreach ($alternatifs as $alternatif) {
            foreach ($criteria as $criterion) {
                $squares[$alternatif->id][$criterion] = pow($alternatif[$criterion], 2);
            }
        }

        // Hitung jumlah kuadrat untuk setiap kriteria
        $totalSquares = [];
        foreach ($criteria as $criterion) {
            $totalSquares[$criterion] = array_sum(array_column($squares, $criterion));
        }

        // Normalisasikan nilai kriteria untuk setiap alternatif
        foreach ($alternatifs as $alternatif) {
            $normalizedValues[$alternatif->id] = [];
            foreach ($criteria as $criterion) {
                $normalizedValues[$alternatif->id][$criterion] = $alternatif[$criterion] / sqrt($totalSquares[$criterion]);
            }
        }

        return $normalizedValues;
    }

    private function calculateMooraValues($normalizedValues, $weights)
    {
        $mooraValues = [];

        foreach ($normalizedValues as $alternatifId => $values) {
            $benefit = 0;
            $cost = 0;
            foreach ($values as $criterion => $normalizedValue) {
                if ($weights[$criterion] > 0) {
                    // Kriteria benefit
                    $benefit += $normalizedValue * $weights[$criterion];
                } else {
                    // Kriteria cost
                    $cost += $normalizedValue * $weights[$criterion];
                }
            }
            // Hitung nilai MOORA sebagai selisih antara total benefit dan total cost
            $mooraValues[$alternatifId] = $benefit - $cost;
        }

        return $mooraValues;
    }


    private function calculateRankings($mooraValues)
    {
        arsort($mooraValues);

        $rankings = [];
        $index = 1;
        foreach ($mooraValues as $alternatifId => $value) {
            $rankings[] = [
                'alternatif_id' => $alternatifId,
                'moora_value' => $value,
                'rangking' => $index,
            ];
            $index++;
        }

        return $rankings;
    }

    private function saveRankings($rankings)
    {
        // Hapus data sebelumnya di tabel rangkings
        Rangking::truncate();

        // Simpan peringkat ke tabel rangkings
        foreach ($rankings as $ranking) {
            Rangking::create($ranking);
        }
    }

    public function deleteData()
    {
        // Menghapus semua data dari tabel rangkings
        Rangking::truncate();
    }
}
