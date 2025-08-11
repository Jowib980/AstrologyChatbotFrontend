@extends('layouts.app')

@section('title', 'Ascendant')

@section('content')


<!--Breadcrumb start-->
<div class="ast_pagetitle">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>ascendant services</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="/">home</a></li>
                    <li>//</li>
                    <li><a href="/services">services</a></li>
                    <li>//</li>
                    <li><a href="#">ascendant services</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->


<div class="ast_blog_wrapper ast_toppadder80 ast_bottompadder80">
    <div class="container">
        <div class="row">
            <div class="ast_heading">
                <h1><span>What is Ascendant?</span></h1>
            </div>
            <p class=" p-4 rounded-md text-justify">
                    
                    The ascendant house is considered very important in Vedic astrology. During the birth of a person, the sign which rises in the sky is called the persons ascendant.And, the sign which comes in this house is called the ascendant sign. The ascendant helps in calculating minutest event in a person's life through astrology. Whereas, the daily, weekly, monthly and yearly predictions are made on the basis of moon sign and sun sign.
                    Your Ascendant is Virgo
                </p>
        	
            <div class="space-y-4 text-md text-gray-800">
                
                <h2 class="text-2xl font-semibold text-center text-black mb-4">Your Ascendant</h2>

                <h3 class="text-xl font-semibold">Health for {{ $data['ascendant'] }} Ascendant</h3>
                <p class="bg-white shadow p-4 rounded-md text-justify">
                    {{ $data['health'] }}
                </p>

                <h3 class="text-xl font-semibold">Temperament & Personality for {{ $data['ascendant'] }} Ascendant</h3>
                <p class="bg-white shadow p-4 rounded-md text-justify">
                    {{ $data['temperament_personality'] }}
                </p>

                <h3 class="text-xl font-semibold">Physical Appearance for {{ $data['ascendant'] }} Ascendant</h3>
                <p class="bg-white shadow p-4 rounded-md text-justify">
                    {{ $data['physical_appearance'] }}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
