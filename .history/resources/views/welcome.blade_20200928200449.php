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
        <style>
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

            .small {
                margin-top: 50px;
                display: none;
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
            
            li {
                display: inline-block;
                font-size: 1.5em;
                list-style-type: none;
                padding-right: 2em;
                text-transform: uppercase;
            }

            li span {
                display: block;
                font-size: 3.5rem;
            }

            @media all and (max-width: 800px) {
                h1 {
                    font-size: 1.5rem;
                }
                
                li {
                    font-size: 1.125rem;
                }
                
                li span {
                    font-size: 3.375rem;
                }
            }

            /* @media (max-width: 992px) {
                #root {
                    display: grid;
                    justify-items: center;
                    grid-template-columns: 30px 10px 30px 10px 30px 10px 30px;
                    grid-template-areas:
                        "day column1 hour column2 minute column3 second"
                        "dayl . hourl . minutel . secondl";
                }

                .day { grid-area: day; font-size: 25px; margin: 0;}
                .hour { grid-area: hour; font-size: 25px; margin: 0;}
                .minute { grid-area: minute; font-size: 25px; margin: 0;}
                .second { grid-area: second; font-size: 25px; margin: 0;}
                .dayl { grid-area: dayl; font-size: 10px; margin: 0;}
                .hourl { grid-area: hourl; font-size: 10px; margin: 0;}
                .minutel { grid-area: minutel; font-size: 10px; margin: 0;}
                .secondl { grid-area: secondl; font-size: 10px; margin: 0;}

                .column{
                    color: #b78032;
                    font-size: 15px;
                    margin: 0;
                }

                .link {
                    font-size: 20px;
                }

                .small {
                    margin-top: 50px;
                    display: block;
                }

                .wide {
                    margin-top: 50px;
                    display: none;
                }

                .footer {
                    margin-top: 50px;
                }
            } */
        </style>
        <!-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->
    </head>
    <body>

        <div class="container">
            <div id="pattern">
                    <img src="/images/spattern.png" alt="">
            </div>

            <!-- big screen -->
            <div class="container wide">
                <div class="row">
                    <div class="col">
                        <div class="container">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <img src="/images/logo.png" alt="Mindanao Art Logo">
                                </div>
                                <div class="col-5">
                                    <h2>Living Art in New Landscape</h2>
                                    <ul>
                                        <li><span id="days"></span>days</li>
                                        <li><span id="hours"></span>Hours</li>
                                        <li><span id="minutes"></span>Minutes</li>
                                        <li><span id="seconds"></span>Seconds</li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <a class="link" href="/register">
                                        SIGN ME UP
                                        <font-awesome-icon icon="angle-right" />
                                        <font-awesome-icon icon="angle-right" />
                                        <font-awesome-icon icon="angle-right" />
                                    </a>
                                    <p>Already have an account? <a class="link" style="font-size: 12px;" href="/login">Login</a></p>
                                    <!-- <p>To get up-to-date news</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <img class="picture" src="/images/image1.png" alt="Image1">
                    </div>
                </div>
            </div>

            <!-- small screen -->
            <div class="container small">
                <div class="row">
                    <div class="col-3">
                        <div class="col">
                            <img src="/images/logo.png" alt="Mindanao Art Logo">
                        </div>
                    </div>
                    <div class="col">
                        <div class="container">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h2>Living Art in New Landscape</h2>
                                    <ul>
                                        <li><span id="days"></span>days</li>
                                        <li><span id="hours"></span>Hours</li>
                                        <li><span id="minutes"></span>Minutes</li>
                                        <li><span id="seconds"></span>Seconds</li>
                                    </ul>
                                </div>
                                <div class="col py-3">
                                    <a class="link" href="/register">
                                        SIGN ME UP
                                        <font-awesome-icon icon="angle-right" />
                                        <font-awesome-icon icon="angle-right" />
                                        <font-awesome-icon icon="angle-right" />
                                    </a>
                                    <p>Already have an account? <a class="link" style="font-size: 12px;" href="/login">Login</a></p>
                                    <p>To get up-to-date news</p>
                                </div>
                                <div class="col">
                                    <img class="picture" src="/images/image1.png" alt="Image1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container footer">
                <p>Copyright 2020. Mindanao Art</p>
            </div>
        </div>


        <script>
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            let countDown = new Date('Oct 21, 2020 00:00:00').getTime(),
                x = setInterval(function() {    

                let now = new Date().getTime(),
                    distance = countDown - now;

                document.getElementById('days').innerText = Math.floor(distance / (day)),
                    document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                    document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
                    document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

                //do something later when date is reached
                //if (distance < 0) {
                //  clearInterval(x);
                //  'IT'S MY BIRTHDAY!;
                //}

                }, second)
        </script>

        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
    </body>
</html>
