@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!--Slider Start-->
<div class="ast_slider_wrapper style_2 index_horoscope">
	<div class="ast_banner_text">
		<!-- <div class="starfield">
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
		<div class="ast_waves">
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
		</div>
		<div class="ast_waves2">
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
		</div>
		<div class="ast_waves3">
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
		</div> -->
		<div class="container">
			<div class="ast_bannertext_wrapper">
				<h1>There shall be signs in the Sun, the Moon, and the Stars</h1>
				<ul class="ast_toppadder40 ast_bottompadder50">
					<li>horoscopes</li>
					<li>gemstones</li>
					<li>numerology</li>
				</ul>
				<a href="appointment.html" class="ast_btn">make it now</a>
			</div>
		</div>
	</div>
</div>
<!--Slider End-->
<!--About Us Start-->
<div class="ast_about_wrapper ast_about_wrapper02">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2">
				<div class="ast_about_info">
					<h4>know about horoscope</h4>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.The point of using Lorem Ipsum is that it has a more-or less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English will uncover many web sites still in their infancy.The point of using Lorem Ipsum is that it has a more-or less normal distribution.</p>
				</div>
			</div>
			<div class="col-lg-5 col-md-12 col-sm-12 col-12 order-lg-2 order-md-1 order-sm-1 order-1">
				<div class="ast_about_info_img">
					<div class="about_slider">
                        <div class="card c" id="first" style="transform: translate3d(0px, 0px, 0px); opacity: 1; box-shadow: rgba(0, 34, 45, 0.5) 0px 20px 50px; z-index: 8;"><img src="{{ asset('theme/images/content/hr-abt1.jpg') }}" alt="" class="img-responsive"></div>
                        <div class="card a" id="second" style="transform: translate3d(-70px, 55px, -50px); opacity: 0.6; box-shadow: none; z-index: 7;"><img src="{{ asset('theme/images/content/hr-abt2.jpg') }}" alt="" class="img-responsive"></div>

                        <div class="btn-wrap">
                            <a href="javascript:void(0);" class="btn focus" id="one"></a>
                            <a href="javascript:void(0);" class="btn" id="two"></a>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--About Us End-->
