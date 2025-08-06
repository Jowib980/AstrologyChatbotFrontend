<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KundaliController extends Controller
{

    private function callApi(Request $request, string $endpoint, array $fields, string $view, string $errorKey, string $valueKey = null)
    {
        $payload = [];
        foreach ($fields as $field) {
            $payload[$field] = $request->input($field);
        }

        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post("http://127.0.0.1:5000/api/{$endpoint}", $payload);

        if (!$response->successful()) {
            return back()->withErrors([$errorKey => ucfirst($errorKey) . ' request failed.']);
        }

        $jsonData = $response->json();
        $data = $valueKey ? ($jsonData[$valueKey] ?? null) : $jsonData;

        return view($view, ['data' => $data]);
    }


    public function submit(Request $request)
    {
        return $this->callApi(
            $request,
            'kundali',
            ['name', 'gender', 'dob', 'tob', 'place'],
            'services.kundali_result',
            'kundali'
        );
    }

    public function prediction(Request $request)
    {
        return $this->callApi(
            $request,
            'predict_character',
            ['name', 'dob', 'tob', 'place'],
            'services.prediction-result',
            'prediction'
        );
    }

    public function numerology(Request $request)
    {
        return $this->callApi(
            $request,
            'numerology',
            ['name', 'dob', 'tob', 'place'],
            'services.numerology-result',
            'numerology'
        );
    }

    public function nakshatra(Request $request)
    {
        return $this->callApi(
            $request,
            'nakshatra',
            ['dob', 'tob', 'place'],
            'services.nakshatra-result',
            'nakshatra'
        );
    }

    public function health(Request $request)
    {
        return $this->callApi(
            $request,
            'health',
            ['dob', 'tob', 'place'],
            'services.health-result',
            'health',
            'health_index'
        );
    }

    public function love(Request $request)
    {
        return $this->callApi(
            $request,
            'love',
            ['name', 'dob', 'tob', 'place', 'gender'],
            'services.love-result',
            'love'
        );
    }

    public function gemstone(Request $request)
    {
        return $this->callApi(
            $request,
            'gemstone',
            ['name', 'dob', 'tob', 'place'],
            'services.gemstone-result',
            'gemstone'
        );
    }

    public function career(Request $request) 
    {
        return $this->callApi(
            $request,
            'career',
            ['name', 'dob', 'tob', 'place', 'gender'],
            'services.career-result',
            'career'
        );
    }

    public function kalsarp(Request $request)
    {
        return $this->callApi(
            $request,
            'kalsarp',
            ['name', 'dob', 'tob', 'place'],
            'services.kalsarp-result',
            'kalsarp'
        );
    }

    public function mangal(Request $request)
    {
        return $this->callApi(
            $request,
            'mangal',
            ['name', 'dob', 'tob', 'place'],
            'services.mangal-result',
            'mangal'
        );
    }

    public function ascendant(Request $request)
    {
        return $this->callApi(
            $request,
            'ascendant',
            ['name', 'dob', 'tob', 'place'],
            'services.ascendant-result',
            'ascendant'
        );
    }

    public function gochar(Request $request)
    {
        return $this->callApi(
            $request,
            'transit',
            ['name', 'dob', 'tob', 'place'],
            'services.transit-result',
            'transit'
        );
    }

    
}