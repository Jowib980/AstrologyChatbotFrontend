@extends('layouts.app')

@section('title', 'Match Horoscope')

@section('content')


<div id="loader" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
    <div class="sk-chase">
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
    </div>
</div>


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
                    <li><a href="/">home</a></li>
                    <li>//</li>
                    <li><a href="/services">services</a></li>
                    <li>//</li>
                    <li><a href="#">match horoscope services</a></li>
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
                <h1><span>Match Horoscope</span></h1>
            </div>

            <div class="text-center mb-6">
                <button id="selfBtn" class="ast_btn mr-2">Self</button>
                <button id="otherBtn" class="ast_btn">Another Person</button>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
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
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
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

        // Hide everything at first
        $('#boyFormSection, #girlFormSection, #matchBothBtnWrapper').hide();

        let currentMode = null;

        // Click: Self

        $('#selfBtn').on('click', function () {
            currentMode = 'self';
            $('#matchBothBtnWrapper').hide();
            if (isLoggedIn) {
                if (gender === "male") {
                    $('#girlFormSection').show();
                    $('#boyFormSection').hide();
                } else if (gender === "female") {
                    $('#boyFormSection').show();
                    $('#girlFormSection').hide();
                }
                $('.submit_btn').show();
            } else {
                Swal.fire('Please log in to use Self mode.');
            }
        });

        // Click: Another Person
        $('#otherBtn').on('click', function () {
            currentMode = 'another';
            $('#boyFormSection, #girlFormSection').show();
            $('.submit_btn').hide();
            $('#matchBothBtnWrapper').show();
        });


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

        function showToast(type, message) {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: type, // 'success', 'error', 'warning', 'info', 'question'
                title: message,
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
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
            $('#loader').removeClass('hidden');
            $.ajax({
                url: "https://astrology.jowibtechnologies.com/api/match_horoscope",
                method: "POST",
                contentType: "application/json",
                data: JSON.stringify({ user, partner }),
                success: function (res) {
                    $('#loader').addClass('hidden');
                    if (res.status === "success") {
                        showToast('success', 'Generate hooscope successfully!');
                        window.location.href = `/horoscope-result?match_id=${res.match_id}`;
                    } else {
                        showToast('error', "Error: " + res.message);
                    }
                },
                error: function () {
                    $('#loader').addClass('hidden');
                   showToast('error', 'Please try again!');
                }
            });
        }

        // Handle Boy Form Submit
        $('#boyForm').on('submit', function (e) {
            e.preventDefault();
            const boyData = collectFormData('#boyForm');

            if (!isLoggedIn) {

                if (currentMode === 'another') {

                    localStorage.setItem("boyData", JSON.stringify(boyData));
                    const girlData = JSON.parse(localStorage.getItem("girlData") || '{}');
                    if (girlData.name) {
                        callMatchAPI(boyData, girlData);
                    } else {
                        showToast('error', "Please fill girl's details too.");
                    }
                }
            } else if (gender === "female") {
                const user = {
                    user_id: localStorage.getItem("user_id"),
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
                if (currentMode === 'another') {
                    localStorage.setItem("girlData", JSON.stringify(girlData));
                    const boyData = JSON.parse(localStorage.getItem("boyData") || '{}');
                    if (boyData.name) {
                        callMatchAPI(boyData, girlData);
                    } else {
                        showToast('error', "Please fill boy's details too.");
                    }
                }
            } else if (gender === "male") {
                const user = {
                    user_id: localStorage.getItem("user_id"),
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
                showToast('error', "Please fill both boy and girl details.");
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

