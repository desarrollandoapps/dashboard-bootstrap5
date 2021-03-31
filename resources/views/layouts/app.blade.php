<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Favicon --}}
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('images/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon-16x16.png') }}">
        <link rel="manifest" href="{{asset('images/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{asset('images/ms-icon-144x144.png') }}"">
        <meta name="theme-color" content="#ffffff">

        <title>{{ __('App name') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

        <!-- Bootstrap 5 -->
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
        
    </head>
    <body class="antialiased">
        @include('layouts.navs.navbar')
          
        <div class="container-fluid">
            <div class="row">
                @include('layouts.navs.sidebar')
          
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">@yield('titulo')</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            @yield('toolbar')
                        </div>
                    </div>
                    @yield('content')
                    
                </main>
            </div>
        </div>
        

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('fontawesome/js/all.min.css') }}"></script>
    </body>
</html>
