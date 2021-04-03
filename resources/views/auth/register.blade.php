<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Favicon --}}
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/favicon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/favicon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('images/favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{asset('images/favicon/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{asset('images/favicon/ms-icon-144x144.png') }}"">
        <meta name="theme-color" content="#ffffff">

        <title>{{ __('Register') }}</title>

        <!-- Estilos y Bootstrap compilado-->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

        {{-- Estilos Login --}}
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        
        <!-- Fontawesome -->
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
        
    </head>
    <body class="antialiased">          
        <div class="container-fluid">
            <div class="container">
                <div class="col-xl-10 col-lg-11 mx-auto login-container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 no-padding">
                            <div class="login-box">
                                <h5>Registro</h5>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="login-row row no-margin">
                                            <label for=""><i class="fas fa-signature"></i> {{ __('Name') }}</label>
                                            <input id="name" type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus autocomplete="name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="login-row row no-margin">
                                            <label for=""><i class="fas fa-envelope"></i> {{ __('E-Mail Address') }}</label>
                                            <input id="email" type="email" name="email" class="form-control form-control-sm @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="login-row row no-margin">
                                            <label for=""><i class="fas fa-unlock-alt"></i> {{ __('Password') }}</label>
                                            <input id="password" type="password" name="password" class="form-control form-control-sm @error('password') is-invalid @enderror" required autocomplete="current-password" autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="login-row row no-margin">
                                            <label for=""><i class="fas fa-unlock-alt"></i> {{ __('Confirm Password') }}</label>
                                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control form-control-sm @error('password') is-invalid @enderror" required autocomplete="new-password">
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="login-row btnroo row no-margin">
                                            <button type="submit" class="btn btn-primary btn-sm"> {{ __('Register') }}</button>
                                        </div>
                                        <div class="login-row donroo row no-margin">
                                            <p>{{ __('Already registered?') }} <a href="{{ route('register') }}">{{ __('Log in') }}</a></p>
                                        </div>
                                    </form>  



                            </div>
                        </div>
                        
                        <div class="col-lg-7 col-md-6 img-box">
                            <img src="{{asset('images/logo.png')}} " alt="Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('fontawesome/js/all.min.css') }}"></script>
    </body>
</html>
