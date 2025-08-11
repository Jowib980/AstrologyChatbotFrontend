@extends('layouts.app')

@section('title', 'About us')

@section('content')

<!--Breadcrumb start-->
<div class="ast_pagetitle">
<div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>About Us</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="/">home</a></li>
                    <li>//</li>
                    <li><a href="/about">About us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->
<!--About Us Start-->
<div class="ast_about_wrapper ast_about_wrapper_01">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                <div class="ast_about_info_img">
                    <img src="{{ asset('theme/images/content/about.png') }}" alt="About">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                <div class="ast_about_info">
                    <h4>know about astrology</h4>
                    <p>Astrology is more than prediction—it’s also a tool for self-discovery. It helps people understand their strengths, weaknesses, emotional patterns, and spiritual purpose. By studying one’s chart, individuals can align their actions with cosmic rhythms, improve relationships, choose favorable times for important events, and navigate challenges with greater awareness.</p>
                    <p>Astrology also studies the planets and their symbolic meanings. For example, the Sun represents vitality and self-expression, the Moon governs emotions, Mercury influences communication, Venus relates to love and beauty, and Mars signifies action and drive. The slower-moving planets like Jupiter, Saturn, Uranus, Neptune, and Pluto affect long-term trends, generational traits, and major life transformations.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--About Us End-->
<!--WhyWe Us Start-->
<div class="ast_whywe_wrapper ast_toppadder70 ast_bottompadder70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ast_heading">
                    <h1>why  <span>choose us</span></h1>
                    <p>We combine ancient astrological wisdom with modern accuracy to provide clear, personalized, and reliable guidance. Our services are crafted to help you understand your unique cosmic blueprint, make informed life decisions in every aspect of life.</p>
                </div>
            </div>
            <div class="ast_whywe_info row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="ast_whywe_info_box">
                        <span><img src="{{ asset('theme/images/content/ww_1.png') }}" alt=""></span>
                        <div class="ast_whywe_info_box_info">                           
                            <p>90+ Expert Astrologers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="ast_whywe_info_box">
                        <span><img src="{{ asset('theme/images/content/ww_2.png') }}" alt=""></span>
                        <div class="ast_whywe_info_box_info">
                            <p>24x7, 365 Days Availability</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="ast_whywe_info_box">
                        <span><img src="{{ asset('theme/images/content/ww_3.png') }}" alt=""></span>
                        <div class="ast_whywe_info_box_info">
                            <p>Instant Access Worldwide</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="ast_whywe_info_box">
                        <span><img src="{{ asset('theme/images/content/ww_4.png') }}" alt=""></span>
                        <div class="ast_whywe_info_box_info">
                            <p>Accurate Remedial Solutions</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="ast_whywe_info_box">
                        <span><img src="{{ asset('theme/images/content/ww_5.png') }}" alt=""></span>
                        <div class="ast_whywe_info_box_info">
                            <p>Privacy Guaranteed</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="ast_whywe_info_box">
                        <span><img src="{{ asset('theme/images/content/ww_6.png') }}" alt=""></span>
                        <div class="ast_whywe_info_box_info">
                            <p>Trusted by million+ clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--WhyWe Us End-->
<!--Timer Section start -->
<div class="ast_timer_wrapper ast_toppadder70 ast_bottompadder40">
<div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ast_heading">
                    <h1>now <span>we have</span></h1>
                    <p>We bring together the wisdom of ancient astrology and the precision of modern calculations to offer you accurate, insightful, and life-changing guidance.</p>
                </div>
            </div>
            <div class="ast_counter_wrapper row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="ast_counter">
                        <span><img src="{{ asset('theme/images/content/timer_1.png') }}" alt="timer"></span>
                        <h2 class="timer" data-from="0" data-to="200" data-speed="5000"></h2>
                        <h4>Offices Worldwide</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="ast_counter">
                        <span><img src="{{ asset('theme/images/content/timer_2.png') }}" alt="timer"></span>
                        <h2 class="timer" data-from="0" data-to="800" data-speed="5000"></h2>
                        <h4>skilled Astrologers</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="ast_counter">
                        <span><img src="{{ asset('theme/images/content/timer_3.png') }}" alt="timer"></span>
                        <h2 class="timer" data-from="0" data-to="60" data-speed="5000"></h2>
                        <h4>Countries Covered</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="ast_counter">
                        <span><img src="{{ asset('theme/images/content/timer_4.png') }}" alt="timer"></span>
                        <h2 class="timer" data-from="0" data-to="30" data-speed="5000"></h2>
                        <h4>Years of Experiences</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Timer Section end -->
<!-- Testimonials Start-->
<div class="ast_testimonial_wrapper ast_toppadder70 ast_bottompadder70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ast_heading">
                    <h1>what client<span> says</span></h1>
                    <p>We are proud to have touched countless lives through the power of astrology. From accurate predictions to life-changing guidance, our clients share their stories of clarity, confidence, and transformation.</p>
                </div>
            </div>
            <div class="col-lg-10 col-md-12 col-sm-12 col-12 offset-lg-1 offset-md-0 offset-sm-0 offset-0">
                <div class="ast_testimonials_slider">
                    <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="ast_testimonials_slider_box">
                            <img src="{{ asset('theme/images/content/tm2.jpg') }}" alt="Testimonial">
                            <div class="ast_testimonials_slider_box_text">
                                <p>“The birth chart reading I received was incredibly accurate. It felt like the astrologer knew my life inside out. I’ve been able to make better decisions since then.”</p>
                                <h4>Charlyn Stewart, <span>Astrologer</span></h4>
                            </div>
                        </div>                      
                    </div>
                    <div class="item">
                        <div class="ast_testimonials_slider_box">
                            <img src="{{ asset('theme/images/content/tm1.jpg') }}"" alt="Testimonial">
                            <div class="ast_testimonials_slider_box_text">
                                <p>“Their tarot reading brought me so much clarity about my career path. The guidance was spot on, and I feel more confident moving forward.”</p>
                                <h4>Kenneth Page, <span>tarot reader</span></h4>
                            </div>                  
                        </div>                      
                    </div>
                    <div class="item">
                        <div class="ast_testimonials_slider_box">
                            <img src="{{ asset('theme/images/content/tm3.jpg') }}"" alt="Testimonial">
                            <div class="ast_testimonials_slider_box_text">
                                <p>“I was amazed by how detailed and personal my horoscope analysis was. It felt more like a life guide than just a prediction.”</p>
                                <h4>Louis Robinson, <span>horoscoper</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ast_testimonials_slider_box">
                            <img src="{{ asset('theme/images/content/tm4.jpg') }}"" alt="Testimonial">
                            <div class="ast_testimonials_slider_box_text">
                                <p>“The counseling session based on my planetary positions gave me new hope in my relationship. It was both comforting and inspiring.”</p>
                                <h4>Judith Tierney, <span>psychologist</span></h4>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials End-->

@endsection