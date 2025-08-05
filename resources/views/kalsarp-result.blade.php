@extends('layouts.app')

@section('title', 'Kalsarp Dosh')

@section('content')

	<div class="min-h-screen p-6 flex justify-center items-center">
        <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-4xl">
        	<h2 class="text-2xl font-semibold text-center text-indigo-700 mb-4">Kalsarp Dosh/ Yog</h2>

            @if(isset($data['lagna_chart_base64']))
                <img src="data:image/jpeg;base64,{{$data['lagna_chart_base64']}}" alt="Lagna Chart" style="width: 500px; margin: auto;">
            @endif

            <div class="space-y-4 text-lg text-gray-800 mt-4">
                <p><strong>Kalsarp Dosh/ Yog - Kalsarp Remedies</strong></p>
                <p>
                    <strong class="flex flex-start">
                        <img src="{{asset('/images/icon-karlsarp-yog.png')}}" />
                        @if(isset($data['kalsarp_present']) && filter_var($data['kalsarp_present'], FILTER_VALIDATE_BOOLEAN) === false)
                            Kalsarp Yog is not present.
                        @elseif(isset($data['kalsarp_present']) && filter_var($data['kalsarp_present'], FILTER_VALIDATE_BOOLEAN) === true)
                            Kalsarp Yog is present.
                        @else
                            Unable to determine Kalsarp Yog.
                        @endif

                    </strong>
                </p>
                <p>As per the popular definition, when all planets are situated in between Rahu and Ketu in birth-chart or horoscope, the astrologers call it Kalsarp Dosh. In present days, discussions about this dosh are vogue among Jyotishi or Hindu Astrologers of India. Many of troubles in one's life are attributed to Kalsarp Dosh. Without analyzing other areas of astrology, most astrologers, in fact, accept Kalsarp dosh as main root of problems. But the reality is this that if all planets are well posited in horoscope, Kalsarp dosh will not be harmful, and can be supportive to beneficial results endowed by good positions of planets. Kalsarp dosh is inauspicious only when positions of other planets are unfavorable in one's horoscope.

                Therefore, it is not wise to fear hearing just about 'Kalsarp Dosh'. It is in fact always better to reach on remedies only after consulting jyotishi for deep analysis on negative influences of Kalsarp dosh. Interestingly, influence of kalsarp dosh is different in different people. Because influence of kalsarp dosh is based on points-which sign is posited in which house, and what other planets occupied that house, what are their influences and so on.

                <br><strong>Result:</strong> 
                    @if(isset($data['kalsarp_present']) && filter_var($data['kalsarp_present'], FILTER_VALIDATE_BOOLEAN) === false)
                        Your Horoscope is free from Kalsarpa Yog.
                    @elseif(isset($data['kalsarp_present']) && filter_var($data['kalsarp_present'], FILTER_VALIDATE_BOOLEAN) === true)
                        Your Horoscope is not free from Kalsarpa Yog.
                    @else
                        Unable to determine Kalsarp Yog.
                    @endif
                </p>
            </div>
        </div>
    </div>

@endsection
