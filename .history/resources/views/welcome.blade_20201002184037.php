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