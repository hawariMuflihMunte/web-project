<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @hasSection('title')
        <title>{{ config('app.name') }} | @yield('title')</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="PiperBelly">
    <meta name="description" content="Web Project">
    <meta name="keywords" content="web, project, laravel">
    <meta name="theme-color" content="#ffffff">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Bttn --}}
    <link rel="stylesheet" href="{{ asset('bttn.min.css') }}">
</head>
<body>
    @hasSection('content')
        @yield('content')
    @else
        <div class="container">
            <h1>Welcome to the Web Project</h1>
            <p>This is a simple web project using Laravel.</p>
        </div>
    @endif
</body>
</html>