<!--Horoscope Start-->
<div class="ast_horoscope_wrapper  ast_toppadder70 ast_bottompadder40">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="ast_horoscope_box">
					<a href="horoscopes_single.html">
					<span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="31.945px" height="31.944px" viewBox="0 0 31.945 31.944" style="enable-background:new 0 0 31.945 31.944;" xml:space="preserve">
    <g>
        <g>
            <path d="M28.819,28.787c0,0,0.504-1.823,0.307-2.479c-0.158-0.524-1.574-3.722-2.414-5.771c-0.254-0.704-0.445-1.321-0.451-1.643
			c-0.02-1.018,1.313-3.609,1.017-5.34c-0.3-1.729-3.4-3.997-2.982-4.354c0.418-0.358,4.318-0.183,4.623-0.597
			c0.307-0.414,0.836-0.896,0.479-1.521c-0.357-0.625-3.82-2.269-4-2.447c-0.179-0.179-0.447-3.28-2.535-2.981
			c0.655,4.146-0.148,5.667-3.699,6.979c-0.507,0.509-0.363,2.429-0.135,3.287c0.835,4.598-5.76,2.563-7.844,2.594
			c-2.134-0.121-3.259-0.371-5.209,0.918c-1.437,0.947-2.51,0.302-3.26-0.323c-1.313,2.062,2.323,1.959,2.125,2.53
			c-0.585,1.138-0.24,3.362-0.063,3.72c0.219,0.438,0.297,1.106,0.229,1.328c-0.268,0.864-2.385,2.938-2.385,4.018
			c0,1.081,0.153,3.714,0.153,3.714s-0.161,1.526,0.161,1.526c0.321,0,2.068-0.06,2.485-0.06s-0.209-1.384-1.065-1.472
			c0-0.329,0.196-3.572,0.196-3.572l2.517-3.025c0,0,0.29,2.968,0.691,3.558c0.402,0.589,1.801,3.261,1.801,3.261
			s-0.088,1.12,0.176,1.12s1.717-0.038,2.244-0.038c0.526,0-0.118-1.447-0.931-1.36c-0.308-0.483-1-3.158-1.205-3.748
			s-0.26-2.646-0.232-3.527c0.026-0.883,0.911,0.652,5.063,0.625c4.15-0.027,5.5-0.625,5.5-0.625s0.904,6.947,0.967,7.45
			c0.084,0.548-0.09,1.141,0.193,1.141c0.284,0,1.967,0.012,2.453,0.012c0.487,0,0.094-1.604-1.041-1.602
			c-0.221-0.534-0.396-3.828-0.396-3.828l1.812-3.327c0,0,2.8,2.846,3.195,3.593c0.396,0.746,0.209,2.756,0.209,2.756
			s-0.373,0.438-0.481,0.725c0.271,0.436,0.955,0.957,1.557,1.561c0.791-0.177,0.849-1.212,0.66-1.802
			C29.115,29.166,28.819,28.787,28.819,28.787z" />
            <path d="M18.631,6.661c2.256-1.216,0.662-3.793,0.186-3.495c0.259,1.016,0.117,2.625-1.371,2.525
			c-1.492-0.101-1.542-3.072,0.943-3.729c2.484-0.655,4.543,4.127-0.407,5.737c3.241,0.239,4.933-1.253,4.595-5.171
			s-8.513-3.122-8.651,1.293C13.784,8.236,17.697,7.079,18.631,6.661z" />
        </g>
    </g>
</svg></span>
					<h4>Aries (Mesh)</h4>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus...</p>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="ast_horoscope_box">
					<a href="horoscopes_single.html">
					<span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="31.994px" height="31.994px" viewBox="0 0 31.994 31.994" style="enable-background:new 0 0 31.994 31.994;" xml:space="preserve">
    <g>
        <path d="M12.48,11.539c-0.609-0.554-3.646-3.475-6.007-3.99C5.746,5.79,4.888,5.747,4.888,5.747s1.373-3.26-4.032-3.089
		c3.369,1.634,2.697,2.041,2.23,3.175C1.162,6.34,2.028,8.872,1.626,9.351C1.226,9.83-0.26,10.338,0.04,11.238
		c0.301,0.9,3.432,1.244,3.947,1.459c1.973,0.771,0.771,3.99,1.415,5.189c0.644,1.201,0.901,3.99,0.901,3.99
		s-0.688,2.147-0.761,2.794c-0.131,0.854,0.008,1.441-0.1,2.042c-0.417,0.499-0.766,1.268-0.766,1.268l1.969,0.031
		c0,0,0.188-0.882,0-1.285c0.043-0.474,1.051-4.312,1.854-4.228c0.397-0.129,1.02,4.312,0.462,4.312
		c-0.67,0.215-0.729,1.327-0.729,1.327l1.771,0.027c0,0-0.057-0.885,0.297-0.953c0.258-0.516,0.136-2.131,0.119-2.333
		s-0.215-2.617-0.215-2.617s2.231-1.587,2.917-1.372c2.961,0.729,8.173-0.985,8.667-1.328c-0.289,0.1,1.071,2.917,1.028,3.389
		s-1.319,2.635-1.553,3.183c-0.715,0.396-0.25,1.193-0.25,1.193l1.598,0.044c0,0,0.02-0.899,0.291-0.903s0.519-1.762,0.857-2.314
		c0.34-0.556,1.631-2.503,1.029-2.731c-0.603-0.228,3.261,4.104,3.561,4.619c0.172,0.293,0.064,1.33-0.061,2.164
		c-0.438,0.262-0.196,1.139-0.196,1.139h1.244c0,0,0.077-0.794,0.325-0.893c0.063-0.177,0.188-0.522,0.188-0.522
		s-0.104-3.712-2.146-5.878c0.856-2.702-0.474-7.335-0.474-7.335s1.674,0.814,1.459,1.501c-0.215,1.89,1.287,1.401,1.158,3.306
		c-0.301,1.544,1.416,2.102,2.146,2.571c0-0.686-0.301-1.973-1.315-2.443c0.157-2.188-1.13-2.745-1.087-3.477
		c0.13-3.604-2.002-2.814-3.174-3.132c-1.066-0.729-10.248-0.215-10.248-0.215S13.521,12.052,12.48,11.539" />
    </g>
