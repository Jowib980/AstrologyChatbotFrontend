@extends('layouts.app')

@section('title', 'Career Prediction')

@section('content')

	<div class="min-h-screen p-6 flex justify-center items-center">
        <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-4xl">
        	<h2 class="text-2xl font-semibold text-center text-indigo-700 mb-4">Your Finance, Career and Occupation</h2>

            <div class="space-y-4 text-lg text-gray-800">
                <p><strong>Career:</strong></p>
                <p class="bg-gray-100 p-4 rounded-md text-justify">
                    {{ $data['career'] }}
                </p>
                <br>
                <p><strong>Finance:</strong></p>
                <p class="bg-gray-100 p-4 rounded-md text-justify">
                    {{ $data['finance'] }}
                </p>
                <br>
                <p><strong>Occupation:</strong>
                	<p class="bg-gray-100 p-4 rounded-md text-justify">
                    {{ $data['occupation'] }}
                </p>
            </div>
        </div>
    </div>

@endsection
