@extends( 'layouts.app' )
@section( 'title', 'Start' )
@section( 'content' )

    <header class="mobile-hero d-block d-md-none">
        <img src="{{ asset( '/img/collection.jpg' ) }}" alt="">
        <div class="text">
            <h1>Caland AB</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <a class="btn btn-red btn-expand" href="{{ route( 'about' ) }}">Läs mer</a>
        </div>
    </header>

    <header class="hero d-none d-md-block">
        <div class="d-flex flex-row">
            <div class="col-md-6 text-half d-flex align-items-center">
                <div class="">
                    <h1>Caland AB</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a class="btn btn-red" href="{{ route( 'about' ) }}">Läs mer</a>
                </div>
            </div>
            <div class="col-md-6 img-half">
                <img src="{{ asset( '/img/collection.jpg' ) }}" alt="">
            </div>
        </div>
    </header>

    <section class="company py-5">
        <div class="col-md-8 offset-md-2">        
            <h2>Tjänster</h2>
            <p>Vi erbjuder ett flertal olika tjänster till både företag och privatpersoner.</p>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'concrete' ) }}">Betonghåltagning</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'transport' ) }}">Transport</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'staff' ) }}">Bemanning</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'course' ) }}">Utbildning</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'help' ) }}">Bygghjälpen</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'cleaning' ) }}">Städ</a>
            <hr>
            <h3>Jobb</h3>
            <p>
                Vi har flertal olika tjänster och söker alltid nya medarbetare. Kolla in tjänster vi har
                och skicka in en intresseanmälan!
            </p>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'job' ) }}">Jobba på Caland</a>
        </div>
    </section>

@endsection
