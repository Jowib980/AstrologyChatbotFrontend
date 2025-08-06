@extends('layouts.app')

@section('title', 'Nakshatra')

@section('content')
<div class="min-h-screen p-6 flex justify-center items-center bg-gray-100">
    <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-4xl">
        <h2 class="text-3xl font-bold text-center text-indigo-700 mb-8">Nakshatra Report</h2>

        <h3 class="text-2xl font-bold mb-4">What is Nakshatra?</h3>
        <p class="mb-4">Nakshatra is the term for lunar mansion in Hindu astrology. A Nakshatra is one of 27 sectors along the ecliptic, and each Nakshatra is divided into 4 padas (quarters). These divisions influence personality, career, compatibility, and even naming conventions.</p>

        <div class="mt-6">
            <p class="text-xl font-semibold text-indigo-800">Your Nakshatra: {{ $data['nakshatra'] }}</p>
            <p class="text-xl font-semibold text-indigo-800">Pada: {{ $data['pada'] }}</p>
        </div>

        <div class="mt-6">
            <h3 class="text-lg font-bold text-gray-700">Personality</h3>
            <p class="text-gray-800">{{ $data['personality'] }}</p>
        </div>

        <div class="mt-6">
            <h3 class="text-lg font-bold text-green-700">Strengths</h3>
            <ul class="list-disc list-inside text-sm text-gray-800">
                @foreach ($data['strengths'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>

        <div class="mt-6">
            <h3 class="text-lg font-bold text-red-700">Weaknesses</h3>
            <ul class="list-disc list-inside text-sm text-gray-800">
                @foreach ($data['weaknesses'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>

        <div class="mt-6">
            <h3 class="text-lg font-bold text-pink-600">Career</h3>
            <ul class="list-disc list-inside text-sm text-gray-800">
                @foreach ($data['career'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>

        <div class="mt-6">
            <h3 class="text-lg font-bold text-blue-600">Keywords</h3>
            <ul class="list-disc list-inside text-sm text-gray-800">
                @foreach ($data['keywords'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