</svg></span>
					<h4>Taurus (Vrushabh)</h4>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus...</p>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="ast_horoscope_box">
					<a href="horoscopes_single.html">
					<span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
    <g>
        <g>
            <path d="M24.545,12.646l-2.729-1.035c0,0-5.42,8.021-5.629,10.269c-0.208,2.248,11.586,4.062,13.908,1.3
			c0.926-1.668-2.635-10.63-2.635-10.63L24.545,12.646z" />
            <polygon points="19.461,24.833 21.12,30.467 21.863,30.591 22.73,25.377 		" />
            <polygon points="22.492,30.697 23.236,30.821 26.631,26.027 23.359,25.483 		" />
            <path d="M21.854,10.637c0,0,0.92,0.775,2.672,1.12c0.007,0.001,0.01,0.003,0.014,0.004c0.014,0.003,0.025,0.005,0.041,0.007
			c0.061,0.013,0.121,0.021,0.184,0.031c0.062,0.01,0.12,0.021,0.182,0.029c0.015,0.002,0.027,0.005,0.041,0.007
			c0.004,0.001,0.009-0.001,0.013,0c1.771,0.241,2.892-0.195,2.892-0.195S29.34,14.438,32,11.731
			c-2.589-0.045-2.177-0.859-1.361-1.441c0.812-0.579,3.562-9.901-4.296-7.997c-6.819-4.346-7.233,5.365-6.653,6.176
			c0.582,0.815,0.709,1.72-1.756,0.923C19.574,12.812,21.854,10.637,21.854,10.637z M26.621,6.622
			C26.691,6.196,27.15,5.918,27.646,6c0.496,0.083,0.84,0.494,0.77,0.92c-0.07,0.426-0.529,0.703-1.025,0.621
			C26.895,7.459,26.551,7.047,26.621,6.622z M22.882,6c0.071-0.426,0.529-0.704,1.025-0.621c0.495,0.082,0.84,0.493,0.77,0.92
			c-0.071,0.425-0.53,0.703-1.024,0.62C23.154,6.836,22.812,6.425,22.882,6z" />
            <path d="M7.279,12.663l-2.912-0.18c0,0-2.795,9.269-2.326,11.478C2.51,26.169,14.31,24.4,15.706,21.073
			c0.388-1.868-5.672-9.369-5.672-9.369L7.279,12.663z" />
            <polygon points="6.043,25.811 9.3,30.699 10.048,30.595 9.328,25.361 		" />
            <polygon points="10.679,30.508 11.427,30.407 13.244,24.822 9.959,25.273 		" />
            <path d="M4.113,11.544c0,0,1.108,0.468,2.884,0.275c0.005,0,0.009,0.001,0.013,0.001c0.014-0.001,0.027-0.004,0.041-0.007
			c0.06-0.007,0.121-0.016,0.183-0.023c0.062-0.007,0.123-0.016,0.183-0.025c0.014-0.002,0.027-0.004,0.041-0.006
			c0.004,0,0.008-0.003,0.012-0.004c1.762-0.295,2.703-1.044,2.703-1.044s2.218,2.239,3.954-1.135
			c-2.484,0.727-2.334-0.173-1.729-0.973C13,7.81,12.86-1.909,5.921,2.244c-7.803-2.125-5.313,7.271-4.52,7.873
			C2.2,10.722,2.589,11.548,0,11.52C2.582,14.299,4.113,11.544,4.113,11.544z M8.268,5.396c0.498-0.067,0.949,0.224,1.008,0.65
			C9.334,6.474,8.978,6.876,8.48,6.944S7.531,6.722,7.473,6.295C7.414,5.867,7.77,5.466,8.268,5.396z M4.513,5.913
			C5.01,5.845,5.461,6.136,5.52,6.563C5.579,6.992,5.223,7.393,4.726,7.46c-0.499,0.07-0.95-0.221-1.009-0.649
			C3.658,6.384,4.014,5.981,4.513,5.913z" />
            <polygon points="18.285,16.323 21.464,11.61 16.059,15.582 10.489,11.523 13.785,16.156 16.012,17.21 		" />
        </g>
    </g>
