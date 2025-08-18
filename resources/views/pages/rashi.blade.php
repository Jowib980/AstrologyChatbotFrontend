@extends('layouts.app')

@section('title', $rashi['title'])

@section('content')

<!--Breadcrumb start-->
<div class="ast_pagetitle">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page_title">
                    <h2>{{ strtolower($rashi['title']) }}</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="/">home</a></li>
                    <li>//</li>
                    <li><a href="#">{{ strtolower($rashi['title']) }}</a></li>                
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->

<div class="ast_blog_wrapper ast_toppadder80 ast_bottompadder80">
    <div class="container">
        <div class="row">
            <!-- Left content -->
            <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="ast_blog_box">
                   <div class="ast_blog_img">
                        <img src="{{ $rashi['img'] }}" 
                             alt="{{ $rashi['title'] }}" 
                             title="{{ $rashi['title'] }}">
                    </div>

                    <div class="ast_blog_info">
                        <h3 class="ast_blog_info_heading">{{ $rashi['title'] }}</h3>
                        <p class="ast_blog_info_details">
                            {!! nl2br(e($rashi['description'])) !!}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <!-- <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="sidebar_wrapper">
                    <aside>
                        {!! $rashi['short_description'] !!}
                    </aside>
                </div>  
            </div> -->
        </div>
    </div>
</div>

@endsection
