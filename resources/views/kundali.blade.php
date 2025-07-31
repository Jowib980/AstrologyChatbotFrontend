@extends('layouts.app')

@section('title', 'Kundli')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-indigo-200 to-purple-300 p-6">
    <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-indigo-700 mb-6">Generate Your Kundali</h2>

        <form class="space-y-4">
            <div>
                <label class="block text-gray-700 font-medium mb-1">Name</label>
                <input name="name" placeholder="Your Name"
                    id="userName"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Gender</label>
                <select name="gender"
                    id="gender" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Date of Birth</label>
                <input name="dob" type="date"
                    id="userDOB" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Time of Birth</label>
                <input name="tob" type="time"
                    id="birthtime"
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
                Submit
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
        const userName = $('#userName').val();
        const userDOB = $('#userDOB').val();
        const birthtime = $('#birthtime').val();
        const birthplace = $('#place-input').val();
        const gender = $('#gender').val();

        if (userName) localStorage.setItem("username", userName);
        if (userDOB) localStorage.setItem("userdob", userDOB);
        if (birthtime) localStorage.setItem("birthtime", birthtime);
        if (birthplace) localStorage.setItem("birthplace", birthplace);
        if (gender) localStorage.setItem("gender", gender);

        window.location.href = '/home';

    });


});
</script>
