<!doctype html>
<html lang="{{ app()->getLocale() }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ str_replace('//localhost:8080//', 'http://localhost:8080/', mix('css/app.css') )}}" rel="stylesheet">

    <style>
        [v-cloak] {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-200 h-full antialiased leading-none">
<div id="app" v-cloak class="h-full bg-gray-200">
   <router-view url="{{ url('') }}"></router-view>
</div>
<!-- Scripts -->
<script src="{{ str_replace('//localhost:8080//', 'http://localhost:8080/', mix('js/app.js')) }}" defer></script>

</body>
</html>
