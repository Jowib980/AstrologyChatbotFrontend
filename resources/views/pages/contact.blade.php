@extends('layouts.app')

@section('title', 'Contact us')

@section('content')

<!--Breadcrumb start-->
<div class="ast_pagetitle">
<div class="ast_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="page_title">
					<h2>contact Us</h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<ul class="breadcrumb">
					<li><a href="/">home</a></li>
					<li>//</li>
					<li><a href="/contact">contact us</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end-->
<!--Content Us Start-->
<div class="ast_contact_wrapper ast_toppadder70 ast_bottompadder50">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="ast_heading">
					<h1>get in <span>touch</span></h1>
					<p>Have questions about your birth chart, horoscope, or our astrology services? We’re here to guide you every step of the way. </p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-12">
				<div class="ast_contact_info">
					<span><i class="fa fa-phone" aria-hidden="true"></i></span>
					<h4>phone</h4>
					<p>+91 99149 74653</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-12">
				<div class="ast_contact_info">
					<span><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
					<h4>email</h4>
					<p><a href="#">office@jowibtechnologies.com</a></p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-12">
				<div class="ast_contact_info">
					<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
					<h4>address</h4>
					<p>Prosperity Square, D-185, Phase 8B, Industrial Area, Sector 74, SAS Nagar, Punjab 160055</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Content Us End-->
<!--Content Us Start-->
<div class="ast_mapnform_wrapper ast_toppadder70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="ast_heading">
					<h1>find & message <span>here</span></h1>
					<p>Connect with us today and take the first step toward understanding your true path. Your journey to clarity begins here — let’s talk.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="ast_mapnform_wrapper ast_toppadder70">
		<div class="container">
			<div class="row">
				<div class="ast_contact_map">
					<div class="ast_contact_form">
						<form id="contact-form">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<label>first name</label>
								<input type="text" name="first_name" class="require">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<label>last name</label>
								<input type="text" name="last_name" class="require">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<label>email</label>
								<input type="text" name="email" class="require" data-valid="email" data-error="Email should be valid.">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<label>subject</label>
								<input type="text" name="subject" class="require">
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<label>message</label>
								<textarea rows="5" name="message" class="require"></textarea>
							</div>
							<div class="response"></div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<button class="ast_btn pull-right submitForm" type="submit">send</button>
							</div>
							</div>
						</form>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.2644286889!2d76.68380687453585!3d30.710965786686177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fefd258b2552d%3A0x5d9163ea066df9b5!2sJowib%20Technologies!5e0!3m2!1sen!2sin!4v1754565344029!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Content Us End-->

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function () {
		$('#contact-form').on('submit', function (e) {
			e.preventDefault();

			const formData = {
				first_name: $('input[name="first_name"]').val(),
				last_name: $('input[name="last_name"]').val(),
				email: $('input[name="email"]').val(),
				subject: $('input[name="subject"]').val(),
				message: $('textarea[name="message"]').val()
			};

			$.ajax({
				url: "http://127.0.0.1:5000/api/contact",
				type: "POST",
				contentType: "application/json",
				data: JSON.stringify(formData),
				success: function (response) {
					$('.response').html(`<p style="color:green;">${response.message}</p>`);
					$('#contact-form')[0].reset();
				},
				error: function (xhr) {
					$('.response').html(`<p style="color:red;">Something went wrong. Try again.</p>`);
				}
			});
		});
	});
</script>
