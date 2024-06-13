<?php

namespace App\Services;

use App\Models\Alternatif;
use App\Models\Rangking;

class MooraService
{
    public function calculateMoora()
    {
        // Hapus data sebelumnya di tabel rangkings
        Rangking::truncate();

        // Ambil data dari tabel alternatif
        $alternatifs = Alternatif::all();

        // Langkah optimisasi
        $alternatifs = $this->optimizeValues($alternatifs);

        // Bobot kriteria dengan nama asli
        $weights = [
            // Benefit
            'kondisi_rumah' => 0.37,
            'kelayakan' => 0.23,
            'status_pernikahan' => 0.16,
            'jumlah_anak' => 0.11,
            'jumlah_tanggungan' => 0.07,

            // Cost
            'umur_yang_bekerja' => 0.04,
            'phk' => 0.02,
        ];

        // Hitung nilai normalisasi
        $normalizedValues = $this->calculateNormalizedValues($alternatifs);

        // Hitung nilai Yi
        $yiValues = $this->calculateYiValues($alternatifs);

        // Hitung nilai MOORA
        $mooraValues = $this->calculateMooraValues($normalizedValues, $weights, $yiValues);

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
            $squares[$alternatif->id] = 0;
            foreach ($criteria as $criterion) {
                $squares[$alternatif->id] += pow($alternatif[$criterion], 2);
            }
        }

        // Hitung jumlah kuadrat untuk setiap kriteria
        $totalSquares = [];
        foreach ($criteria as $criterion) {
            $totalSquares[$criterion] = 0;
            foreach ($alternatifs as $alternatif) {
                $totalSquares[$criterion] += pow($alternatif[$criterion], 2);
            }
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

    private function optimizeValues($alternatifs)
    {
        return $alternatifs;
    }

    private function calculateYiValues($alternatifs)
    {
        $yiValues = [];
        $criteria = [
            'kondisi_rumah', 'kelayakan', 'status_pernikahan',
            'jumlah_anak', 'jumlah_tanggungan', 'umur_yang_bekerja', 'phk'
        ];

        foreach ($criteria as $criterion) {
            $maxValue = $alternatifs->max($criterion);
            $minValue = $alternatifs->min($criterion);
            $yiValues[$criterion] = $maxValue - $minValue;
        }

        return $yiValues;
    }

    private function calculateMooraValues($normalizedValues, $weights)
    {
        $mooraValues = [];

        foreach ($normalizedValues as $alternatifId => $values) {
            $value = 0;
            foreach ($values as $criterion => $normalizedValue) {
                $value += $normalizedValue * $weights[$criterion];
            }
            $mooraValues[$alternatifId] = $value;
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
        // Simpan peringkat ke tabel rangkings
        foreach ($rankings as $index => $ranking) {
            $ranking['id_warga'] = $index + 1; // Peringkat dimulai dari 1, bukan dari 0
            Rangking::create($ranking);
        }
    }
}
