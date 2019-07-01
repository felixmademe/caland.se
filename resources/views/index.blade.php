@extends( 'layouts.app' )
@section( 'title', 'Start' )
@section( 'content' )

    <header class="hero">
        <img src="{{ asset( 'img/collection.jpg' ) }}" alt="Blekt kollage av bilder från Caland AB">
        <div class="text-box">
            <div class="logo-wrapper">
                <img class="lozad img-fluid" data-src="{{ asset( '/img/logo.png' ) }}" alt="Caland Koncern AB logga">
            </div>
            <h1>Bredden är vår styrka</h1>
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
