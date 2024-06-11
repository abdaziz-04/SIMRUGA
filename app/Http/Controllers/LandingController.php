<?php

namespace App\Http\Controllers;

use App\Models\KK;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Models\PengurusRW; // Import the PengurusRW model
use App\Models\RT;
use App\Models\Warga;

class LandingController extends Controller
{
    public function index()
    {
        $pengurus = PengurusRW::all(); // Fetch all pengurus data from the database
        $data_pengumuman = Pengumuman::latest()->paginate(3);
        $jumlahWarga = Warga::all();
        $jumlahKK = KK::all();
        $jumlahRT = RT::all();

        $lastWarga = $jumlahWarga->count();
        $lastKK = $jumlahKK->count()/2;
        $lastRT = $jumlahRT->count();
        return view('landingPage.index', compact('pengurus', 'data_pengumuman','lastWarga','lastRT','lastKK'));
    }

    public function show($id)
    {

        $pengumuman = Pengumuman::findOrFail($id);
        return view('pengumuman', compact('pengumuman'));
    }
}