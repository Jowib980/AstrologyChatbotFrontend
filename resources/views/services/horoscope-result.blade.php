@extends('layouts.app')

@section('title', 'Match Horoscope')

@section('content')

	@php
		$data = json_decode(urldecode(request()->query('data')), true);
	@endphp

<!--Breadcrumb start-->
<div class="ast_pagetitle">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>horoscope services</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>//</li>
                    <li><a href="services.html">services</a></li>
                    <li>//</li>
                    <li><a href="services.html">match horoscope services</a></li>
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
                <h1>Guna Milan Result</h1>
            </div>
        	
		    <table class="w-full border text-sm mb-4 text-center shadow">
			    <thead class="bg-gray-100">
			        <tr>
			            <th class="p-2 border text-black">Guna</th>
			            <th class="p-2 border text-black">Max</th>
			            <th class="p-2 border text-black">Obtained</th>
			            <th class="p-2 border text-black">Area</th>
			        </tr>
			    </thead>
			    <tbody>
			        @foreach($data['guna_matching']['kootas'] as $koota)
			            <tr>
			                <td class="p-2 border">{{ $koota['koota'] }}</td>
			                <td class="p-2 border">{{ $koota['max'] }}</td>
			                <td class="p-2 border">{{ $koota['score'] }}</td>
			                <td class="p-2 border">{{ $koota['description'] }}</td>
			            </tr>
			        @endforeach
			    </tbody>
			</table>

			<p class="text-2xl text-center font-bold stroke-current p-4">
			    Total Score: {{ $data['guna_matching']['total_score'] }}/{{ $data['guna_matching']['max_score'] }}
			</p>
		</div>
	</div>
</div>

@endsection