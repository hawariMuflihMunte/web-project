<!DOCTYPE html>
<html lang="id">
<head>
    @hasSection('title')
        <title>Web Project | @yield('title')</title>
    @else
        <title>Web Project</title>
    @endif

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="PiperBelly">
    <meta name="description" content="Web Project">
    <meta name="keywords" content="web, project, laravel">
    <meta name="theme-color" content="#ffffff">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- Bttn --}}
    <link rel="stylesheet" href="{{ asset('css/bttn.min.css') }}">
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
