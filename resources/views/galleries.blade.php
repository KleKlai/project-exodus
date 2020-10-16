<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('/images/nav.ico') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        {{-- Font --}}
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    </head>
<body>
{{-- Navigation --}}
        <div class="container-fluid cover-picture background-image" style="background-image: url('/images/galleries/thebauhaus.png')">
            
            <div class="nav-container">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(255, 255, 255, 0.25);">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('images/logo/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarSupportedContent">

                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/artworks">Artworks <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/artists">Artists</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/galleries">Galleries</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/login">
                                    Login
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/register">
                                    Sign Up
                                </a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
</body>