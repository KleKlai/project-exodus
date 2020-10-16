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

        <style>
            #columns {
                column-width: 320px;
                column-gap: 15px;
                width: 90%;
                max-width: 1100px;
                margin: 50px auto;
            }

            div#columns figure {
                background: #fefefe;
                border: 2px solid #fcfcfc;
                box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
                margin: 0 2px 15px;
                padding: 15px;
                padding-bottom: 10px;
                transition: opacity .4s ease-in-out;
                display: inline-block;
                column-break-inside: avoid;
            }

            div#columns figure img {
                width: 100%; height: auto;
                border-bottom: 1px solid #ccc;
                padding-bottom: 15px;
                margin-bottom: 5px;
            }

            div#columns figure figcaption {
                font-size: .9rem;
                color: #444;
                line-height: 1.5;
                text-align: center;
            }

            div#columns small { 
                font-size: 1rem;
                float: right; 
                text-transform: uppercase;
                color: #aaa;
            } 

            div#columns small a { 
                color: #666; 
                text-decoration: none; 
                transition: .4s color;
            }

            @media screen and (max-width: 750px) { 
                #columns { column-gap: 0px; }
                #columns figure { width: 100%; }
            }
        </style>
    </head>
<body>

{{-- Navigation --}}
    <div id="pattern">
        <img src="/images/spattern.png" alt="">
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light mt-4 mb-5">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/logo/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/artworks">Artworks <span class="sr-only">(current)</span></a>
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


        <div id="columns">
            <figure>
                <img src="{{ asset('/images/image1.png') }}">
                <figcaption>
                    <p>Artist Name</p>
                    <p>Artwork Title, Year</p>
                    <a href="">Gallery Name Located</a>
                    <p>Price</p>
                </figcaption>
            </figure>
                
            <figure>
                <img src="{{ asset('/images/image2.png') }}">
                <figcaption>Rapunzel, clothed in 1820’s period fashion</figcaption>
            </figure>
                
            <figure>
                <img src="{{ asset('/images/image3.png') }}">
                <figcaption>Belle, based on 1770’s French court fashion</figcaption>
            </figure>
            
            <figure>
                <img src="{{ asset('/images/TBH_RWSX-53.jpg') }}">
                <figcaption>Mulan, based on the Ming Dynasty period</figcaption>
            </figure>
                
            <figure>
                <img src="{{ asset('/images/TBH_RWSX-54.jpg') }}">
                <figcaption>Sleeping Beauty, based on European fashions in 1485</figcaption>
            </figure>
                
            <figure>
                <img src="{{ asset('/images/TBH_RWSX-55.jpg') }}">
                <figcaption>Pocahontas based on 17th century Powhatan costume</figcaption>
            </figure>
            
            <figure>
                <img src="{{ asset('/images/TBH_RWSX-56.jpg') }}">
                <figcaption>Snow White, based on 16th century German fashion</figcaption>
            </figure>	
            
            <figure>
                <img src="{{ asset('/images/TBH_RWSX-57.jpg') }}">
                <figcaption>Ariel wearing an evening gown of the 1890’s</figcaption>
            </figure>
            
            <figure>
                <img src="{{ asset('/images/TBH_RWSX-58.jpg') }}">
                <figcaption>Tiana wearing the <i>robe de style</i> of the 1920’s</figcaption>
            </figure>
                
            <figure>
                <img src="{{ asset('/images/image1.png') }}">
                <figcaption>Cinderella wearing European fashion of the mid-1860’s</figcaption>
            </figure>
                
            <figure>
                <img src="{{ asset('/images/image2.png') }}">
                <figcaption>Rapunzel, clothed in 1820’s period fashion</figcaption>
            </figure>
                
            <figure>
                <img src="{{ asset('/images/image3.png') }}">
                <figcaption>Belle, based on 1770’s French court fashion</figcaption>
            </figure>
            
            <figure>
                <img src="{{ asset('/images/TBH_RWSX-53.jpg') }}">
                <figcaption>Mulan, based on the Ming Dynasty period</figcaption>
            </figure>
                
            <figure>
                <img src="{{ asset('/images/TBH_RWSX-54.jpg') }}">
                <figcaption>Sleeping Beauty, based on European fashions in 1485</figcaption>
            </figure>
                
            <figure>
                <img src="{{ asset('/images/TBH_RWSX-55.jpg') }}">
                <figcaption>Pocahontas based on 17th century Powhatan costume</figcaption>
            </figure>
            
            <figure>
                <img src="{{ asset('/images/TBH_RWSX-56.jpg') }}">
                <figcaption>Snow White, based on 16th century German fashion</figcaption>
            </figure>	
            
            <figure>
                <img src="{{ asset('/images/TBH_RWSX-57.jpg') }}">
                <figcaption>Ariel wearing an evening gown of the 1890’s</figcaption>
            </figure>
            
            <figure>
                <img src="{{ asset('/images/TBH_RWSX-58.jpg') }}">
                <figcaption>Tiana wearing the <i>robe de style</i> of the 1920’s</figcaption>
            </figure>
            <small>Art &copy; <a href="//clairehummel.com">Claire Hummel</a></small>
        </div>
</body>