@extends('layouts.app')

@section('title', 'Nakshatra')

@section('content')


<!--Breadcrumb start-->
<div class="ast_pagetitle">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>Life Prediction services</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>//</li>
                    <li><a href="services.html">services</a></li>
                    <li>//</li>
                    <li><a href="services.html">Life Prediction services</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->



<div class="ast_blog_wrapper ast_toppadder80 ast_bottompadder80">
    <div class="container">
        <div class="row">
            
            <div class="mb-4 space-y-2">
                <div class="ast_heading">
                    <h1><span>What is Nakshatra?</span></h1>
                </div>
                <p class="mb-4">Nakshatra is the term for lunar mansion in Hindu astrology. A Nakshatra is one of 27 sectors along the ecliptic, and each Nakshatra is divided into 4 padas (quarters). These divisions influence personality, career, compatibility, and even naming conventions.</p>
            </div>

            <h2 class="text-3xl font-bold text-center text-black-700 mb-8">Nakshatra Report</h2>

            <div class="mt-6">
                <p class="text-xl  text-gray-500"><strong class="text-black-800"> Your Nakshatra:</strong> {{ $data['nakshatra'] }}</p>
                <p class="text-xl  text-gray-500"><strong class="text-black-800">Pada:</strong> {{ $data['pada'] }}</p>
                <p class="text-xl text-gray-500"><strong class="text-black-800">Personality: </strong>{{ $data['personality'] }}</h4>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                <div class="ast_service_box">
                    <h4>Keywords</h4>
                    <ul class="list-disc list-inside text-sm text-gray-800">
                        @foreach ($data['keywords'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="ast_service_box">
                    <h4>Strengths</h4>
                    <ul class="list-disc list-inside text-sm text-gray-800">
                        @foreach ($data['strengths'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="ast_service_box">
                    <h4>Weaknesses</h4>
                    <ul class="list-disc list-inside text-sm text-gray-800">
                        @foreach ($data['weaknesses'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="ast_service_box">
                    <h4>Career</h4>
                    <ul class="list-disc list-inside text-sm text-gray-800">
                        @foreach ($data['career'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
