@extends('layouts.app')

@section('title', 'Transit Today Report')

@section('content')

	<div class="min-h-screen p-6 flex justify-center items-center">
        <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-4xl">
        	<h2 class="text-2xl font-semibold text-center text-indigo-700 mb-4">Prediction For Transit Today</h2>

            <div class="space-y-4 text-xl text-gray-800">
                <h3 class="text-xl font-semibold">Transit Chart</h3>
                @if(isset($data['transit_chart_base64']))
                    <img src="data:image/jpeg;base64,{{$data['transit_chart_base64']}}" alt="Transit Chart" style="width: 500px; margin: auto;">
                @endif

                @foreach($data['transits'] as $item)
                <p>
                    <strong>{{ strtoupper($item['planet']) }} is in {{ $item['sign'] }} in your {{ $item['house'] }}th House</strong><br>
                    {{ $item['interpretation'] }}
                </p>
                @endforeach

            </div>
        </div>
    </div>

@endsection
