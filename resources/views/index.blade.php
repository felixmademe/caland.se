@extends( 'layouts.app' )
@section( 'title', 'Start' )
@section( 'content' )

    <header class="hero">
        <img src="{{ asset( 'img/collection.jpg' ) }}" alt="">
        <div class="text-box">
            <div class="logo-wrapper">
                <img class="img-fluid" src="{{ asset( '/img/logo.png' ) }}" alt="">
            </div>
            <h1>Caland AB</h1>
            <p>Bredden är vår styrka</p>
        </div>
    </header>

    <section class="company py-5">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="col-sm-6 p-2">
                    <a class="btn btn-start" href="{{ route( 'services' ) }}">Våra tjänster</a>
                </div>
                <div class="col-sm-6 p-2">
                    <a class="btn btn-start" href="{{ route( 'course' ) }}">Boka utbildning</a>
                </div>
                <div class="col-sm-6 p-2">
                    <a class="btn btn-start" href="{{ route( 'contact' ) }}">Kontakta oss</a>
                </div>
                <div class="col-sm-6 p-2">
                    <a class="btn btn-start" href="{{ route( 'job' ) }}">Jobba på Caland</a>
                </div>
            </div>
        </div>
    </section>

@endsection
