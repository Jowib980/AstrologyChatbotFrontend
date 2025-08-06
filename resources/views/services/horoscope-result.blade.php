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



	 <div class="min-h-screen p-6 flex justify-center items-center">
        <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-2xl">
        	<h2 class="text-2xl font-semibold text-center text-black-700 mb-4">Guna Milan Result</h2>

		    <table class="w-full border text-sm mb-4">
			    <thead class="bg-gray-100">
			        <tr>
			            <th class="p-2 border">Guna</th>
			            <th class="p-2 border">Max</th>
			            <th class="p-2 border">Obtained</th>
			            <th class="p-2 border">Area</th>
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

			<p class="text-xl text-center font-bold text-black-700">
			    Total Score: {{ $data['guna_matching']['total_score'] }}/{{ $data['guna_matching']['max_score'] }}
			</p>
		</div>
	</div>

@endsection