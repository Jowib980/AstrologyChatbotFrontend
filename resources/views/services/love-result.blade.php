@extends('layouts.app')

@section('title', 'Love')

@section('content')


<!--Breadcrumb start-->
<div class="ast_pagetitle">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>Love Prediction services</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="/">home</a></li>
                    <li>//</li>
                    <li><a href="/services">services</a></li>
                    <li>//</li>
                    <li><a href="#">Love Prediction services</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->

<div class="ast_blog_wrapper ast_toppadder80 ast_bottompadder80">
    <div class="container">
        <div class="row">
        	<h2 class="text-2xl font-semibold text-center stroke-current mb-4">Your Love Life</h2>

            <div class="space-y-4 text-lg text-gray-800">
                <h2>LOVE MATTERS:</h2>
                <p class="bg-white shadow p-4 rounded-md text-justify">
                    {{ $data['love_prediction'] }}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
