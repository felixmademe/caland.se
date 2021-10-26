<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="Utbildning, Bemanning, Håltagning, Transport, Städ, Bygghjälpen">
        <meta name="description" content="Vi har resurser och kompetens för att utföra professionella tjänster inom håltagning, transport, bemanning, utbildning och städ. Bredden är vår styrka.">
        <meta name="subject" content="Industry">
        <meta name="image" content="https://caland.se/img/logo.png">
        <meta name="copyright"content="Caland AB">
        <meta name="language" content="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta name="robots" content="index, follow">
        <meta name="Classification" content="Business">
        <meta name="author" content="Caland AB">
        <meta name="designer" content="felix made me">
        <meta name="copyright" content="Caland AB">
        <meta name="reply-to" content="info@caland.se">
        <meta name="owner" content="Caland AB">
        <meta name="url" content="https://www.caland.se">
        <meta name="identifier-URL" content="https://www.caland.se">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="rating" content="General">
        <meta name="revisit-after" content="7 days">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="canonical" href="{{ Request::url() }}">
        <link rel="home" href="{{ Request::url() }}">
        <link rel="alternate" hreflang="x-default" href="{{ Request::url() }}">

        <!-- Schema.org for Google -->
        <meta itemprop="name" content="Caland AB">
        <meta itemprop="description" content="Vi har resurser och kompetens för att utföra professionella tjänster inom håltagning, transport, bemanning, utbildning och städ. Bredden är vår styrka.">
        <meta itemprop="image" content="https://caland.se/img/logo.png">
        <!-- Twitter -->
        <meta name="twitter:card" content="Vi har resurser och kompetens för att utföra professionella tjänster inom håltagning, transport, bemanning, utbildning och städ. Bredden är vår styrka.">
        <meta name="twitter:title" content="Caland AB">
        <meta name="twitter:description" content="Vi har resurser och kompetens för att utföra professionella tjänster inom håltagning, transport, bemanning, utbildning och städ. Bredden är vår styrka.">
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="og:title" content="Caland AB">
        <meta name="og:description" content="Vi har resurser och kompetens för att utföra professionella tjänster inom håltagning, transport, bemanning, utbildning och städ. Bredden är vår styrka.">
        <meta name="og:image" content="https://caland.se/img/logo.png">
        <meta name="og:url" content="https://caland.se">
        <meta name="og:site_name" content="Caland AB">
        <meta name="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta name="og:type" content="website">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
        <link rel="stylesheet" href="{{ asset( '/css/main.min.css' ) }}">
        <link rel="shortcut icon" href="{{ asset( '/img/icon.ico' ) }}" />

        <title>@yield( 'title' ) - {{ config('app.name', 'Caland AB') }}</title>
        <script defer src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollintoview/1.8/jquery.scrollintoview.min.js"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha256-Y1rRlwTzT5K5hhCBfAFWABD4cU13QGuRN6P5apfWzVs=" crossorigin="anonymous"></script>    
        <script defer src="https://www.googletagmanager.com/gtag/js?id=UA-135643404-1"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js?render={{ config( 'recaptcha.key.site' ) }}&render=explicit"></script>
        <script defer>
            grecaptcha.ready(function() {
                grecaptcha.execute( '{{ config( 'recaptcha.key.site' ) }}', { action: 'jobEmail' } ).then( function( token )
                {
                    if( token && document.getElementById( 'recaptcha' ) )
                    {
                        document.getElementById( 'recaptcha' ).value = token;
                    }
                });

                grecaptcha.execute( '{{ config( 'recaptcha.key.site' ) }}', { action: 'supportEmail' } ).then( function( token )
                {
                    if( token && document.getElementById( 'recaptcha' ) )
                    {
                        document.getElementById( 'recaptcha' ).value = token;
                    }
                });

                grecaptcha.execute( '{{ config( 'recaptcha.key.site' ) }}', { action: 'contactEmail' } ).then( function( token )
                {
                    if( token && document.getElementById( 'recaptcha' ) )
                    {
                        document.getElementById( 'recaptcha' ).value = token;
                    }
                });
            });

          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-135643404-1');

          window.addEventListener("load", function(){
            window.cookieconsent.initialise({
              "palette": {
                "popup": {
                  "background": "#282a2b",
                },
                "button": {
                  "background": "#fff",
                }
            },
              "content": {
                "message": "Den här webbplatsen använder 'cookies' för att du ska få den bästa upplevelsen på vår hemsida.",
                "dismiss": "Uppfattat!",
                "link": "Läs mer"
              }
            })});
        </script>

        <script defer src="{{ asset( '/js/main.js' ) }}" type="text/javascript"></script>
    </head>
    <body>
        @include( 'layouts.navbar' )

        @if( Request::is( '/' ) )
            <main class="content">
                <div class="pt-2 pt-md-5">
                    @yield( 'content' )
                </div>
            </main>
        @elseif( Request::is( 'jobb' ) )
            <main class="content">
                <div class="bg-gradient pt-5">
                    <div class="container-fluid">
                        @yield( 'content' )
                    </div>
                </div>
            </main>
        @else
            <main class="content">
                <div class="container-fluid mt-5 py-4 py-md-5">
                    <div class="row justify-content-center">
                        <div class="col-md-9 col-lg-7">
                            @yield( 'content' )
                            <br>
                        </div>
                    </div>
                </div>
            </main>
        @endif

        @include( 'layouts.footer' )
    </body>
</html>
