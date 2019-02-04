<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset( '/css/main.min.css' ) }}">

        <title>@yield( 'title' ) - {{ config('app.name', 'Caland AB') }}</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
            <a class="navbar-brand" href="{{ url( '/' ) }}">
                <img src="{{ asset( '/img/logo.png' ) }}" width="120" alt="Caland AB logo">
            </a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route( 'index' ) }}">Start <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tjänster
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route( 'concrete' ) }}">Betonghåltagning</a>
                            <a class="dropdown-item" href="{{ route( 'transport' ) }}">Transport</a>
                            <a class="dropdown-item" href="{{ route( 'staff' ) }}">Bemaning</a>
                            <a class="dropdown-item" href="{{ route( 'education' ) }}">Utbildning</a>
                            <a class="dropdown-item" href="{{ route( 'help' ) }}">Bygghjälpen</a>
                            <a class="dropdown-item" href="{{ route( 'cleaning' ) }}">Städ</a>
                            <a class="dropdown-item" href="{{ route( 'company-service' ) }}">Företagsservice</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route( 'services' ) }}">Se alla tjänster</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route( 'about' ) }}">Om oss</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route( 'contact' ) }}">Kontakt</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="content">
            <div class="container mt-5 p-2 p-lg-5">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <br>
                        @yield( 'content' )
                        <br>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="container">
                <div class="row p-2 p-lg-4">
                    <div class="col-lg-3 d-none d-lg-block">
                        <img src="{{ asset( '/img/logo.png' ) }}" alt="Caland AB logo">
                    </div>
                    <div class="col-lg-3">
                        <h4>Företaget</h4>
                        <p>
                            <a href="{{ route( 'about' ) }}">Om oss</a>
                            <br>
                            <a href="{{ route( 'contact' ) }}">Kontakt</a>
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <h4>Tjänster</h4>
                        <p>
                            <a class="" href="{{ route( 'concrete' ) }}">Betonghåltagning</a>
                            <br>
                            <a class="" href="{{ route( 'transport' ) }}">Transport</a>
                            <br>
                            <a class="" href="{{ route( 'staff' ) }}">Bemaning</a>
                            <br>
                            <a class="" href="{{ route( 'education' ) }}">Utbildning</a>
                            <br>
                            <a class="" href="{{ route( 'help' ) }}">Bygghjälpen</a>
                            <br>
                            <a class="" href="{{ route( 'cleaning' ) }}">Städ</a>
                            <br>
                            <a class="" href="{{ route( 'company-service' ) }}">Företagsservice</a>
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <h4>Kontakt</h4>
                        <p>
                            Herrövägen 4
                            65671 Skattkärr
                            <br>
                            054-86 06 80
                            <br>
                            {{ env( 'MAIL_FROM_ADRESS', 'info@caland.se' ) }}
                        </p>
                    </div>
                </div>
                <hr>
                <div class=" text-center">
                    <small>Copyright © {{ date( 'Y' ) }} Caland | Alla rättigheter reserverade</small>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>
