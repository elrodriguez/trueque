<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--====== Title ======-->
        <title>TRUEQUE | Inicio</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{ url('assets/images/favicon.png') }}" type="image/png">

        <!--====== Tiny Slider CSS ======-->
        <link rel="stylesheet" href="{{ url('assets/css/tiny-slider.css') }}">

        <!--====== Line Icons CSS ======-->
        <link rel="stylesheet" href="{{ url('assets/css/LineIcons.css') }}">

        <!--====== Material Design Icons CSS ======-->
        <link rel="stylesheet" href="{{ url('assets/css/materialdesignicons.min.css') }}">

        <!--====== Bootstrap CSS ======-->
        <link rel="stylesheet" href="{{ url('assets/css/bootstrap-5.0.0-beta1.min.css') }}">

        <!--====== gLightBox CSS ======-->
        <link rel="stylesheet" href="{{ url('assets/css/glightbox.min.css') }}">

        <!--====== nouiSlider CSS ======-->
        <link rel="stylesheet" href="{{ url('assets/css/nouislider.min.css') }}">

        <!--====== Default CSS ======-->
        <link rel="stylesheet" href="{{ url('assets/css/default.css') }}">

        <!--====== Style CSS ======-->
        <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
            @if (isset($header))
                {{ $header }}
            @endif

            {{ $slot }}

            @if (isset($footer))
                {{ $footer }}
            @endif

        @livewireScripts
        <!--====== Bootstrap js ======-->
        <script src="{{ url('assets/js/bootstrap.bundle-5.0.0-beta1.min.js') }}"></script>

        <!--====== Tiny Slider js ======-->
        <script src="{{ url('assets/js/tiny-slider.js') }}"></script>

        <!--====== nouiSlider js ======-->
        <script src="{{ url('assets/js/nouislider.min.js') }}"></script>

        <!--====== count up js ======-->
        <script src="{{ url('assets/js/count-up.min.js') }}"></script>

        <!--====== gLightBox js ======-->
        <script src="{{ url('assets/js/glightbox.min.js') }}"></script>

        <!--====== Main js ======-->
        <script src="{{ url('assets/js/main.js') }}"></script>
    </body>
</html>
