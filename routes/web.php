<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/bot', function () {
    return view('chatbot');
});

Route::match(['get', 'post'], '/ask', function (Request $request) {
    $response = null;

    if ($request->isMethod('post')) {
        $question = $request->input('question');
        $apiResponse = Http::post('http://127.0.0.1:5000/ask', [
            'question' => $question
        ]);

        $response = $apiResponse->json()['response'] ?? 'Error';
    }

    return back()->with(['response' => $response]);
});