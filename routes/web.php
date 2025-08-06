<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\KundaliController;
use App\Http\Controllers\LocationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/bot', function () {
    return view('chatbot');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/search-city', [LocationController::class, 'search'])->name('city');

Route::post('/kundali', [KundaliController::class, 'submit'])->name('submit.kundali');
Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/horoscope', function () {
    return view('services.horoscope');
});
Route::get('/horoscope-result', function () {
    $data = json_decode(urldecode(request()->query('data')), true);
    return view('services.horoscope-result', compact('data'));
});
Route::post('/prediction', [KundaliController::class, 'prediction'])->name('submit.prediction');
Route::get('/numerology', function () {
    return view('services.numerology');
});
Route::post('/numerology', [KundaliController::class, 'numerology'])->name('submit.numerology');
Route::post('/nakshatra', [KundaliController::class, 'nakshatra'])->name('submit.nakshatra');
Route::post('/health', [KundaliController::class, 'health'])->name('submit.health');
Route::post('/love', [KundaliController::class, 'love'])->name('submit.love');
Route::post('/gemstone', [KundaliController::class, 'gemstone'])->name('submit.gemstone');
Route::post('/career', [KundaliController::class, 'career'])->name('submit.career');
Route::post('/kalsarp', [KundaliController::class, 'kalsarp'])->name('submit.kalsarp');
Route::post('/mangal', [KundaliController::class, 'mangal'])->name('submit.mangal');
Route::post('/ascendant', [KundaliController::class, 'ascendant'])->name('submit.ascendant');
Route::post('/transit', [KundaliController::class, 'gochar'])->name('submit.transit');