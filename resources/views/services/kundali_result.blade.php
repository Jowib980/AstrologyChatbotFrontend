@extends('layouts.app')

@section('title', 'Kundli Chart')

@section('content')

<!--Breadcrumb start-->
<div class="ast_pagetitle">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>kundli services</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="/">home</a></li>
                    <li>//</li>
                    <li><a href="/services">services</a></li>
                    <li>//</li>
                    <li><a href="#">kundli services</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->

<div class="ast_blog_wrapper ast_toppadder80 ast_bottompadder80">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-12">
                <div class="ast_blog_box">
                    <div class="ast_blog_img">
                        <img src="{{ asset('theme/images/content/horoscopes_single.jpg') }}" alt="Blog" title="Blog">
                    </div>
                    <div class="ast_blog_info">
                        <h3 class="ast_blog_info_heading">Kundli Chart.</h3>
                        <p class="ast_blog_info_details">Lagna chart is the main birth chart. It shows your life in detail. Navamsa funnels down the results after the second half of your life. Basically Navamsa is studied to know the life after your marriageable age.In essence, the Lagna chart gives you the big picture, while the Navamsa chart adds the details and nuances, especially when analyzing marriage and spiritual evolution.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                <div class="sidebar_wrapper">
                    <aside class="widget widget_search">
                        <p><strong class="text-black-600">Name:</strong> {{ $data['lagna_chart']['name'] ?? '' }}</p>
                        <p><strong class="text-black-600">Gender:</strong> {{ $data['lagna_chart']['gender'] ?? '' }}</p>
                        <p><strong class="text-black-600">Date of Birth:</strong> {{ $data['lagna_chart']['dob'] ?? '' }}</p>
                        <p><strong class="text-black-600">Time of Birth:</strong> {{ $data['lagna_chart']['tob'] ?? '' }}</p>
                        <p><strong class="text-black-600">Place:</strong> {{ $data['lagna_chart']['place'] ?? '' }}</p>
                    </aside>
                    <aside class="widget widget_search">

                        @if(!empty($data['lagna_chart']['predictions']) && is_array($data['lagna_chart']['predictions']))
                            <div class="mt-6">
                                <h3 class="text-xl font-semibold text-black-700 mb-2">🔮 Predictions</h3>
                                <ul class="list-disc list-inside space-y-1 text-gray-700">
                                    @foreach ($data['lagna_chart']['predictions'] as $prediction)
                                        <li>{{ $prediction }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </aside>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-8 w-full">
                <h2 class="text-3xl font-bold text-black-700 mb-6 text-center"> Your Kundli Report</h2>

                <div class="space-y-4 text-gray-800">
                    
                    <div class="grid grid-cols-2 gap-2">
                            @if(!empty($data['lagna_chart']['chart_image_base64']))
                                <div class="mt-6">
                                    <h3 class="text-xl font-bold text-black-700 mb-3 text-center">🌀 Lagna Chart</h3>
                                    <img src="data:image/jpeg;base64,{{ $data['lagna_chart']['chart_image_base64']
                                    }}"
                                        alt="Lagna Chart"
                                        class="mx-auto rounded-lg border shadow-md max-w-md w-full">
                                </div>
                            @endif

                            @if(!empty($data['navamsa_chart']['chart_image_base64']))
                                <div class="mt-6">
                                    <h3 class="text-xl font-bold text-black-700 mb-3 text-center">🌙 Navamsa Chart</h3>
                                    <img src="data:image/jpeg;base64,{{
                                        $data['navamsa_chart']['chart_image_base64'] }}"
                                        alt="Navamsa Chart"
                                        class="mx-auto rounded-lg border shadow-md max-w-md w-full">
                                </div>
                            @endif
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    </div>


@endsection
