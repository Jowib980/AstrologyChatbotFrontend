@extends('layouts.app')

@section('title', 'Life Prediction')

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
        	<h2 class="text-2xl font-semibold text-center text-black-700 mb-4">Your Character, Happiness and Fulfillment, Lifestyle</h2>

            <div class="space-y-4 text-lg text-gray-800">
                <p class="text-gray-500"><strong class="text-black">Lagna:</strong> {{ $data['character_prediction']['lagna'] }}</p>
                <p class="text-gray-500"><strong class="text-black">Lagna Lord:</strong> {{ $data['character_prediction']['lagna_lord'] }}</p>
                <p class="text-gray-500"><strong class="text-black">Character:</strong></p>
                <p class="p-4 rounded-md text-justify shadow text-gray-500">
                    {{ $data['character_prediction']['character'] }}
                </p>
                <br>
                <p><strong class="text-black">Happiness and Fulfillment:</strong></p>
                <p class="p-4 rounded-md text-justify shadow text-gray-500">
                    {{ $data['character_prediction']['happiness'] }}
                    {{ $data['character_prediction']['fulfillment'] }}
                </p>
                <br>
                <p><strong class="text-black">Lifestyle:</strong></p>
                <p class="p-4 rounded-md text-justify shadow text-gray-500">
                    {{ $data['character_prediction']['lifestyle'] }}
                </p>
            </div>
        </div>
    </div>
</div>

        
@endsection
