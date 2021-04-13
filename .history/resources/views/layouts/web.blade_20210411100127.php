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
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

        <!--====== Tiny Slider CSS ======-->
        <link rel="stylesheet" href="assets/css/tiny-slider.css">

        <!--====== Line Icons CSS ======-->
        <link rel="stylesheet" href="assets/css/LineIcons.css">

        <!--====== Material Design Icons CSS ======-->
        <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">

        <!--====== Bootstrap CSS ======-->
        <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-beta1.min.css">

        <!--====== gLightBox CSS ======-->
        <link rel="stylesheet" href="assets/css/glightbox.min.css">

        <!--====== nouiSlider CSS ======-->
        <link rel="stylesheet" href="assets/css/nouislider.min.css">

        <!--====== Default CSS ======-->
        <link rel="stylesheet" href="assets/css/default.css">

        <!--====== Style CSS ======-->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