</svg></span>
					<h4>Gemini (Mithun)</h4>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus...</p>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="ast_horoscope_box">
					<a href="horoscopes_single.html">
					<span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
    <g>
        <path d="M32,14.824c-3.197,5.81-6.949,5.456-6.949,5.456s7.333-3.475,5.309-9.536c-0.77,4.613-4.938,7.245-4.938,7.245
		s0.014-0.508,0.076-0.914s2.406-4.344,2.719-5.156c0.312-0.812,1.566-4.368,0.146-4.679c0.664-4.612-2.174-6.165-2.174-6.165
		s1.242,3.771,0.178,3.946c-1.064,0.179-0.844-0.31-2.705-2.351c-0.889,0.312,1.375,3.814,1.375,3.814s-1.51,2.307,0.62,6.432
		c-0.755-0.621-1.134-0.178-1.604-0.026c-0.47,0.15-0.658,0.292-1.322,0.426c-0.666,0.134-3.549-1.642-3.549-1.642l0.898-1.212
		c0.049,0.013,0.096,0.03,0.148,0.03c0.323,0,0.588-0.265,0.588-0.588c0-0.325-0.265-0.588-0.588-0.588
		c-0.324,0-0.588,0.263-0.588,0.588c0,0.083,0.018,0.16,0.047,0.23l-1.57,1.493c0,0-1.09-0.337-2.152-0.337
		c-1.062,0-2.084,0.337-2.084,0.337l-1.571-1.491c0.03-0.07,0.048-0.147,0.048-0.23c0-0.325-0.264-0.588-0.588-0.588
		c-0.325,0-0.588,0.263-0.588,0.588c0,0.323,0.263,0.588,0.588,0.588c0.053,0,0.1-0.019,0.148-0.03l0.898,1.212
		c0,0-2.883,1.774-3.548,1.642c-0.665-0.134-0.854-0.274-1.323-0.426c-0.471-0.15-0.85-0.595-1.604,0.026
		c2.129-4.126,0.62-6.433,0.62-6.433s2.263-3.504,1.375-3.814C6.476,4.713,6.697,5.2,5.633,5.022
		C4.568,4.846,5.811,1.075,5.811,1.075S2.972,2.628,3.637,7.24c-1.419,0.311-0.608,3.146-0.171,4.304
		c0.437,1.158,3.031,5.719,3.031,5.719l0.082,0.729c0,0-4.169-2.632-4.938-7.245c-2.024,6.062,5.309,9.536,5.309,9.536
		S3.197,20.634,0,14.824c0.137,1.668,0.133,4.036,2.839,5.61c2.705,1.574,6.697,2.24,6.697,2.24s-3.416,0.133-5.278,1.463
		c-1.863,1.33-1.464,3.814-1.464,3.814s0.399-1.907,1.952-2.972c1.552-1.064,7.451-1.286,7.451-1.286s-2.085,1.641-2.795,2.927
		c-0.709,1.286,0.932,4.304,0.932,4.304s0-3.104,0.443-4.037c0.443-0.932,3.992-2.396,3.992-2.396s0.56,0.08,1.036,0.103
		c0.06,0.006,0.123,0.006,0.194,0.006c0.071,0,0.135,0,0.194-0.006c0.477-0.021,1.035-0.103,1.035-0.103s3.549,1.464,3.992,2.396
		c0.443,0.934,0.443,4.037,0.443,4.037s1.641-3.018,0.932-4.304s-2.795-2.927-2.795-2.927s5.899,0.222,7.451,1.286
		c1.553,1.062,1.952,2.972,1.952,2.972s0.399-2.484-1.464-3.814c-1.862-1.33-5.278-1.463-5.278-1.463s3.992-0.666,6.697-2.24
		C31.867,18.86,31.863,16.492,32,14.824z" />
    </g>
