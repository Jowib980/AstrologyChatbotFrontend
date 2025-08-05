@extends('layouts.app')

@section('title', 'Life Prediction')

@section('content')

	<div class="min-h-screen p-6 flex justify-center items-center">
        <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-4xl">
        	<h2 class="text-2xl font-semibold text-center text-indigo-700 mb-4">Mangal Dosha</h2>

            <div class="space-y-4 text-lg text-gray-800 mt-4">
                <strong class="text-xl">Mangal Dosha</strong>
                <div class="flex flex-start">
                   
                    <img src="{{asset('/images/ic_mangal_dosh.png')}}" class="card-image" />
                    
                    <div class="details">
                        @if($data['severity'] != 'None')
                            <strong class="text-xl">Person is Manglik({{$data['severity']}}).</strong>
                        @else
                            <strong class="text-xl">Person is not Manglik</strong>
                        @endif
                        <br>
                        <span>{{$data['details']}}</span>
                    </div>
                </div>
                
                    <p>Mangal Dosha is considered to create hurdles in the married life of a person.

                    It is considered that if a manglik person marries to another manglik person then the manglik dosha gets cancelled and has no effect.</p>

                    <h3 class="text-2xl font-semibold mb-2">Some Remedies (in case Mangal Dosha is present)</h3>

                    <p class="mt-2"><strong>Remedies (needs to be performed before marriage)</strong></p>

                    <p>Kumbha Vivah, Vishnu Vivah and Ashwatha Vivah are the most popular remedies for Mangal Dosha. Ashwatha vivaha means the marriage with peepal or banana tree and cutting the tree after that. Kumbha Vivah, also called Ghata Vivaha, means marriage with a pot and breaking it after that.</p>

                    <p class="mt-2"><strong>Remedies (can be performed after marriage)</strong></p>

                    <ul>
                        <li>- Keep Kesariya Ganapati (Orange coloured idol of Lord Ganesha) in worship room and worship daily.</li>
                        <li>- Worship Lord Hanuman by reciting Hanuman Chalisa daily.</li>
                        <li>- Mahamrityunjaya paath (recitation of Mahamrityunjaya mantra).</li>
                    </ul>

                    <p class="mt-2"><strong>Remedies (based on Lal Kitab, can be performed after marriage)</strong></p>

                    <ul>
                        <li>- Feed birds with something sweet.</li>
                        <li>- Keep ivory (Haathi Daant) at home.</li>
                        <li>- Worship banyan tree with milk mixed with something sweet.</li>
                    </ul>

                    <p class="mt-2"><strong>Note :</strong> We strongly recommend you to consult an astrologer before performing these remedies by your own.</p>
            </div>
        </div>
    </div>

@endsection
