@extends('layouts.app')

@section('title', 'Ascendant')

@section('content')

	<div class="min-h-screen p-6 flex justify-center items-center">
        <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-4xl">
        	<h2 class="text-2xl font-semibold text-center text-indigo-700 mb-4">Your Ascendant</h2>

            <div class="space-y-4 text-xl text-gray-800">
                <h3 class="text-xl font-semibold">What is Ascendant?</h3>
                <p class="bg-gray-100 p-4 rounded-md text-justify">
                    
                    The ascendant house is considered very important in Vedic astrology. During the birth of a person, the sign which rises in the sky is called the persons ascendant.And, the sign which comes in this house is called the ascendant sign. The ascendant helps in calculating minutest event in a person's life through astrology. Whereas, the daily, weekly, monthly and yearly predictions are made on the basis of moon sign and sun sign.
                    Your Ascendant is Virgo
                </p>

                <h3 class="text-xl font-semibold">Health for {{ $data['ascendant'] }} Ascendant</h3>
                <p class="bg-gray-100 p-4 rounded-md text-justify">
                    {{ $data['health'] }}
                </p>

                <h3 class="text-xl font-semibold">Temperament & Personality for {{ $data['ascendant'] }} Ascendant</h3>
                <p class="bg-gray-100 p-4 rounded-md text-justify">
                    {{ $data['temperament_personality'] }}
                </p>

                <h3 class="text-xl font-semibold">Physical Appearance for {{ $data['ascendant'] }} Ascendant</h3>
                <p class="bg-gray-100 p-4 rounded-md text-justify">
                    {{ $data['physical_appearance'] }}
                </p>
            </div>
        </div>
    </div>

@endsection
