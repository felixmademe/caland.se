@extends( 'layouts.app' )
@section( 'title', 'Håltagning' )
@section( 'content' )

    <section class="service-header">
        <img src="{{ asset( '/img/caland-betong.jpg' ) }}" alt="Caland Håltagning">
        <br><br>
        <h1>Referenser</h1>
    </section>
    <hr>
    <section>
        <div class="project">
            <h3>#1 Vikenbygget</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
            </p>
            <img class="lozad img-fluid" data-src="{{ asset( '/img/collection.jpg' ) }}" alt="Samling av bilder">
        </div>
        <hr>
        <div class="project">
            <h3>#2 Karlstads innerstad</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
            </p>
            <img class="lozad img-fluid" data-src="{{ asset( '/img/collection.jpg' ) }}" alt="Samling av bilder">
        </div>
    </section>
    <hr>
    <section class="text-center">
        <p>Klicka här för att gå tillbaka</p>
        <a class="btn btn-red" href="{{ route( 'concrete' ) }}">Håltagning</a>
    </section>

@endsection
