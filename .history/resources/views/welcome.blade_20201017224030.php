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


        {{--  <style>
            * {
                font-family: 'Montserrat';
            }

            body {
                background-color: white;
            }

            #pattern {
                margin-top: 17px;
                width: 100%;
                background: url('/images/spattern.png');
                background-repeat: repeat;
                background-size: 34px 27px;
            }

            .picture {
                width: 100%;
            }


            .wide {
                margin-top: 50px;
            }

            .column{
                color: #b78032;
                font-size: 35px;
            }

            #root {
                display: grid;
                justify-items: center;
                grid-template-columns: 100px 10px 100px 10px 100px 10px 100px;
                grid-template-areas:
                    "day column1 hour column2 minute column3 second"
                    "dayl . hourl . minutel . secondl";
            }

            h1, h2 {
                font-weight: 300 !important;
            }

            .day { grid-area: day; font-size: 50px;}
            .hour { grid-area: hour; font-size: 50px;}
            .minute { grid-area: minute; font-size: 50px;}
            .second { grid-area: second; font-size: 50px;}
            .dayl { grid-area: dayl;}
            .hourl { grid-area: hourl;}
            .minutel { grid-area: minutel;}
            .secondl { grid-area: secondl;}

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

            @media (max-width: 992px) {
                #root {
                    display: grid;
                    justify-items: center;
                    grid-template-columns: 40px 10px 40px 10px 40px 10px 40px;
                    grid-template-areas:
                        "day column1 hour column2 minute column3 second"
                        "dayl . hourl . minutel . secondl";
                }

                .day { grid-area: day; font-size: 30px; margin: 0;}
                .hour { grid-area: hour; font-size: 30px; margin: 0;}
                .minute { grid-area: minute; font-size: 30px; margin: 0;}
                .second { grid-area: second; font-size: 30px; margin: 0;}
                .dayl { grid-area: dayl; font-size: 12px; margin: 0;}
                .hourl { grid-area: hourl; font-size: 12px; margin: 0;}
                .minutel { grid-area: minutel; font-size: 12px; margin: 0;}
                .secondl { grid-area: secondl; font-size: 12px; margin: 0;}

                .column{
                    color: #b78032;
                    font-size: 20px;
                    margin: 0;
                }

                .link {
                    font-size: 20px;
                }
            }
        </style>  --}}
    </head>
    <body>
        {{--  <div>
            <div id="pattern">
                    <img src="/images/spattern.png" alt="">
            </div>
            <div class="container wide">
                <div class="row">
                    <div class="col-md">
                        <div class="container">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <img src="/images/logo.png" alt="Mindanao Art Logo">
                                </div>
                                <div class="col py-5">
                                    <h2>Living Art in New Landscape</h2>

                                    <div class="container">
                                        <div id="countdown">
                                            <div id="root">
                                                <h1 class="day" id="days"></h1> <p class="column">:</p>
                                                <h1 class="hour" id="hours"></h1> <p  class="column">:</p>
                                                <h1 class="minute" id="minutes"></h1> <p class="column">:</p>
                                                <h1 class="second" id="seconds"></h1>
                                                <h4 class="dayl">dd</h4>
                                                <h4 class="hourl">hh</h4>
                                                <h4 class="minutel">mm</h4>
                                                <h4 class="secondl">ss</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <a class="link" href="/register">
                                        SIGN ME UP
                                        <path d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z"/>
                                    </a>
                                    <p>Already have an account? <a class="link" style="font-size: 12px;" href="/login">Login</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <img class="picture" src="/images/image1.png" alt="Image1">
                    </div>
                </div>
            </div>

            <div class="container footer">
                <p>Copyright 2020. Mindanao Art</p>
            </div>
        </div>

        <script>
            (function () {
                const second = 1000,
                        minute = second * 60,
                        hour = minute * 60,
                        day = hour * 24,
                        birthday = "Oct 21, 2020 08:00:00";

                let countDown = new Date(birthday).getTime(),
                    x = setInterval(function() {

                        let now = new Date().getTime(),
                            distance = countDown - now;

                        document.getElementById("days").innerText = Math.floor(distance / (day)),
                        document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                        //do something later when date is reached
                        if (distance < 0) {
                        let headline = document.getElementById("headline"),
                            countdown = document.getElementById("countdown"),
                            content = document.getElementById("content");

                        headline.innerText = "It's my birthday!";
                        countdown.style.display = "none";
                        content.style.display = "block";

                        clearInterval(x);
                        }
                        //seconds
                    }, 0)
                }());
        </script>  --}}

        {{-- Navigation --}}
        <div class="container-fluid cover-picture background-image" style="background-image: url('/images/galleries/thebauhaus.png')">
            
            <div class="nav-container">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(255, 255, 255, 0.25);">
                    <a class="navbar-brand" href="#">
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


        {{-- Content --}}
        <div class="container">

            {{--  Internal Links  --}}
            <div>
                <div class="row">
                    <a href="#featuredArtworks" class="col-md mt-3">
                        <div class="header-link">
                            <p>ARTWORKS</p>
                        </div>
                    </a>
                    <a href="#featuredArtists" class="col-md mt-3">
                        <div class="header-link">
                            <p>ARTISTS</p>
                        </div>
                    </a>
                    <a href="#featuredGalleries" class="col-md mt-3">
                        <div class="header-link">
                            <p>GALLERIES</p>
                        </div>
                    </a>
                </div>
            </div>

            {{--  Featured Artworks  --}}
            <div class="h-divider" id="featuredArtworks">

            <div class="title">FEATURED ARTWORKS</div>
            <div class="row">
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-53.jpg');">
                            <p>ARTWORK TITLE HERE</p>
                        </div>
                    </a>
                </div>
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-54.jpg');">
                            <p>THIS IS A VERY LONG VERY LOOONGARTWORK TITLE HERE</p>
                        </div>
                    </a>
                </div>
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-55.jpg');">
                            <p>ARTWORK TITLE HERE</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="container" style="text-align: center;">
                <a href="/artworks" type="button" class="btn-link">View All</a>
            </div>

            {{--  Featured Artist  --}}
            <div class="h-divider" id="featuredArtists">

            <div class="title">FEATURED ARTISTS</div>
            <div class="row">
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-53.jpg');"></div>
                        <div class="picture-title link">ARTIST NAME</div>
                    </a>
                        <p>Gallery assigned, museum assigned.</p>
                </div>
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-54.jpg');"></div>
                        <div class="picture-title link">ARTIST NAME</div>
                    </a>
                        <p>Gallery assigned, museum assigned.</p>
                </div>
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/TBH_RWSX-55.jpg');"></div>
                        <div class="picture-title link">ARTIST NAME</div>
                    </a>
                        <p>Gallery assigned, museum assigned.</p>
                </div>
            </div>
            <div class="container" style="text-align: center;">
            <a href="/artists" type="button" class="btn-link">View All</a>
            </div>

            <div class="h-divider" id="featuredGalleries">

            <div class="title">FEATURED GALLERIES</div>
            <div class="row">
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                        </div>
                        <div class="picture-title link">GALLERY NAME</div>
                    </a>
                        <p>Gallery description will be put here.</p>
                </div>
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');" >
                        </div>
                        <div class="picture-title link">GALLERY NAME</div>
                    </a>
                        <p>Gallery description will be put here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="col-md">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                        </div>
                        <p class="picture-title">GALLERY NAME</p>
                        <p>Gallery description will be put here.</p>
                    </a>
                </div>
            </div>
            <div class="container" style="text-align: center;">
                <a href="/galleries" type="button" class="btn-link">View All</a>
            </div>

            <div class="h-divider">

            <div class="title">VISIT MINDANAO MUSEUMS</div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="">
                        <div class="picture-container background-image" style="background-image: url('/images/galleries/thebauhaus.png');">
                            <p class="picture-inner-title">THEBAUHAUS</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="newsletter">
                <div class="container row">
                    <div class="col-md-10">
                        <span class="text">Get the latest art stories and collections by simply 'Subscribe'</span>

                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-outline-dark text-white border-white">Subcribe</button>

                    </div>
                </div>
            </div>

        </div>


    </body>
</html>
