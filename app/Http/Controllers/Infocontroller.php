<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Infocontroller extends Controller
{
    public function index()
    {
        $response = Http::get('https://data.covid19.go.id/public/api/prov.json');
        $response2 = Http::get('https://data.covid19.go.id/public/api/rs.json');
        $data = $response->json();
        $data['rujukan'] = $response2->json();
        return view('index', $data);
    }
}
