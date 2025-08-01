@extends('layouts.app')

@section('title', 'Home')

@section('content')

	<div class="min-h-screen flex items-center justify-center p-6">
    	<div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-xxl">
    		<div class="grid grid-cols-3 gap-2">
    			<div class="card cursor-pointer" id="birth-kundali-card">
    				<div class="card-title">
    					<h2 class="text-xl font-semibold text-center p-2">Birth Kundali/Chart</h2>
    				</div>
    				<div class="flex justify-center">
    					<img src="{{ asset('images/ic_kundali.png') }}" class="card-image">
    				</div>
    				<p class="p-2 font-semibold text-md text-center">Planetary position and your chart...</p>
    			</div>
    			<a href="/horoscope">
    				<div class="card cursor-pointer">
	    				<div class="card-title">
	    					<h2 class="text-xl font-semibold text-center p-2">Match Horoscope</h2>
	    				</div>
	    				<div class="flex justify-center">
	    					<img src="{{ asset('images/ic_matching.png') }}" class="card-image">
	    				</div>
	    				<p class="p-2 font-semibold text-md text-center">Match Horoscope  (Guna milan with your partner)</p>
	    			</div>
    			</a>
    			<div class="card cursor-pointer" id="prediction-card">
    				<div class="card-title">
    					<h2 class="text-xl font-semibold text-center p-2">Your Life Predictions</h2>
    				</div>
    				<div class="flex justify-center">
    					<img src="{{ asset('images/ic_predection.png') }}" class="card-image">
    				</div>
    				<p class="p-2 font-semibold text-md text-center">Know about your Nature Love  and Career </p>
    			</div>
    			<div class="card cursor-pointer" id="numerology-card">
    				<div class="card-title">
    					<h2 class="text-xl font-semibold text-center p-2">Numerology </h2>
    				</div>
    				<div class="flex justify-center">
    					<img src="{{ asset('images/ic_numerology.png') }}" class="card-image">
    				</div>
    				<p class="p-2 font-semibold text-md text-center">Know your lucky number </p>
    			</div>
    			<div class="card cursor-pointer" id="numerology-card">
    				<div class="card-title">
    					<h2 class="text-xl font-semibold text-center p-2">Nakshatra </h2>
    				</div>
    				<div class="flex justify-center">
    					<img src="{{ asset('images/nakshatra.png') }}" class="card-image">
    				</div>
    				<p class="p-2 font-semibold text-md text-center">Know about your Nakshatra</p>
    			</div>
    		</div>
    	</div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
	document.addEventListener('DOMContentLoaded', function () {
	    const userName = localStorage.getItem("username");
	    const userDOB = localStorage.getItem("userdob");
	    const birthtime = localStorage.getItem("birthtime");
	    const birthplace = localStorage.getItem("birthplace");
	    const gender = localStorage.getItem("gender");

	    $('#birth-kundali-card').on('click', function () {
	        if (!userName || !userDOB || !birthtime || !birthplace || !gender) {
	            alert("Missing user data. Please fill the form first.");
	            return;
	        }

	        // Create a dynamic form
	        const form = $('<form>', {
	            method: 'POST',
	            action: '/kundali'
	        });

	        // CSRF Token
	        form.append($('<input>', {
	            type: 'hidden',
	            name: '_token',
	            value: '{{ csrf_token() }}'
	        }));

	        // Add user data
	        form.append($('<input>', { type: 'hidden', name: 'name', value: userName }));
	        form.append($('<input>', { type: 'hidden', name: 'dob', value: userDOB }));
	        form.append($('<input>', { type: 'hidden', name: 'tob', value: birthtime }));
	        form.append($('<input>', { type: 'hidden', name: 'place', value: birthplace }));
	        form.append($('<input>', { type: 'hidden', name: 'gender', value: gender }));

	        // Append and submit
	        $('body').append(form);
	        form.submit();
	    });

	    $('#prediction-card').on('click', function () {
	        if (!userName || !userDOB || !birthtime || !birthplace || !gender) {
	            alert("Missing user data. Please fill the form first.");
	            return;
	        }

	        // Create a dynamic form
	        const form = $('<form>', {
	            method: 'POST',
	            action: '/prediction'
	        });

	        // CSRF Token
	        form.append($('<input>', {
	            type: 'hidden',
	            name: '_token',
	            value: '{{ csrf_token() }}'
	        }));

	        // Add user data
	        form.append($('<input>', { type: 'hidden', name: 'name', value: userName }));
	        form.append($('<input>', { type: 'hidden', name: 'dob', value: userDOB }));
	        form.append($('<input>', { type: 'hidden', name: 'tob', value: birthtime }));
	        form.append($('<input>', { type: 'hidden', name: 'place', value: birthplace }));

	        // Append and submit
	        $('body').append(form);
	        form.submit();
	    });

	    $('#numerology-card').on('click', function () {
	        if (!userName || !userDOB || !birthtime || !birthplace || !gender) {
	            alert("Missing user data. Please fill the form first.");
	            return;
	        }

	        // Create a dynamic form
	        const form = $('<form>', {
	            method: 'POST',
	            action: '/numerology'
	        });

	        // CSRF Token
	        form.append($('<input>', {
	            type: 'hidden',
	            name: '_token',
	            value: '{{ csrf_token() }}'
	        }));

	        // Add user data
	        form.append($('<input>', { type: 'hidden', name: 'name', value: userName }));
	        form.append($('<input>', { type: 'hidden', name: 'dob', value: userDOB }));
	        form.append($('<input>', { type: 'hidden', name: 'tob', value: birthtime }));
	        form.append($('<input>', { type: 'hidden', name: 'place', value: birthplace }));

	        // Append and submit
	        $('body').append(form);
	        form.submit();
	    });
	});
</script>

