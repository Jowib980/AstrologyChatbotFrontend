<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\KundaliController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/bot', function () {
    return view('chatbot');
});


Route::get('/kundali', function () {
    return view('kundali');
});

Route::post('/kundali', [KundaliController::class, 'submit'])->name('submit.kundali');
