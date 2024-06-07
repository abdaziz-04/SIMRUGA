<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $data_pengumuman= Pengumuman::latest()->paginate(4);
        return view(view:'index',data:compact('data_pengumuman'));
    }

    public function show($id)
    {
        
        $pengumuman = Pengumuman::findOrFail($id);
        // dd($pengumuman);
        // return view("Pengumuman",['pengumuman'=>$pengumuman]); 
        return view('pengumuman',compact('pengumuman'));
    }
}

