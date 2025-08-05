@extends('layouts.app')

@section('title', 'Health Index')

@section('content')
    <div class="min-h-screen p-6 flex flex-col justify-center items-center bg-gray-100">
        <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-2xl text-center">
            <h2 class="text-3xl font-bold text-indigo-700 mb-4">Health Index</h2>

            <div id="healthGauge" class="flex justify-center mb-4"></div>

            <div class="relative size-40">
                <svg class="size-full -rotate-90 circle-progress" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                    <!-- Background Circle -->
                    <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-200 dark:text-neutral-700" stroke-width="2"></circle>
                    <!-- Progress Circle -->
                    <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-blue-600 dark:text-blue-500" stroke-width="2" stroke-dasharray="{{ $data ?? 0 }}" stroke-dashoffset="100" stroke-linecap="round"></circle>
                </svg>

                <!-- Percentage Text -->
                <div class="w-full text-center">
                    <span class="text-center text-2xl font-bold text-blue-600 dark:text-blue-500">{{ $data ?? 0 }}%</span>
                </div>
                @if($data <= 25)
                    <span class="text-sm text-gray-400">Very Weak</span>
                @elseif($data > 25 && $data <= 50)
                    <span class="text-sm text-gray-400">Weak</span>
                @elseif($data > 50 && $data <= 75)
                    <span class="text-sm text-gray-400">Average</span>
                @else
                    <span class="text-sm text-gray-400">Strong</span>
                @endif

            </div>

            <p class="text-gray-700 mb-6">
                The immunity index is measured by astrological calculations and divided into four categories: <br>
                <strong>Very Weak (0-25), Weak (26-50), Average (51-75), Strong (76-100)</strong>.
            </p>

        </div>
    </div>

@endsection
