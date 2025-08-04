@extends('layouts.app')

@section('title', 'Numerology')

@section('content')
<div class="min-h-screen p-6 flex justify-center items-center bg-gray-100">
    <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-4xl">
        <h2 class="text-3xl font-bold text-center text-indigo-700 mb-8">Numerology Report</h2>

        {{-- Basic Info --}}
        <div class="mb-6 space-y-2">
            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Date of Birth:</strong> {{ $data['dob'] }}</p>
        </div>

        {{-- Core Numbers --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-indigo-50 p-4 rounded-xl">
                <h3 class="font-semibold text-lg text-indigo-600 mb-1">Radical Number: {{ $data['radical_number'] }}</h3>
                <p class="text-sm text-gray-700">{{ $data['radical_meaning'] }}</p>
            </div>
            <div class="bg-indigo-50 p-4 rounded-xl">
                <h3 class="font-semibold text-lg text-indigo-600 mb-1">Destiny Number: {{ $data['destiny_number'] }}</h3>
                <p class="text-sm text-gray-700">{{ $data['destiny_meaning'] }}</p>
            </div>
            <div class="bg-indigo-50 p-4 rounded-xl">
                <h3 class="font-semibold text-lg text-indigo-600 mb-1">Name Number: {{ $data['name_number'] }}</h3>
                <p class="text-sm text-gray-700">{{ $data['name_meaning'] }}</p>
            </div>
        </div>

        {{-- Personality & Career --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div class="bg-green-50 p-4 rounded-xl">
                <h3 class="font-semibold text-lg text-green-600 mb-2">Personality Traits</h3>
                <p class="text-sm text-gray-700">{{ $data['numerology_attributes']['personality'] }}</p>
            </div>
            <div class="bg-yellow-50 p-4 rounded-xl">
                <h3 class="font-semibold text-lg text-yellow-600 mb-2">Career Suggestions</h3>
                <p class="text-sm text-gray-700">{{ $data['numerology_attributes']['career'] }}</p>
            </div>
        </div>

        {{-- Compatibility --}}
        <div class="mb-6">
            <h3 class="font-semibold text-lg text-pink-600 mb-2">Compatible Numbers</h3>
            <ul class="list-disc list-inside text-sm text-gray-800">
                @foreach ($data['numerology_attributes']['compatible'] as $num)
                    <li>{{ $num }}</li>
                @endforeach
            </ul>
        </div>

        {{-- Dos and Don’ts --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div class="bg-blue-50 p-4 rounded-xl">
                <h3 class="font-semibold text-lg text-blue-600 mb-2">Dos</h3>
                <ul class="list-disc list-inside text-sm text-gray-800">
                    @foreach ($data['numerology_attributes']['dos'] as $do)
                        <li>{{ $do }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="bg-red-50 p-4 rounded-xl">
                <h3 class="font-semibold text-lg text-red-600 mb-2">Don’ts</h3>
                <ul class="list-disc list-inside text-sm text-gray-800">
                    @foreach ($data['numerology_attributes']['donts'] as $dont)
                        <li>{{ $dont }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Favourable Attributes --}}
        <h3 class="text-xl font-bold text-indigo-700 mb-4">Favourable Attributes</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-800 mb-6">
            <p><strong>Favourable Sign:</strong> {{ $data['numerology_attributes']['favourable_sign'] }}</p>
            <p><strong>Favourable Alphabets:</strong> {{ $data['numerology_attributes']['favourable_alphabets'] }}</p>
            <p><strong>Gemstone:</strong> {{ $data['numerology_attributes']['gemstone'] }}</p>
            <p><strong>Favourable Days:</strong> {{ $data['numerology_attributes']['favourable_days'] }}</p>
            <p><strong>Favourable Numbers:</strong> {{ $data['numerology_attributes']['favourable_number'] }}</p>
            <p><strong>Favourable Dates:</strong> {{ $data['numerology_attributes']['favourable_dates'] }}</p>
            <p><strong>Direction:</strong> {{ $data['numerology_attributes']['direction'] }}</p>
            <p><strong>Auspicious Color:</strong> {{ $data['numerology_attributes']['auspicious_color'] }}</p>
            <p><strong>Ruling Planet:</strong> {{ $data['numerology_attributes']['ruling_planet'] }}</p>
            <p><strong>God/Goddess:</strong> {{ $data['numerology_attributes']['god_goddess'] }}</p>
            <p><strong>Fast Day:</strong> {{ $data['numerology_attributes']['fast'] }}</p>
            <p><strong>Mantra:</strong> {{ $data['numerology_attributes']['mantra'] }}</p>
        </div>

        {{-- Name Correction (Optional Future Feature) --}}
        {{-- @if (isset($data['name_suggestion']))
        <div class="mt-6 p-4 bg-yellow-100 rounded-xl">
            <h3 class="font-semibold text-lg text-yellow-800 mb-2">Suggested Name Correction</h3>
            <p class="text-sm text-gray-700">To align better with your numerology, consider a name change or spelling like: <strong>{{ $data['name_suggestion'] }}</strong></p>
        </div>
        @endif --}}
    </div>
</div>
@endsection
