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

            @media (max-width: 992px) {
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
            }
        </style>
    </head>
    <body>
        <div>
            <div id="pattern">
                    <img src="/images/spattern.png" alt="">
            </div>

            <!-- big screen -->
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
                                    <countdown :time="time" :interval="100" tag="p">
                                        <template slot-scope="props">
                                            <div id="root">
                                                <h1 class="day"></h1> <p class="column">:</p>
                                                <h1 class="hour"></h1> <p  class="column">:</p>
                                                <h1 class="minute"></h1> <p class="column">:</p>
                                                <h1 class="second"></h1>
                                                <h4 class="dayl">dd</h4>
                                                <h4 class="hourl">hh</h4>
                                                <h4 class="minutel">mm</h4>
                                                <h4 class="secondl">ss</h4>
                                            </div>
                                        </template>
                                    </countdown>
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
                    <div class="col-md">
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
                                    <countdown :time="time" :interval="100" tag="p">
                                        <template slot-scope="props">
                                            <div id="root">
                                                <h1 class="day"></h1> <p class="column">:</p>
                                                <h1 class="hour"></h1> <p  class="column">:</p>
                                                <h1 class="minute"></h1> <p class="column">:</p>
                                                <h1 class="second"></h1>
                                                <h4 class="dayl">dd</h4>
                                                <h4 class="hourl">hh</h4>
                                                <h4 class="minutel">mm</h4>
                                                <h4 class="secondl">ss</h4>
                                            </div>
                                        </template>
                                    </countdown>
                                </div>
                                <div class="col  py-3">
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
    </body>
</html>