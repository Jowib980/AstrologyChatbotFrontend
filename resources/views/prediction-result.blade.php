@extends('layouts.app')

@section('title', 'Life Prediction')

@section('content')

	<div class="min-h-screen p-6 flex justify-center items-center">
        <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-2xl">
        	<h2 class="text-2xl font-semibold text-center text-indigo-700 mb-4">Life Prediction for {{ $prediction['name'] }}</h2>

            <div class="space-y-4 text-lg text-gray-800">
                <p><strong>Lagna:</strong> {{ $prediction['character_prediction']['lagna'] }}</p>
                <p><strong>Lagna Lord:</strong> {{ $prediction['character_prediction']['lagna_lord'] }}</p>
                <p><strong>Character:</strong></p>
                <p class="bg-gray-100 p-4 rounded-md text-justify">
                    {{ $prediction['character_prediction']['character'] }}
                </p>
                <br>
                <p><strong>Happiness and Fulfillment:</strong></p>
                <p class="bg-gray-100 p-4 rounded-md text-justify">
                    {{ $prediction['character_prediction']['happiness'] }}
                    {{ $prediction['character_prediction']['fulfillment'] }}
                </p>
                <br>
                <p><strong>Lifestyle:</strong>
                	<p class="bg-gray-100 p-4 rounded-md text-justify">
                    {{ $prediction['character_prediction']['lifestyle'] }}
                </p>
            </div>
        </div>
    </div>

@endsection
