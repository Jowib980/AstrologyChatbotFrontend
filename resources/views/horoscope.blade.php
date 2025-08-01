@extends('layouts.app')

@section('title', 'Kundli')

@section('content')
    <div class="min-h-screen flex items-center justify-center p-6">
    <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-indigo-700 mb-6">Match My Horoscope</h2>

        <form class="space-y-4">
            <div>
                <label class="block text-gray-700 font-medium mb-1">Name</label>
                <input name="name" placeholder="Your Name"
                    id="partnerName"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Date of Birth</label>
                <input name="dob" type="date"
                    id="partnerDOB" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Time of Birth</label>
                <input name="tob" type="time"
                    id="partnerbirthtime"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Place of Birth</label>
                <input type="text" name="place" id="place-input" placeholder="e.g., Delhi" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm"
                    autocomplete="off">
                <ul id="place-suggestions" class="bg-white border rounded shadow-md mt-1 hidden absolute z-50 w-[100px]"></ul>
            </div>


            <button type="submit"
                class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition duration-300 shadow-md" id="Submit">
                Match Horoscope
            </button>
        </form>
    </div>
</div>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {

    $('#place-input').on('input', function () {
        const query = $(this).val();
        if (query.length > 2) {
            $.get('/search-city', { q: query }, function (data) {
                let suggestions = '';
                data.forEach(function (item) {
                    suggestions += `<li class="px-4 py-2 hover:bg-indigo-100 cursor-pointer">${item}</li>`;
                });
                $('#place-suggestions').html(suggestions).removeClass('hidden');
            });
        } else {
            $('#place-suggestions').addClass('hidden');
        }
    });

    $(document).on('click', '#place-suggestions li', function () {
        $('#place-input').val($(this).text());
        $('#place-suggestions').addClass('hidden');
    });

    $(document).click(function (e) {
        if (!$(e.target).closest('#place-input, #place-suggestions').length) {
            $('#place-suggestions').addClass('hidden');
        }
    });


    $('form').on('submit', function (e) {
        e.preventDefault();

        const partnerName = $('#partnerName').val();
        const partnerDOB = $('#partnerDOB').val();
        const partnerbirthtime = $('#partnerbirthtime').val();
        const birthplace = $('#place-input').val();

        const user = {
            name: localStorage.getItem("username"),
            dob: localStorage.getItem("userdob"),
            tob: localStorage.getItem("birthtime"),
            place: localStorage.getItem("birthplace")
        };

        const partner = {
            name: partnerName,
            dob: partnerDOB,
            tob: partnerbirthtime,
            place: birthplace
        };

        $.ajax({
            url: "http://127.0.0.1:5000/api/match_horoscope",
            method: "POST",
            contentType: "application/json",
            data: JSON.stringify({ user, partner }),
            success: function (res) {
                if (res.status === "success") {
                    // Display result in new page or section
                    console.log(res.guna_matching);
                    window.location.href = `/horoscope-result?data=${encodeURIComponent(JSON.stringify(res))}`;
                } else {
                    alert("Error: " + res.message);
                }
            }
        });
    });



});
</script>
