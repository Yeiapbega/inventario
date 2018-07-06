<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- <link rel="icon" type="image/png" href="{{ asset('src/box_2.png') }}" /> --}}
        <meta http-equiv="X-UA-Compatible" content="ie-edge"> 
        <title>{{ config('app.name') }} •{{-- 📦 --}} @yield('title')</title>        
    {{--      <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#5dc1b9">
        <meta name="theme-color" content="#5dc1b9">
        <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
        <meta name="description" content="Los meta tags de HTML codifican información para ser interpretada por el navegador y los buscadores."/>
        <meta name="google" content="nositelinkssearchbox" />
        <meta name="robots" content="index,follow">
        <meta name="googlebot" content="all" />
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport' /> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        @yield('styles')
    </head>
<body class="animated fadeIn">
    <bg-login></bg-login>   
    {{-- <img src="{{ asset('src/box_1.png') }}" class="img-fluid bg-box">       --}}
    @include('include.widget')
    @if(Auth::check())
        @include('include.nav')
    @endif
    <div id="main-contain">
        @yield('content')
    </div>     
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    @yield('script')
    @yield('scriptShow')
</body>
</html>
