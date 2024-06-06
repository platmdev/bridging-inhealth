<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PesertaController extends Controller
{
    public function peserta(){
        $peserta = Peserta::where('carabayar', 'asuransi')->get();
        return view('peserta.daftar-peserta')->with(compact('peserta'));
    }

    public function eligibilitas(){
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post(env('API_URL').'/api/poli', [
            "token" => "inh_3b1035950374b628904ff1af8123b889",
            "kodeprovider" => "1305R006",
            "keyword" => ""
        ]);

        // Handle the response
        if ($response->successful()) {
            $data = $response->json();
            return view('peserta.eligibilitas', ['poli' => $data]);
        } else {
            // Handle the error
            $error = $response->body();
        }
        return view('peserta.eligibilitas');
    }
}
