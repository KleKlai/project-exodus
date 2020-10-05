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

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
        </style>
    </head>
    <body>
        <div>
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
                                        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z"/></svg>
                                        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z"/></svg>
                                        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z"/></svg>
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
        </script>
    </body>
</html>