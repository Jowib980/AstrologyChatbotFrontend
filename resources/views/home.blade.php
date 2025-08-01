@extends('layouts.app')

@section('title', 'Home')

@section('content')

	<div class="min-h-screen flex items-center justify-center p-6">
    	<div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-md">
    		<div class="grid grid-cols-2 gap-2">
    			<div class="card">
    				<div class="card-title" id="birth-kundali-card">
    					<h2 class="text-xl font-semibold text-center p-2">Birth Kundali/Chart</h2>
    				</div>
    				<div class="flex justify-center">
    					<img src="{{ asset('images/ic_kundali.png') }}" class="card-image">
    				</div>
    			</div>
    			<a href="/horoscope">
    				<div class="card">
	    				<div class="card-title">
	    					<h2 class="text-xl font-semibold text-center p-2">Match Horoscope</h2>
	    				</div>
	    				<div class="flex justify-center">
	    					<img src="{{ asset('images/ic_matching.png') }}" class="card-image">
	    				</div>
	    			</div>
    			</a>
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
	});
</script>

