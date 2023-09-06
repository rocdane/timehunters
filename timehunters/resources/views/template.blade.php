<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Time Hunters</title>

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <script src="https://cdn.tailwindcss.com"></script>

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
        
        <script 
            type="text/javascript"
            src="../../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    </head>
    <body class="antialiased">
        @yield('content')
    </body>
</html>
