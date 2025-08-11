@extends('layouts.app')

@section('title', 'Services')

@section('content')

<div id="loader" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
    <div class="sk-chase">
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
    </div>
</div>


<!--Breadcrumb start-->
<div class="ast_pagetitle">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>services</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="/">home</a></li>
                    <li>//</li>
                    <li><a href="/services">services</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->

    <div class="ast_service_wrapper ast_toppadder70 ast_bottompadder50">
        <div class="container">
            <div class="row">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-2">

                    @php
                        $cards = [
                            ['id' => 'birth-kundali-card', 'title' => 'Birth Kundali/Chart', 'img' => 'ic_kundali.png', 'desc' => 'Planetary position and your chart...', 'route' => '/kundali', 'fields' => ['name','dob','tob','place','gender', 'user_id']],

                            ['title' => 'Match Horoscope', 'img' => 'ic_matching.png', 'desc' => 'Match Horoscope (Guna milan with your partner)', 'route' => '/horoscope', 'link' => true],

                            ['class' => 'prediction-card', 'title' => 'Your Life Predictions', 'img' => 'ic_predection.png', 'desc' => 'Know about your Nature Love and Career', 'route' => '/prediction', 'fields' => ['name','dob','tob','place', 'user_id']],

                            ['id' => 'numerology-card', 'title' => 'Numerology', 'img' => 'ic_numerology.png', 'desc' => 'Know your lucky number', 'route' => '/numerology', 'fields' => ['name','dob','tob','place', 'user_id']],

                            ['id' => 'nakshatra-card', 'title' => 'Nakshatra', 'img' => 'nakshatra.png', 'desc' => 'Know about your Nakshatra', 'route' => '/nakshatra', 'fields' => ['name','dob','tob','place', 'user_id']],

                            ['title' => 'Nature', 'img' => 'nakshatra.png', 'desc' => 'Know about your Nature', 'route' => '/prediction', 'fields' => ['name','dob','tob','place', 'user_id']],

                            ['id' => 'health-card', 'title' => 'Health Index', 'img' => 'ic_health.png', 'desc' => 'Know about your health', 'route' => '/health', 'fields' => ['dob','tob','place', 'user_id']],

                            ['id' => 'love-card', 'title' => 'Love', 'img' => 'love.png', 'desc' => 'Know about your love', 'route' => '/love', 'fields' => ['name','dob','tob','place','gender', 'user_id']],

                            ['id' => 'gemstone-card', 'title' => 'Gemstone', 'img' => 'ic_gemstone.png', 'desc' => 'Which gemstone will suit you? Which gem should you wear? How to wear gemstone?', 'route' => '/gemstone', 'fields' => ['name','dob','tob','place', 'user_id']],

                            ['id' => 'career-card', 'title' => 'Career', 'img' => 'career.png', 'desc' => 'Know about your career', 'route' => '/career', 'fields' => ['name', 'dob', 'tob', 'place', 'gender', 'user_id']],

                            ['id' => 'kalsarp-card', 'title' => 'Kalsarp Dosh/Yog', 'img' => 'kalsarp-dosh.png', 'desc' => 'Know about impact of Kalsharp dosh for whole life.', 'route' => '/kalsarp', 'fields' => ['name', 'dob', 'tob', 'place', 'user_id']],

                            ['id' => 'mangla-card', 'title' => 'Mangal Dosha', 'img' => 'ic_mangal_dosh.png', 'desc' => 'Do you have Mangal dosha? What are the remedies? What are the impact on your married life?', 'route' => '/mangal', 'fields' => ['name', 'dob', 'tob', 'place', 'user_id']],

                            ['id' => 'ascendant-card', 'title' => 'Ascendant', 'img' => 'ascendant.png', 'desc' => 'What does your Ascendant  Nakshatra  and Moon Sign  tell about you.', 'route' => '/ascendant', 'fields' => ['name', 'dob', 'tob', 'place', 'user_id']],

                            ['id' => 'gochar-card', 'title' => 'Gochar Phal (Transit Report)', 'img' => 'ic_transit_today.png', 'desc' => "How does position of current planets impact you?", 'route' => '/transit', 'fields' => ['name', 'dob', 'tob', 'place', 'user_id']]
                        ];
                    @endphp

                    @foreach ($cards as $card)
                        @if(isset($card['link']) && $card['link'])
                            <a href="{{ $card['route'] }}">
                        @endif
                    <div
                        class="ast_service_box {{ $card['class'] ?? '' }}"
                        @if(isset($card['id'])) id="{{ $card['id'] }}" @endif
                        data-route="{{ $card['route'] }}"
                        data-fields='@json($card['fields'] ?? [])'
                    >
                        <div class="">
                            <img src="{{ asset('images/' . $card['img']) }}" alt="Service" class="card-image">
                            <h4>{{ $card['title'] }}</h4>
                            <p>{{ $card['desc'] }}</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    @if(isset($card['link']) && $card['link'])
                        </a>
                    @endif
                @endforeach


                </div>
            </div>
        </div>
    </div>

    