</svg></span>
					<h4>Cancer (Karka)</h4>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus...</p>
					</a>
				</div>
			</div>


		</div>
	</div>
</div>
<!--Horoscope End-->
<!--Services Start-->
<div class="ast_service_wrapper ast_toppadder70 ast_bottompadder50">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="ast_heading">
					<h1>our <span>services</span></h1>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected hummer.</p>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ast_service_slider">
				<div class="owl-carousel owl-theme">
				    @php
				        $cards = [
				            ['title' => 'Birth Kundali/Chart', 'img' => 'ic_kundali.png', 'desc' => 'Planetary position and your chart...'],

				            ['title' => 'Match Horoscope', 'img' => 'ic_matching.png', 'desc' => 'Match Horoscope (Guna milan with your partner)'],

				            ['title' => 'Your Life Predictions', 'img' => 'ic_predection.png', 'desc' => 'Know about your Nature Love and Career'],

				            ['title' => 'Numerology', 'img' => 'ic_numerology.png', 'desc' => 'Know your lucky number'],

				            ['title' => 'Nakshatra', 'img' => 'nakshatra.png', 'desc' => 'Know about your Nakshatra'],

				            ['title' => 'Nature', 'img' => 'nakshatra.png', 'desc' => 'Know about your Nature'],

				            ['title' => 'Health Index', 'img' => 'ic_health.png', 'desc' => 'Know about your health'],

				            ['title' => 'Love', 'img' => 'love.png', 'desc' => 'Know about your love'],

				            ['title' => 'Gemstone', 'img' => 'ic_gemstone.png', 'desc' => 'Which gemstone will suit you? Which gem should you wear? How to wear gemstone?'],

				            ['title' => 'Career', 'img' => 'career.png', 'desc' => 'Know about your career'],

				            ['title' => 'Kalsarp Dosh/Yog', 'img' => 'kalsarp-dosh.png', 'desc' => 'Know about impact of Kalsharp dosh for whole life.'],

				            ['title' => 'Mangal Dosha', 'img' => 'ic_mangal_dosh.png', 'desc' => 'Do you have Mangal dosha? What are the remedies? What are the impact on your married life?'],

				            ['title' => 'Ascendant', 'img' => 'ascendant.png', 'desc' => 'What does your Ascendant Nakshatra and Moon Sign tell about you.'],

				            ['title' => 'Gochar Phal (Transit Report)', 'img' => 'ic_transit_today.png', 'desc' => 'How does position of current planets impact you?']
				        ];
				    @endphp

				    @foreach ($cards as $card)
				        <div class="item">
				            <div class="ast_service_box">
				                <img src="{{ asset('images/' . $card['img']) }}" alt="Service" class="card-image">
				                <h4>{{ $card['title'] }}</h4>
				                <p>{{ $card['desc'] }}</p>
				                <div class="clearfix"></div>
				            </div>
				        </div>
				    @endforeach
				</div>

			</div>
			</div>
		</div>
	</div>
</div>
<!--Services End-->

@endsection