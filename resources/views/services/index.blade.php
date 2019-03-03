@extends( 'layouts.app' )
@section( 'title', 'Tjänster' )
@section( 'content' )

    <section class="service-header">
        <h1>Tjänster</h1>
        <p>
            Vi har resurser, metoder och kompetens att utföra
            professionella tjänster inom byggbranschen.
            <br>
            <span class="underline">Bredden är vår styrka</span>.
        </p>
    </section>
    <hr>
    <section class="service-about">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <div class="text-center">
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'concrete' ) }}">Betonghåltagning</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'transport' ) }}">Transport</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'staff' ) }}">Bemanning</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'course' ) }}">Utbildning</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'help' ) }}">Bygghjälpen</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'cleaning' ) }}">Städ</a>
        </div>
        <div class="text-center my-3">
            <img src="{{ asset( '/img/services/iso.jpg' ) }}" alt="ISO Certifikationer">
        </div>
    </section>
    <hr>
    <section class="service-contact text-center">
        <h3>Kontakt</h3>
        <p>Är det något du undrar, tvecka inte att kontakta oss!</p>
        <a class="btn btn-red btn-expand" href="{{ route( 'contact' ) }}">Kontakta oss</a>
    </section>

@endsection
