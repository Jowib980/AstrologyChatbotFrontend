@extends('layouts.app')

@section('title', 'Services')

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
                    <h2>services</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="/">home</a></li>
                    <li>//</li>
                    <li><a href="/services">services</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->

    <div class="ast_service_wrapper ast_toppadder70 ast_bottompadder50">
        <div class="container">
            <div class="row">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2" id="services-carousel">

                </div>
            </div>
        </div>
    </div>

    
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

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Load services from API and render cards
    axios.get('https://astrology.jowibtechnologies.com/api/services')
        .then(function (response) {
            let services = response.data;
            let html = '';

            services.forEach(s => {
                let openLink = s.link ? `<a href="${s.route}">` : '';
                let closeLink = s.link ? `</a>` : '';
                let extraClass = s.class ? s.class : '';
                let idAttr = s.card_id ? `id="${s.card_id}"` : '';
                let dataFields = s.fields ? `data-fields='${JSON.stringify(s.fields).replace(/'/g, "&apos;")}'` : '';

                html += `
                    ${openLink}
                    <div class="ast_service_box cursor-pointer ${extraClass}" ${idAttr} data-route="${s.route}" ${dataFields}>
                        <div>
                            <img src="/images/${s.img}" alt="${s.title}" class="card-image" />
                            <h4>${s.title}</h4>
                            <p>${s.description}</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    ${closeLink}
                `;
            });

            document.getElementById('services-carousel').innerHTML = html;
        })
        .catch(function (error) {
            console.error('Error fetching services:', error);
        });

    const userData = {
        user_id: localStorage.getItem("user_id"),
        name: localStorage.getItem("username"),
        dob: localStorage.getItem("userdob"),
        tob: localStorage.getItem("birthtime"),
        place: localStorage.getItem("birthplace"),
        gender: localStorage.getItem("gender")
    };

    const isLoggedIn = !!userData.user_id;

    function showToast(type, message) {
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: type,
            title: message,
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        });
    }

    function createAndSubmitForm(route, fields) {
        $('#loader').removeClass('hidden');

        const form = $('<form>', { method: 'POST', action: route });

        form.append($('<input>', {
            type: 'hidden',
            name: '_token',
            value: '{{ csrf_token() }}'
        }));

        fields.forEach(field => {
            form.append($('<input>', {
                type: 'hidden',
                name: field,
                value: userData[field] || ''
            }));
        });

        $('body').append(form);
        form.submit();
    }

    // Use event delegation to handle click on dynamically added .ast_service_box
    $('#services-carousel').on('click', '.ast_service_box', function () {
        if (!isLoggedIn) {
            showToast('error', 'Please login first!');
            return;
        }

        const route = $(this).data('route');
        const fields = $(this).data('fields') || [];
        if (route) {
            createAndSubmitForm(route, fields);
        }
    });
});
</script>
