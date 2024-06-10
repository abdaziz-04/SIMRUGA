<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{

    public function index()
    {
        return view('chat');
    }


    public function interact(Request $request)
    {
        $input = $request->input('message');

        // Kirim permintaan ke API OpenAI
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer d5e54acc7f7b4b66b6204a85b160d847', // Ganti dengan kunci API Anda
        ])->post('https://api.openai.com/v1/completions', [
            'model' => 'text-davinci-003', // Ganti dengan model GPT yang Anda inginkan
            'prompt' => $input,
        ]);

        $reply = $response['choices'][0]['text'];

        return response()->json(['reply' => $reply]);
    }
}
