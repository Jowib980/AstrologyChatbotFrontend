<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\KundaliController;
use App\Http\Controllers\LocationController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/bot', function () {
    return view('chatbot');
});


Route::get('/search-city', [LocationController::class, 'search'])->name('city');

Route::get('/kundali', function () {
    return view('kundali');
});

Route::post('/kundali', [KundaliController::class, 'submit'])->name('submit.kundali');
Route::get('/home', function () {
    return view('home');
});

Route::get('/horoscope', function () {
    return view('horoscope');
});
Route::get('/horoscope-result', function () {
    $data = json_decode(urldecode(request()->query('data')), true);
    return view('horoscope-result', compact('data'));
});
Route::post('/prediction', [KundaliController::class, 'prediction'])->name('submit.prediction');
Route::get('/numerology', function () {
    return view('numerology');
});
Route::post('/numerology', [KundaliController::class, 'numerology'])->name('submit.numerology');