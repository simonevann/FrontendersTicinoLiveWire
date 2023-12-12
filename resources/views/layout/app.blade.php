<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('pageTitle') | Frontenders</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://unpkg.com/cirrus-ui" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased">
<div class="header header-fixed u-unselectable header-animated">
    <div class="header-brand">
        <div class="nav-item no-hover ">
            <a><h6 class="title text-primary">Frontenders</h6></a>
        </div>
        <div class="nav-item">
                <span role="menu-item"><a href="{{ route("locations") }}">Locations</a></span>
        </div>
        <div class="nav-item">
            <span role="menu-item"><a href="{{ route("ready.locations") }}">Loc Ready</a></span>  
        </div>
        <div class="nav-item">
            <span role="menu-item"><a href="{{ route("clear") }}">Clear</a></span>  
        </div>
    </div>
</div>
    @yield("content")
    @yield('scripts')
</body>
</html>
