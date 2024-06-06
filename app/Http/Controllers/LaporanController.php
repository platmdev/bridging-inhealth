<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LaporanController extends Controller
{
    public function rekapPoli(){
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
            return view('laporan.rekap-poli', ['poli' => $data]);
        } else {
            // Handle the error
            $error = $response->body();
        }
        return view('laporan.rekap-poli');
    }
}
