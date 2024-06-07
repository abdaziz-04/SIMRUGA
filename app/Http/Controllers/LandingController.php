<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Models\PengurusRW; // Import the PengurusRW model

class LandingController extends Controller
{
    public function index()
    {
        $pengurus = PengurusRW::all(); // Fetch all pengurus data from the database
        $data_pengumuman= Pengumuman::latest()->paginate(10);

        return view('index', compact('pengurus', 'data_pengumuman'));
    }

    public function show($id)
    {
        
        $pengumuman = Pengumuman::findOrFail($id);
        // dd($pengumuman);
        // return view("Pengumuman",['pengumuman'=>$pengumuman]); 
        return view('pengumuman',compact('pengumuman'));
    }
}
