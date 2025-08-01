@extends('layouts.app')

@section('title', 'Kundli Chart')

@section('content')
    <div class="min-h-screen p-6 flex justify-center items-center">
        <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-2xl">
            <h2 class="text-3xl font-bold text-indigo-700 mb-6 text-center"> Your Kundli Report</h2>

            <div class="space-y-4 text-gray-800">
                <p><strong class="text-indigo-600">Name:</strong> {{ $kundli['lagna_chart']['name'] ?? '' }}</p>
                <p><strong class="text-indigo-600">Gender:</strong> {{ $kundli['lagna_chart']['gender'] ?? '' }}</p>
                <p><strong class="text-indigo-600">Date of Birth:</strong> {{ $kundli['lagna_chart']['dob'] ?? '' }}</p>
                <p><strong class="text-indigo-600">Time of Birth:</strong> {{ $kundli['lagna_chart']['tob'] ?? '' }}</p>
                <p><strong class="text-indigo-600">Place:</strong> {{ $kundli['lagna_chart']['place'] ?? '' }}</p>

                @if(!empty($kundli['lagna_chart']['predictions']) && is_array($kundli['lagna_chart']['predictions']))
                    <div class="mt-6">
                        <h3 class="text-xl font-semibold text-indigo-700 mb-2">🔮 Predictions</h3>
                        <ul class="list-disc list-inside space-y-1 text-gray-700">
                            @foreach ($kundli['lagna_chart']['predictions'] as $prediction)
                                <li>{{ $prediction }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mt-8 text-center">
                    @if(!empty($kundli['lagna_chart']['chart_image_base64']))
                        <div class="mt-6">
                            <h3 class="text-xl font-semibold text-indigo-700 mb-3">🌀 Lagna Chart</h3>
                            <img src="data:image/jpeg;base64,{{ $kundli['lagna_chart']['chart_image_base64']
                            }}"
                                alt="Lagna Chart"
                                class="mx-auto rounded-lg border shadow-md max-w-md w-full">
                        </div>
                    @endif

                    @if(!empty($kundli['navamsa_chart']['chart_image_base64']))
                        <div class="mt-6">
                            <h3 class="text-xl font-semibold text-indigo-700 mb-3">🌙 Navamsa Chart</h3>
                            <img src="data:image/jpeg;base64,{{
                                $kundli['navamsa_chart']['chart_image_base64'] }}"
                                alt="Navamsa Chart"
                                class="mx-auto rounded-lg border shadow-md max-w-md w-full">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
