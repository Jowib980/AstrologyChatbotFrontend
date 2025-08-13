<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class RashiController extends Controller
{
    //

     public function show($route)
    {
        $apiUrl = config('services.backend_api_url');

        
        $response = Http::get($apiUrl . '/rashi/' . $route);

        if ($response->failed()) {
            abort(404, 'Rashi not found');
        }

        $rashi = $response->json();

        return view('pages.rashi', compact('rashi'));
    }

}
