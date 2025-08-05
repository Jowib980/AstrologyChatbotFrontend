@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="min-h-screen flex items-center justify-center p-6">
    <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-xxl">
        <div class="grid grid-cols-3 gap-2">

            @php
                $cards = [
                    ['id' => 'birth-kundali-card', 'title' => 'Birth Kundali/Chart', 'img' => 'ic_kundali.png', 'desc' => 'Planetary position and your chart...', 'route' => '/kundali', 'fields' => ['name','dob','tob','place','gender']],

                    ['title' => 'Match Horoscope', 'img' => 'ic_matching.png', 'desc' => 'Match Horoscope (Guna milan with your partner)', 'route' => '/horoscope', 'link' => true],

                    ['class' => 'prediction-card', 'title' => 'Your Life Predictions', 'img' => 'ic_predection.png', 'desc' => 'Know about your Nature Love and Career', 'route' => '/prediction', 'fields' => ['name','dob','tob','place']],

                    ['id' => 'numerology-card', 'title' => 'Numerology', 'img' => 'ic_numerology.png', 'desc' => 'Know your lucky number', 'route' => '/numerology', 'fields' => ['name','dob','tob','place']],

                    ['id' => 'nakshatra-card', 'title' => 'Nakshatra', 'img' => 'nakshatra.png', 'desc' => 'Know about your Nakshatra', 'route' => '/nakshatra', 'fields' => ['name','dob','tob','place']],

                    ['title' => 'Nature', 'img' => 'nakshatra.png', 'desc' => 'Know about your Nature', 'route' => '/prediction', 'fields' => ['name','dob','tob','place']],

                    ['id' => 'health-card', 'title' => 'Health Index', 'img' => 'ic_health.png', 'desc' => 'Know about your health', 'route' => '/health', 'fields' => ['dob','tob','place']],

                    ['id' => 'love-card', 'title' => 'Love', 'img' => 'love.png', 'desc' => 'Know about your love', 'route' => '/love', 'fields' => ['name','dob','tob','place','gender']],

                    ['id' => 'gemstone-card', 'title' => 'Gemstone', 'img' => 'ic_gemstone.png', 'desc' => 'Which gemstone will suit you? Which gem should you wear? How to wear gemstone?', 'route' => '/gemstone', 'fields' => ['name','dob','tob','place']],

                    ['id' => 'career-card', 'title' => 'Career', 'img' => 'career.png', 'desc' => 'Know about your career', 'route' => '/career', 'fields' => ['name', 'dob', 'tob', 'place', 'gender']],

                    ['id' => 'kalsarp-card', 'title' => 'Kalsarp Dosh/Yog', 'img' => 'kalsarp-dosh.png', 'desc' => 'Know about impact of Kalsharp dosh for whole life.', 'route' => '/kalsarp', 'fields' => ['name', 'dob', 'tob', 'place']],

                    ['id' => 'mangla-card', 'title' => 'Mangal Dosha', 'img' => 'ic_mangal_dosh.png', 'desc' => 'Do you have Mangal dosha? What are the remedies? What are the impact on your married life?', 'route' => '/mangal', 'fields' => ['name', 'dob', 'tob', 'place']],

                    ['id' => 'ascendant-card', 'title' => 'Ascendant', 'img' => 'ascendant.png', 'desc' => 'What does your Ascendant  Nakshatra  and Moon Sign  tell about you.', 'route' => '/ascendant', 'fields' => ['name', 'dob', 'tob', 'place']],

                    ['id' => 'gochar-card', 'title' => 'Gochar Phal (Transit Report)', 'img' => 'ic_transit_today.png', 'desc' => "How does position of current planets impact you?", 'route' => '/transit', 'fields' => ['name', 'dob', 'tob', 'place']]
                ];
            @endphp

            @foreach ($cards as $card)
                @if(isset($card['link']) && $card['link'])
                    <a href="{{ $card['route'] }}">
                @endif
                <div class="card cursor-pointer {{ $card['class'] ?? '' }}" 
                     @if(isset($card['id'])) id="{{ $card['id'] }}" @endif 
                     data-route="{{ $card['route'] }}" 
                     data-fields='@json($card['fields'] ?? [])'>
                    <div class="card-title">
                        <h2 class="text-xl font-semibold text-center p-2">{{ $card['title'] }}</h2>
                    </div>
                    <div class="flex justify-center">
                        <img src="{{ asset('images/' . $card['img']) }}" class="card-image">
                    </div>
                    <p class="p-2 font-semibold text-md text-center">{{ $card['desc'] }}</p>
                </div>
                @if(isset($card['link']) && $card['link'])
                    </a>
                @endif
            @endforeach

        </div>
    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const userData = {
        name: localStorage.getItem("username"),
        dob: localStorage.getItem("userdob"),
        tob: localStorage.getItem("birthtime"),
        place: localStorage.getItem("birthplace"),
        gender: localStorage.getItem("gender")
    };

    function createAndSubmitForm(route, fields) {
        for (let f of fields) {
            if (!userData[f]) {
                alert("Missing user data. Please fill the form first.");
                return;
            }
        }

        const form = $('<form>', { method: 'POST', action: route });
        form.append($('<input>', { type: 'hidden', name: '_token', value: '{{ csrf_token() }}' }));

        fields.forEach(field => {
            form.append($('<input>', { type: 'hidden', name: field, value: userData[field] }));
        });

        $('body').append(form);
        form.submit();
    }

    $('.card').on('click', function () {
        const route = $(this).data('route');
        const fields = $(this).data('fields') || [];
        if (route) createAndSubmitForm(route, fields);
    });
});
</script>
