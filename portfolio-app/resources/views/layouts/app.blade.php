<!DOCTYPE html>
<html>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<head>
    <title>@yield('title')</title>
</head>
<body style="display: flex; margin: 0; padding: 0;">
    {{-- Navbar --}}
    <div id="navbar">
        @include('layouts.nav')
    </div>
    {{-- Content --}}
    <div id="content" style="padding: 2rem;">
        @yield('content')
    </div>
</body>
</html>