<!--Timer Section start -->
<div class="ast_timer_wrapper ast_toppadder70 ast_bottompadder40">
<div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ast_heading">
                    <h1>now <span>we have</span></h1>
                    <p>We bring together the wisdom of ancient astrology and the precision of modern calculations to offer you accurate, insightful, and life-changing guidance.</p>
                </div>
            </div>
            <div class="ast_counter_wrapper row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="ast_counter">
                        <span><img src="{{ asset('theme/images/content/timer_1.png') }}" alt="timer"></span>
                        <h2 class="timer" data-from="0" data-to="200" data-speed="5000"></h2>
                        <h4>Offices Worldwide</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="ast_counter">
                        <span><img src="{{ asset('theme/images/content/timer_2.png') }}" alt="timer"></span>
                        <h2 class="timer" data-from="0" data-to="800" data-speed="5000"></h2>
                        <h4>skilled Astrologers</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="ast_counter">
                        <span><img src="{{ asset('theme/images/content/timer_3.png') }}" alt="timer"></span>
                        <h2 class="timer" data-from="0" data-to="60" data-speed="5000"></h2>
                        <h4>Countries Covered</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="ast_counter">
                        <span><img src="{{ asset('theme/images/content/timer_4.png') }}" alt="timer"></span>
                        <h2 class="timer" data-from="0" data-to="30" data-speed="5000"></h2>
                        <h4>Years of Experiences</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Timer Section end -->

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const userData = {
        user_id: localStorage.getItem("user_id"),
        name: localStorage.getItem("username"),
        dob: localStorage.getItem("userdob"),
        tob: localStorage.getItem("birthtime"),
        place: localStorage.getItem("birthplace"),
        gender: localStorage.getItem("gender")
    };


    const isLoggedIn = !!userData.user_id;

    function showToast(type, message) {
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: type, // 'success', 'error', 'warning', 'info', 'question'
            title: message,
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        });
    }


    function createAndSubmitForm(route, fields) {
        $('#loader').removeClass('hidden');

        const form = $('<form>', { method: 'POST', action: route });

        form.append($('<input>', {
            type: 'hidden',
            name: '_token',
            value: '{{ csrf_token() }}'
        }));

        fields.forEach(field => {
            form.append($('<input>', {
                type: 'hidden',
                name: field,
                value: userData[field] || ''
            }));
        });

        $('body').append(form);
        form.submit();
    }


    $('.ast_service_box').on('click', function () {

        if (!isLoggedIn) {
            showToast('error', 'Please login first!');
            return;
        }

        const route = $(this).data('route');
        const fields = $(this).data('fields') || [];
        if (route) {
            createAndSubmitForm(route, fields);
        }
    });
});
</script>
