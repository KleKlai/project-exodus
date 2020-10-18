<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        

       <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    </head>
    <body>
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
        {{-- Navigation --}}
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
                        <div id="captioned-gallery">
                            <figure class="slider row">
                                <figure class="col-md">
                                    <img src="/images/img/blog-1.jpg" class="img-fluid" alt>
                                </figure>
                                <figure class="col-md">
                                    <img src="/images/img/blog-2.jpg" class="img-fluid" alt>
                                </figure>
                                <figure class="col-md">
                                    <img src="/images/img/blog-3.jpg" class="img-fluid" alt>
                                </figure>
                                <figure class="col-md">
                                    <img src="/images/img/blog-1.jpg" class="img-fluid" alt>
                                </figure>
                                <figure class="col-md">
                                    <img src="/images/img/blog-3.jpg" class="img-fluid" alt>
                                </figure>
                            </figure>
                        </div>
                        
                        <div class="container">
                        <div class="row featured">
                            <div class="col-md-4">
                                <div class="module mid">
                                    <img src="/images/img/blog-3.jpg" class="img-circle img-thumbnail">
                                    <h2>Artworks</h2>
                                        <p></p>
                                        <a href="#" class="btn btn-link">View More</a>
                                </div>
                            </div>

                        <div class="col-md-4">
                            <div class="module mid">
                                <img src="/images/img/blog-2.jpg" class="img-circle img-thumbnail">
                                <h2>Artists</h2>
                                <p></p>
                                <a href="#" class="btn btn-link">View More</a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="module mid">
                                <img src="/images/img/blog-1.jpg" class="img-circle img-thumbnail">
                                <h2>Galleries</h2>
                                <p></p>
                                <a href="#" class="btn btn-link">View More</a>
                            </div>
		                </div>
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
                <footer class="footer-area footer--light">
            <div class="footer-big">
                <!-- start .container -->
                <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <div class="footer-menu footer-menu--1">
                        <h4 class="footer-widget-title"><b>Mindanao Art</b></h4>
                            <a href="#">Artworks</a>
                            <br>
                            <a href="#">Artists</a>
                            <br>
                            <a href="#">Museums</a>
                            <br>
                            <a href="#">Galleries</a>
                            <br>
                            <a href="#">Regional Groups</a>
                        </div>
                        <!-- end /.footer-menu -->
                    </div>
                    <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <div class="footer-menu footer-menu--1">
                        <h4 class="footer-widget-title"><b>Museums</b></h4>
                            <a href="#">Dabakan</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#">Lamin</a>
                            <br>
                            <a href="#">Kaban</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#">Balangay</a>
                            <br>
                            <a href="#">Kulintang</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#">Vinta</a>
                            <br>
                            <a href="#">Heart</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#">Bakaw</a>
                            <br>
                            <a href="#">Lullaby</a>
                            <br>
                            <a href="#">Tambol</a>
                        </div>
                        <!-- end /.footer-menu -->
                    </div>
                    <!-- Ends: .footer-widget -->
                    </div>

                    <div class="col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <div class="footer-menu footer-menu--1">
                            <br>
                            <a href="#">Artist Handbook</a>
                            <br>
                            <a href="#">User Guides</a>
                            <br>
                            <a href="#">About us</a>
                            <br>
                            <a href="#">FAQs</a>
                        </div>
                        <!-- end /.footer-menu -->
                    </div>
                    <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <div class="footer-menu footer-menu--1">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                            <a href="#">support@mindanaoart.com</a>
                            <br>
                            <h6><b>Copyright 2020. Mindanao Art</b></h6>
                        </div>
                        <!-- end /.footer-menu -->
                    </div>
                    <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-md-3 -->

                </div>
                <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end /.footer-big -->

            </footer>

    </body>
</html>
