<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Document Title -->
        <title>@yield('title', 'Expedite Dashboard')</title>

        <!-- ===============================================-->
        <!--    Favicons-->
        <!-- ===============================================-->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/funnel/favicon.svg') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/funnel/favicon.svg') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/funnel/favicon.svg') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/funnel/favicon.svg') }}">
        <link rel="manifest" href="{{ asset('assets/images/favicons/manifest.json') }}">
        <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicons/mstile-150x150.png') }}">
        <meta name="theme-color" content="#ffffff">
        <script src="{{ asset('assets/js/config.js') }}"></script>
        <script src="{{ asset('assets/vendors/simplebar/simplebar.js') }}"></script>

        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
            rel="stylesheet">

        <link href="{{ asset('assets/vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
        <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
        <link href="{{ asset('assets/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
        <link href="{{ asset('assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">

        <script>
            var isRTL = JSON.parse(localStorage.getItem('isRTL'));
            if (isRTL) {
                var linkDefault = document.getElementById('style-default');
                var userLinkDefault = document.getElementById('user-style-default');
                linkDefault.setAttribute('disabled', true);
                userLinkDefault.setAttribute('disabled', true);
                document.querySelector('html').setAttribute('dir', 'rtl');
            } else {
                var linkRTL = document.getElementById('style-rtl');
                var userLinkRTL = document.getElementById('user-style-rtl');
                linkRTL.setAttribute('disabled', true);
                userLinkRTL.setAttribute('disabled', true);
            }
        </script>


        <!-- Meta Description -->
        @yield('meta')

        <!-- Vite CSS -->
        @vite(['resources/js/app.js'])

        <!-- Livewire Styles -->
        @livewireStyles

        <!-- Additional styles -->
        @stack('style')
    </head>

    <body>
        <main class="main" id="top">
            <div class="container" data-layout="container">
                @include('layouts.partials.sidebar')
                <div class="content">
                    @include('layouts.partials.navbar')
                    @yield('content')
                    @include('layouts.partials.footer')
                </div>
            </div>
        </main>

        @includeIf('layouts.partials.customizer')

        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/popper/popper.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/anchorjs/anchor.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/is/is.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/lodash/lodash.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/listjs/list.min.js') }}"></script>
        <script src="{{ asset('assets/js/theme.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <!-- Livewire Scripts -->
        @livewireScripts
        @include('layouts.partials.alert')

        <!-- Additional scripts -->
        @stack('script')
    </body>

</html>
