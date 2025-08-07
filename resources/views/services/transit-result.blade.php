@extends('layouts.app')

@section('title', 'Transit Today Report')

@section('content')


<!--Breadcrumb start-->
<div class="ast_pagetitle">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>transit services</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>//</li>
                    <li><a href="services.html">services</a></li>
                    <li>//</li>
                    <li><a href="services.html">transit services</a></li>
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
                <h1><span>Prediction For Transit Today</span></h1>
            </div>

            <div class="space-y-4 text-gray-800">
                <h3 class="text-xl font-semibold text-center">Transit Chart</h3>
                @if(isset($data['transit_chart_base64']))
                    <img src="data:image/jpeg;base64,{{$data['transit_chart_base64']}}" alt="Transit Chart" style="width: 500px; margin: auto;">
                @endif

                @foreach($data['transits'] as $item)
                <p class="bg-white rounded-xl shadow p-4 text-md">
                    <strong class="text-xl">{{ strtoupper($item['planet']) }} is in {{ $item['sign'] }} in your {{ $item['house'] }}th House</strong><br>
                    {{ $item['interpretation'] }}
                </p>
                @endforeach

            </div>
        </div>
    </div>
</div>

@endsection
