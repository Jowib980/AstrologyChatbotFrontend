@extends('layouts.app')

@section('title', 'Career Prediction')

@section('content')

<!--Breadcrumb start-->
<div class="ast_pagetitle">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>Career services</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="/">home</a></li>
                    <li>//</li>
                    <li><a href="/services">services</a></li>
                    <li>//</li>
                    <li><a href="#">career services</a></li>
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
                <h1><span>Your Finance, Career and Occupation</span></h1>
            </div>
        	
            <div class="space-y-4 text-lg text-gray-800">
                <p><strong>Career:</strong></p>
                <p class="bg-white shadow p-4 rounded-md text-justify text-gray-700">
                    {{ $data['career'] }}
                </p>
                <br>
                <p><strong>Finance:</strong></p>
                <p class="bg-white shadow p-4 rounded-md text-justify text-gray-700">
                    {{ $data['finance'] }}
                </p>
                <br>
                <p><strong>Occupation:</strong></p>
                <p class="bg-white shadow p-4 rounded-md text-justify text-gray-700">
                    {{ $data['occupation'] }}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
