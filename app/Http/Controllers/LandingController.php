<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengurusRW; // Import the PengurusRW model

class LandingController extends Controller
{
    public function index()
    {
        $pengurus = PengurusRW::all(); // Fetch all pengurus data from the database
        return view('index', ['pengurus' => $pengurus]); // Pass pengurus data to the view
    }
}
