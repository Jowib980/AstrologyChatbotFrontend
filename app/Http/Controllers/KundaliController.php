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
            'Content-Type' => 'application/json',
        ])->post("http://127.0.0.1:5000/api/{$endpoint}", $payload);

        // if (!$response->successful()) {
        //     return back()->withErrors([$errorKey => ucfirst($errorKey) . ' request failed.']);
        // }

        $jsonData = $response->json();
        $data = $valueKey ? ($jsonData[$valueKey] ?? null) : $jsonData;
        // dd($data);

        return view($view, ['data' => $data]);
    }


    public function submit(Request $request)
    {
        return $this->callApi(
            $request,
            'kundali',
            ['name', 'gender', 'dob', 'tob', 'place', 'user_id'],
            'services.kundali_result',
            'kundali'
        );
    }

    public function prediction(Request $request)
    {
        return $this->callApi(
            $request,
            'predict_character',
            ['name', 'dob', 'tob', 'place', 'user_id'],
            'services.prediction-result',
            'prediction'
        );
    }

    public function numerology(Request $request)
    {
        return $this->callApi(
            $request,
            'numerology',
            ['name', 'dob', 'tob', 'place', 'user_id'],
            'services.numerology-result',
            'numerology'
        );
    }

    public function nakshatra(Request $request)
    {
        return $this->callApi(
            $request,
            'nakshatra',
            ['dob', 'tob', 'place', 'user_id'],
            'services.nakshatra-result',
            'nakshatra'
        );
    }

    public function health(Request $request)
    {
        return $this->callApi(
            $request,
            'health',
            ['dob', 'tob', 'place', 'user_id'],
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
            ['name', 'dob', 'tob', 'place', 'gender', 'user_id'],
            'services.love-result',
            'love'
        );
    }

    public function gemstone(Request $request)
    {
        return $this->callApi(
            $request,
            'gemstone',
            ['name', 'dob', 'tob', 'place', 'user_id'],
            'services.gemstone-result',
            'gemstone'
        );
    }

    public function career(Request $request) 
    {
        return $this->callApi(
            $request,
            'career',
            ['name', 'dob', 'tob', 'place', 'gender', 'user_id'],
            'services.career-result',
            'career'
        );
    }

    public function kalsarp(Request $request)
    {
        return $this->callApi(
            $request,
            'kalsarp',
            ['name', 'dob', 'tob', 'place', 'user_id'],
            'services.kalsarp-result',
            'kalsarp'
        );
    }

    public function mangal(Request $request)
    {
        return $this->callApi(
            $request,
            'mangal',
            ['name', 'dob', 'tob', 'place', 'user_id'],
            'services.mangal-result',
            'mangal'
        );
    }

    public function ascendant(Request $request)
    {
        return $this->callApi(
            $request,
            'ascendant',
            ['name', 'dob', 'tob', 'place', 'user_id'],
            'services.ascendant-result',
            'ascendant'
        );
    }

    public function gochar(Request $request)
    {
        return $this->callApi(
            $request,
            'transit',
            ['name', 'dob', 'tob', 'place', 'user_id'],
            'services.transit-result',
            'transit'
        );
    }
    
    public function horoscopeResult(Request $request)
    {
        $matchId = $request->query('match_id');

        if (!$matchId) {
            return redirect()->back()->with('error', 'Match ID is missing.');
        }

        try {
            $response = Http::get("http://127.0.0.1:5000/api/get_match/{$matchId}");

            if ($response->failed()) {
                return redirect()->back()->with('error', 'Unable to fetch match data.');
            }

            $data = $response->json();

            if (!isset($data['status']) || $data['status'] !== 'success') {
                return redirect()->back()->with('error', $data['message'] ?? 'Error retrieving data.');
            }

            return view('services.horoscope-result', [
                'match' => $data['data']
            ]);

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

}