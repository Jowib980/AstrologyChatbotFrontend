<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Admin Panel')</title>
        <meta name="description" content="@yield('meta_description', 'Default description here')">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/css/bootstrap.min.css" />
        <!-- Add this inside your <head> -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

      <!-- theme css start -->

        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/font-awesome.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/fonts.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/owl.theme.default.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/magnific-popup.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/style.css') }}">
        <!-- Favicon Link -->
        <link rel="shortcut icon" type="image/png" href="{{ asset('theme/images/header/favicon.png') }}">
        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1624167494576352');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1624167494576352&ev=PageView&noscript=1"
        /></noscript>

      <!-- theme css end -->
    
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>   
                @include('layouts.partials.header')
                @yield('content')
                @include('layouts.partials.footer')
            </main>
        </div>
        
        @stack('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Add Flowbite's JS (place before </body>) -->
        <script src="https://unpkg.com/flowbite@2.3.0/dist/flowbite.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/js/bootstrap.min.js"></script>

        <!-- theme js start -->


        <!--Main js file Style--> 
        <script type="text/javascript" src="{{ asset('theme/js/jquery.js') }}"></script> 
        <script type="text/javascript" src="{{ asset('theme/js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('theme/js/jquery.magnific-popup.js') }}"></script>
        <script type="text/javascript" src="{{ asset('theme/js/owl.carousel.js') }}"></script>
        <script type="text/javascript" src="{{ asset('theme/js/jquery.countTo.js') }}"></script>
        <script type="text/javascript" src="{{ asset('theme/js/jquery.appear.js') }}"></script>
        <script type="text/javascript" src="{{ asset('theme/js/custom.js') }}"></script>
        <!--Main js file End-->

        <!-- theme js end -->

    </body>

</html>
