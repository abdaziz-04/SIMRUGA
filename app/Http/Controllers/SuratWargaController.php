<?php

namespace App\Http\Controllers;

use App\Models\SuratWarga;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;

class SuratWargaController extends Controller
{
    public function download($id)
    {
        $surat = SuratWarga::findOrFail($id);
        $pdf = FacadePdf::loadView('surat_warga', compact('surat'));

        return $pdf->download('surat_warga_'.$surat->id.'.pdf');
    }
}
