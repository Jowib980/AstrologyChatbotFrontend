@extends('layouts.app')

@section('title', 'Match Horoscope')

@section('content')

<!--Breadcrumb start-->
<div class="ast_pagetitle">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>horoscope services</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>//</li>
                    <li><a href="services.html">services</a></li>
                    <li>//</li>
                    <li><a href="services.html">match horoscope services</a></li>
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
                <h1><span>Match my Horoscope</span></h1>
            </div>
            <!-- Boy Form -->
            <div id="boyFormSection" class="hidden mb-4">
                <h3>Enter Boy's Details</h3>
                <form id="boyForm" class="space-y-4">
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Name</label>
                        <input name="name" placeholder="Boy's Name"
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Date of Birth</label>
                        <input name="dob" type="date" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Time of Birth</label>
                        <input name="tob" type="time" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Place of Birth</label>
                        <input name="place" id="boy-place-input" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm" autocomplete="off">
                        <ul id="boy-place-suggestions" class="suggestion-list hidden"></ul>
                    </div>
                    <input type="hidden" name="gender" value="Male">
                    <button type="submit" class="ast_btn submit_btn">Match Horoscope</button>
                </form>
            </div>

            <!-- Girl Form -->
            <div id="girlFormSection" class="hidden">
                <h3>Enter Girl's Details</h3>
                <form id="girlForm" class="space-y-4">
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Name</label>
                        <input name="name" placeholder="Girl's Name"
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Date of Birth</label>
                        <input name="dob" type="date" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Time of Birth</label>
                        <input name="tob" type="time" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Place of Birth</label>
                        <input name="place" id="girl-place-input" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm" autocomplete="off">
                        <ul id="girl-place-suggestions" class="suggestion-list hidden"></ul>
                    </div>
                    <input type="hidden" name="gender" value="Female">
                    <button type="submit" class="ast_btn submit_btn">Match Horoscope</button>
                </form>
            </div>

            <div id="matchBothBtnWrapper" class="text-center mt-4 hidden">
                <button id="matchBothBtn" class="ast_btn">Match Horoscope</button>
            </div>
        </div>
    </div>
</div>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        const userId = localStorage.getItem("user_id");
        const gender = (localStorage.getItem("gender") || "").toLowerCase(); // Make it case-insensitive
        const isLoggedIn = !!userId;

        // Show correct forms
        if (!isLoggedIn) {
            $('#boyFormSection').removeClass('hidden').css('display', 'block');
            $('#girlFormSection').removeClass('hidden').css('display', 'block');
            $('.submit_btn').addClass('hidden').removeClass('block').css('display', 'none');
            $('#matchBothBtnWrapper').removeClass('hidden').show();
        } else {
            $('#matchBothBtnWrapper').hide();
            if (gender === "male") {
                $('#girlFormSection').removeClass('hidden').css('display', 'block');
                $('#boyFormSection').addClass('hidden').css('display', 'none');
                $('.submit_btn').removeClass('hidden').addClass('block').css('display', 'block');;
            } else if (gender === "female") {
                $('#boyFormSection').removeClass('hidden').css('display', 'block');
                $('#girlFormSection').addClass('hidden').css('display', 'none');
                $('.submit_btn').removeClass('hidden').addClass('block').css('display', 'block');;
            }
        }

        function collectFormData(formId) {
            return {
                user_id : localStorage.getItem("user_id"),
                name: $(`${formId} input[name="name"]`).val(),
                dob: $(`${formId} input[name="dob"]`).val(),
                tob: $(`${formId} input[name="tob"]`).val(),
                place: $(`${formId} input[name="place"]`).val(),
                gender: $(`${formId} input[name="gender"]`).val()
            };
        }

        function callMatchAPI(user, partner) {
            $.ajax({
                url: "http://127.0.0.1:5000/api/match_horoscope",
                method: "POST",
                contentType: "application/json",
                data: JSON.stringify({ user, partner }),
                success: function (res) {
                    if (res.status === "success") {
                        window.location.href = `/horoscope-result?data=${encodeURIComponent(JSON.stringify(res))}`;
                    } else {
                        alert("Error: " + res.message);
                    }
                },
                error: function () {
                    alert("Server error. Please try again.");
                }
            });
        }

        // Handle Boy Form Submit
        $('#boyForm').on('submit', function (e) {
            e.preventDefault();
            const boyData = collectFormData('#boyForm');

            if (!isLoggedIn) {
                localStorage.setItem("boyData", JSON.stringify(boyData));
                const girlData = JSON.parse(localStorage.getItem("girlData") || '{}');
                if (girlData.name) {
                    callMatchAPI(boyData, girlData);
                } else {
                    alert("Please fill girl's details too.");
                }
            } else if (gender === "female") {
                const user = {
                    name: localStorage.getItem("username"),
                    dob: localStorage.getItem("userdob"),
                    tob: localStorage.getItem("birthtime"),
                    place: localStorage.getItem("birthplace"),
                    gender: localStorage.getItem("gender")
                };
                callMatchAPI(user, boyData);
            }
        });

        // Handle Girl Form Submit
        $('#girlForm').on('submit', function (e) {
            e.preventDefault();
            const girlData = collectFormData('#girlForm');

            if (!isLoggedIn) {
                localStorage.setItem("girlData", JSON.stringify(girlData));
                const boyData = JSON.parse(localStorage.getItem("boyData") || '{}');
                if (boyData.name) {
                    callMatchAPI(boyData, girlData);
                } else {
                    alert("Please fill boy's details too.");
                }
            } else if (gender === "male") {
                const user = {
                    name: localStorage.getItem("username"),
                    dob: localStorage.getItem("userdob"),
                    tob: localStorage.getItem("birthtime"),
                    place: localStorage.getItem("birthplace"),
                    gender: localStorage.getItem("gender")
                };
                callMatchAPI(user, girlData);
            }
        });

        $('#matchBothBtn').on('click', function () {
            const boyData = collectFormData('#boyForm');
            const girlData = collectFormData('#girlForm');

            // Simple validation
            if (!boyData.name || !girlData.name) {
                alert("Please fill both boy and girl details.");
                return;
            }

            // Use boy as user, girl as partner
            callMatchAPI(boyData, girlData);
        });


        // Auto-suggestion (reuse as needed)
        function setupPlaceAutoSuggest(inputId, suggestionId) {
            $(`#${inputId}`).on('input', function () {
                const query = $(this).val();
                if (query.length > 2) {
                    $.get('/search-city', { q: query }, function (data) {
                        let suggestions = '';
                        data.forEach(function (item) {
                            suggestions += `<li class="px-4 py-2 hover:bg-indigo-100 cursor-pointer">${item}</li>`;
                        });
                        $(`#${suggestionId}`).html(suggestions).removeClass('hidden');
                    });
                } else {
                    $(`#${suggestionId}`).addClass('hidden');
                }
            });

            $(document).on('click', `#${suggestionId} li`, function () {
                $(`#${inputId}`).val($(this).text());
                $(`#${suggestionId}`).addClass('hidden');
            });

            $(document).click(function (e) {
                if (!$(e.target).closest(`#${inputId}, #${suggestionId}`).length) {
                    $(`#${suggestionId}`).addClass('hidden');
                }
            });
        }

        setupPlaceAutoSuggest("boy-place-input", "boy-place-suggestions");
        setupPlaceAutoSuggest("girl-place-input", "girl-place-suggestions");
    });
</script>

