<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="robots" content="index,follow">

        <!-- Social Media Tags -->
        <meta property="og:title" content="Your Page Title">
        <meta property="og:description" content="Your page description">
        <meta property="og:image" content="URL to your image">
        <meta property="og:url" content="Your page URL">
        <meta name="twitter:card" content="summary_large_image">

        <link rel="icon" href="{{ asset('favicon.ico') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->

        {{-- CDNs --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Scripts -->
        @vite(['resources/js/lang.js'])
        @vite(['resources/js/app.js'])
        @spladeHead
        <script>
            if (localStorage.getItem('dark-mode') === 'true' || (!('dark-mode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.querySelector('html').classList.add('dark');
            } else {
                document.querySelector('html').classList.remove('dark');
            }
        </script>
    </head>
    <body class="font-sans antialiased">
        @splade
        <script>
            $(document).ready(function() {
                $(document).on('click', '.theme',function() {
                    if($('html').hasClass('dark')) {
                        $('html').removeClass('dark');
                        localStorage.setItem('dark-mode', false);
                    } else {
                        $('html').addClass('dark');
                        localStorage.setItem('dark-mode', true);
                    }
                });

                
            })
        </script>
    </body>
</html>
