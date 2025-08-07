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
                    <h2>Mangal services</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>//</li>
                    <li><a href="services.html">services</a></li>
                    <li>//</li>
                    <li><a href="services.html">mangal services</a></li>
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
                <h1><span>Mangal Dosha</span></h1>
            </div>
        	
            <div class="space-y-4 text-lg text-gray-800 mt-4">
                <div class="flex flex-start">
                   
                    <img src="{{asset('/images/ic_mangal_dosh.png')}}" class="card-image" />
                    
                    <div class="details">
                        @if($data['severity'] != 'None')
                            <strong class="text-xl">Person is Manglik({{$data['severity']}}).</strong>
                        @else
                            <strong class="text-xl">Person is not Manglik</strong>
                        @endif
                        <br>
                        <span>{{$data['details']}}</span>
                    </div>
                </div>
                
                    <p>Mangal Dosha is considered to create hurdles in the married life of a person.

                    It is considered that if a manglik person marries to another manglik person then the manglik dosha gets cancelled and has no effect.</p>

                    <h3 class="text-2xl font-semibold mb-2">Some Remedies (in case Mangal Dosha is present)</h3>

                    <div class="bg-white shadow rounded-xl p-4">
                        <p class="mt-2"><strong>Remedies (needs to be performed before marriage)</strong></p>

                        <p>Kumbha Vivah, Vishnu Vivah and Ashwatha Vivah are the most popular remedies for Mangal Dosha. Ashwatha vivaha means the marriage with peepal or banana tree and cutting the tree after that. Kumbha Vivah, also called Ghata Vivaha, means marriage with a pot and breaking it after that.</p>
                    </div>

                    <div class="bg-white shadow rounded-xl p-4">
                        <p class="mt-2"><strong>Remedies (can be performed after marriage)</strong></p>

                        <ul>
                            <li>- Keep Kesariya Ganapati (Orange coloured idol of Lord Ganesha) in worship room and worship daily.</li>
                            <li>- Worship Lord Hanuman by reciting Hanuman Chalisa daily.</li>
                            <li>- Mahamrityunjaya paath (recitation of Mahamrityunjaya mantra).</li>
                        </ul>
                    </div>

                    <div class="bg-white shadow rounded-xl p-4">
                        <p class="mt-2"><strong>Remedies (based on Lal Kitab, can be performed after marriage)</strong></p>

                        <ul>
                            <li>- Feed birds with something sweet.</li>
                            <li>- Keep ivory (Haathi Daant) at home.</li>
                            <li>- Worship banyan tree with milk mixed with something sweet.</li>
                        </ul>
                    </div>

                    <p class="mt-2"><strong>Note :</strong> We strongly recommend you to consult an astrologer before performing these remedies by your own.</p>
            </div>
        </div>
    </div>
</div>

@endsection
