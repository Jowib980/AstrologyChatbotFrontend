<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KundaliController extends Controller
{
    public function submit(Request $request)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post('http://127.0.0.1:5000/api/kundali', [
            'name'   => $request->input('name'),
            'gender' => $request->input('gender'),
            'dob'    => $request->input('dob'),
            'tob'    => $request->input('tob'),
            'place'  => $request->input('place'),
        ]);

        if (!$response->successful()) {
            return back()->withErrors(['api' => 'Kundli generation failed.']);
        }

        $data = $response->json();

        return view('kundali_result', ['kundli' => $data]);
    }

    public function prediction(Request $request) {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post('http://127.0.0.1:5000/api/predict_character', [
            'name'   => $request->input('name'),
            'dob'    => $request->input('dob'),
            'tob'    => $request->input('tob'),
            'place'  => $request->input('place'),
        ]);

        if (!$response->successful()) {
            return back()->withErrors(['api' => 'Life Prediction.']);
        }

        $data = $response->json();

        return view('prediction-result', ['prediction' => $data]);
    }

    public function numerology(Request $request) {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post('http://127.0.0.1:5000/api/numerology', [
            'name'   => $request->input('name'),
            'dob'    => $request->input('dob'),
            'tob'    => $request->input('tob'),
            'place'  => $request->input('place'),
        ]);

        if (!$response->successful()) {
            return back()->withErrors(['api' => 'Numerology.']);
        }

        $data = $response->json();

        return view('numerology-result', ['data' => $data]);
    }
    
}