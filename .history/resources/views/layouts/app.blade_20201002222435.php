<!doctype html>
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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <!-- Flash Message CSS -->
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

    <style>
        * {
            font-family: 'Montserrat';
        }
        body {
            background-color: white;
        }

        #app {
            margin-top: 17px;
        }

        .container {
            margin-top: 50px;
            /* display: grid;
            justify-content: start;
            gap: 30px;
            grid-template-areas:
                "left picture"; */
        }

        #pattern {
            width: 100%;
            background: url('/images/spattern.png');
            background-repeat: repeat;
            background-size: 34px 27px;
        }


        .root {
            margin-top: 50px;
            display: grid;
            gap: 30px;
            grid-template-rows: 420px;
            grid-template-areas:
                "logo form"
        }

        .logo { grid-area: logo;}
        .form { grid-area: form;}

        input {
            padding: 5px;
            width: 100%;
            /* height: 40px; */
            margin-bottom: 10px;

            background-color: transparent;
            border-bottom: 2px solid black;
            border: none;
            outline: none;
            border-bottom: 1px solid gray;
        }

        select {
            padding: 5px;
            width: 100%;
            height: 40px;
            margin-bottom: 10px;

            background-color: transparent;
            border-bottom: 2px solid black;
            border: none;
            outline: none;
            border-bottom: 1px solid gray;

        }

        button {
            font-size: 20px;
            font-weight: bold;
            background-color: transparent;
            border-bottom: 2px solid black;
            color: #b78032;
            border: none;
            outline: none;
        }

        button:focus {
            outline: 0 !important;
        }

        .back {
            font-size: 25px;
            color: black;
            text-decoration: none !important;
        }

        .back:hover {
            color: #b78032;
        }

        .link {
            font-size: 30px;
            text-decoration: none;
            color: #b78032;
            font-weight: bold;
        }

        .link:hover{
            text-decoration: none;
            color: #5e4119;
        }

        .navbar {
            box-shadow: none !important;
        }

        .nav-link {
            font-size: 12px;
            color: black;
        }

        .nav-link:hover{
            text-decoration: none;
            color: #b78032 !important;
        }

        .active {
            color: #b78032 !important;
        }

        .footer {
            margin-top: 50px;
        }

        .picture {
            width: 100%;
        }

        .files {
            padding: 0 !important;
        }

        .artContainer{
            width: 32.5%;
        }

        .artImage{
            width: 100%;
        }

    </style>
</head>
<body>
    <div id="app">
        <div id="pattern">
            <img src="/images/spattern.png" alt="">
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Mindanao Art') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                @auth
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('art.index') }}">Art</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Art Component
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('art.category.index') }}">Category</a>
                                    <a class="dropdown-item" href="{{ route('art.material.index') }}">Material</a>
                                    <a class="dropdown-item" href="{{ route('art.medium.index') }}">Medium</a>
                                    <a class="dropdown-item" href="{{ route('art.size.index') }}">Size</a>
                                    <a class="dropdown-item" href="{{ route('art.style.index') }}">Style</a>
                                    <a class="dropdown-item" href="{{ route('art.subject.index') }}">Subject</a>
                                    <a class="dropdown-item" href="{{ route('art.status.index') }}">Status</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Register Component
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('register.gallery.index') }}">Gallery</a>
                                    <a class="dropdown-item" href="{{ route('register.regional.index') }}">Regional</a>
                                    <a class="dropdown-item" href="{{ route('register.special.index') }}">Special</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Management
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('user.index') }}">User</a>
                                    <a class="dropdown-item" href="{{ route('user.index') }}">Garbage</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                @endauth

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('my.profile', Auth::user()) }}">
                                        {{ __('Profile') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-bell"></i>
                                    <span class="badge badge-light">{{ auth()->user()->unreadNotifications->count() }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @forelse (auth()->user()->unreadNotifications as $notification)
                                        <!-- item-->
                                        <a href="{{ route('notification.read', $notification) }}" class="dropdown-item" data-toggle="tooltip" data-placement="top" title="{{ $notification->created_at->format('l, F d, Y - h:i A') }}">
                                            <p class="font-13"><b>{{ $notification->data['subject'] }}</b> {{ Str::limit($notification->data['body'], 25, '...') }}</p>
                                            <p class="text-muted mb-0">
                                                <small>{{ $notification->created_at->diffForHumans() }}</small>
                                            </p>
                                        </a>
                                    @empty
                                        <div class="text-center">
                                            <a href="#" class="dropdown-item">
                                                No notification yet!
                                            </a>
                                        </div>
                                    @endforelse
                                    <div class="dropdown-divider"></div>
                                    <a href="{{ route('notification.view') }}" class="text-decoration-none float-left ml-2">See All</a>

                                    @if(auth()->user()->unreadNotifications->count())
                                        <a href="{{ route('notification.clear') }}" class="text-decoration-none float-right mr-2">Mark All as Read</a>
                                    @endif
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            @include('flash::message')
        </div>

        <main class="py-4">

            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            @yield('content')

            
            <div class="container footer">
                <p>Copyright 2020. Mindanao Art</p>
            </div>
        </main>
    </div>

    @yield('script')

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
        $('#flash-overlay-modal').modal();
    </script>
</body>
</html>
