@extends('layouts.app')

@section('title', 'Gemstone')

@section('content')
<div class="min-h-screen p-6 flex justify-center items-center bg-gray-100">
    <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-4xl">
        <h2 class="text-3xl font-bold text-center text-indigo-700 mb-8">Gemstone Report</h2>

        <h3 class="text-2xl font-bold mb-4">What is Gemstone?</h3>
        <p class="mb-4">The primary use for gems throughout history has been for healing and spiritual rituals. Although gems were rare and exhibited great beauty, the reason they were so precious was due to the power they imparted to their wearers. They are storehouses of empowerment, transmitted through contact with one's body. Gems exhibit their power in a beneficial or detrimental way - depending on how they are used. All stones or gems have magnetic powers in varying degrees, and many of them are beneficial to us for their therapeutic cures. They emit vibrations and frequencies which have strong potential influence on our whole being. Here's what your Gemstone prediction looks like.</p>

        <div class="mt-6">
            <p class="text-xl font-semibold text-indigo-800">Life Stone</p>
            <div class="bg-gray-100 p-4 rounded-md text-justify">
                <p class="text-md">{{ $data['life_stone']['description'] }}</p>
                <p class="text-xl text-indigo-800 mt-2">Recommendation</p>
                <div class="bg-gray-200 p-4 rounded-md text-justify mt-2">
                    <p class="text-md"><strong>Recommend Gemstone: </strong>{{ $data['life_stone']['recommend_gemstone'] }}</p>
                    <p class="text-md"><strong>Minimum Recommend Weight: </strong>{{ $data['life_stone']['minimum_weight'] }}</p>
                    <p class="text-md"><strong>Wearing Instructions:</strong>{{ $data['life_stone']['wearing_instructions'] }}</p>
                    <p class="text-md"><strong>Recommend Mantra:</strong>{{ $data['life_stone']['mantra'] }}</p>
                </div>
            </div>
        </div>

        <div class="mt-6">
            <p class="text-xl font-semibold text-indigo-800">Lucky Stone</p>
            <div class="bg-gray-100 p-4 rounded-md text-justify">
                <p class="text-md">{{ $data['lucky_stone']['description'] }}</p>
                <p class="text-xl text-indigo-800 mt-2">Recommendation</p>
                <div class="bg-gray-200 p-4 rounded-md text-justify mt-2">
                    <p class="text-md"><strong>Recommend Gemstone: </strong>{{ $data['lucky_stone']['recommend_gemstone'] }}</p>
                    <p class="text-md"><strong>Minimum Recommend Weight: </strong>{{ $data['lucky_stone']['minimum_weight'] }}</p>
                    <p class="text-md"><strong>Wearing Instructions:</strong>{{ $data['lucky_stone']['wearing_instructions'] }}</p>
                    <p class="text-md"><strong>Recommend Mantra:</strong>{{ $data['lucky_stone']['mantra'] }}</p>
                </div>
            </div>
        </div>

        <div class="mt-6">
            <p class="text-xl font-semibold text-indigo-800">Bhagya Stone</p>
            <div class="bg-gray-100 p-4 rounded-md text-justify">
                <p class="text-md">{{ $data['bhagya_stone']['description'] }}</p>
                <p class="text-xl text-indigo-800 mt-2">Recommendation</p>
                <div class="bg-gray-200 p-4 rounded-md text-justify mt-2">
                    <p class="text-md"><strong>Recommend Gemstone: </strong>{{ $data['bhagya_stone']['recommend_gemstone'] }}</p>
                    <p class="text-md"><strong>Minimum Recommend Weight: </strong>{{ $data['bhagya_stone']['minimum_weight'] }}</p>
                    <p class="text-md"><strong>Wearing Instructions:</strong>{{ $data['bhagya_stone']['wearing_instructions'] }}</p>
                    <p class="text-md"><strong>Recommend Mantra:</strong>{{ $data['bhagya_stone']['mantra'] }}</p>
                </div>
            </div>
        </div>

        <h3 class="text-2xl font-bold mt-4">Important Information</h3>
        <p class="mt-2">While wearing a gem please keep certain things in mind. Purchase only original gemstones as wearing those that are not original will have no effect. You also need to wear the prescribed weight, what is commonly known as "Ratti". Now days markets are flooded with fake gems.</p>
    </div>
</div>
@endsection
