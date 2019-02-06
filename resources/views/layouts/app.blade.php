<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset( '/css/main.min.css' ) }}">
        <link rel="shortcut icon" href="{{ asset( '/img/logo.ico' ) }}" />

        <title>@yield( 'title' ) - {{ config('app.name', 'Caland AB') }}</title>
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
                    @yield( 'content' )
                </div>
            </main>
        @else
            <main class="content">
                <div class="container mt-5 py-4 py-md-5">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            @yield( 'content' )
                        <br>
                    </div>
                    </div>
                </div>
            </main>
        @endif

        @include( 'layouts.footer' )
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js"></script>
        <script src="{{ asset( '/js/main.js' ) }}" type="text/javascript"></script>
        @if( Request::is( '/' ) )
            <script src="{{ asset( '/js/index.js' ) }}" type="text/javascript"></script>
        @endif
    </body>
</html>
