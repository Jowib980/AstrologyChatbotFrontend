@extends('layouts.app')

@section('title', 'Numerology')

@section('content')
<div class="min-h-screen p-6 flex justify-center items-center bg-gray-100">
    <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-3xl">
        <h2 class="text-2xl font-semibold text-center text-indigo-700 mb-6">Numerology Report</h2>

        <div class="mb-6">
            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Date of Birth:</strong> {{ $data['dob'] }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div class="bg-indigo-50 p-4 rounded-xl">
                <h3 class="font-semibold text-lg text-indigo-600 mb-2">Radical Number: {{ $data['radical_number'] }}</h3>
                <p class="text-sm text-gray-700">{{ $data['radical_meaning'] }}</p>
            </div>
            <div class="bg-indigo-50 p-4 rounded-xl">
                <h3 class="font-semibold text-lg text-indigo-600 mb-2">Destiny Number: {{ $data['destiny_number'] }}</h3>
                <p class="text-sm text-gray-700">{{ $data['destiny_meaning'] }}</p>
            </div>
            <div class="bg-indigo-50 p-4 rounded-xl">
                <h3 class="font-semibold text-lg text-indigo-600 mb-2">Name Number: {{ $data['name_number'] }}</h3>
                <p class="text-sm text-gray-700">{{ $data['name_meaning'] }}</p>
            </div>
        </div>

        <h3 class="text-xl font-bold text-indigo-700 mb-4">Favourable Attributes</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-800">
            <p><strong>Favourable Sign:</strong> {{ $data['numerology_attributes']['favourable_sign'] }}</p>
            <p><strong>Favourable Alphabets:</strong> {{ $data['numerology_attributes']['favourable_alphabets'] }}</p>
            <p><strong>Gemstone:</strong> {{ $data['numerology_attributes']['gemstone'] }}</p>
            <p><strong>Favourable Days:</strong> {{ $data['numerology_attributes']['favourable_days'] }}</p>
            <p><strong>Favourable Numbers:</strong> {{ $data['numerology_attributes']['favourable_number'] }}</p>
            <p><strong>Direction:</strong> {{ $data['numerology_attributes']['direction'] }}</p>
            <p><strong>Auspicious Color:</strong> {{ $data['numerology_attributes']['auspicious_color'] }}</p>
            <p><strong>Ruling Planet:</strong> {{ $data['numerology_attributes']['ruling_planet'] }}</p>
            <p><strong>God/Goddess:</strong> {{ $data['numerology_attributes']['god_goddess'] }}</p>
            <p><strong>Fast:</strong> {{ $data['numerology_attributes']['fast'] }}</p>
            <p><strong>Favourable Dates:</strong> {{ $data['numerology_attributes']['favourable_dates'] }}</p>
            <p><strong>Mantra:</strong> {{ $data['numerology_attributes']['mantra'] }}</p>
        </div>
    </div>
</div>
@endsection
