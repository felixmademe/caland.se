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
        <div class="text-center">
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'concrete' ) }}">Betonghåltagning</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'transport' ) }}">Transport</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'staff' ) }}">Bemanning</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'course' ) }}">Utbildning</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'help' ) }}">Bygghjälpen</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'cleaning' ) }}">Städ</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'concrete' ) }}">Rivning</a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'concrete' ) }}">Asbestsanering</a>
        </div>
        <div class="text-center my-3">
            <img class="lozad" data-src="{{ asset( '/img/services/iso.jpg' ) }}" alt="ISO Certifikationer">
        </div>
    </section>
    <hr>
    <section class="service-contact text-center">
        <h3>Kontakt</h3>
        <p>Är det något du undrar, tvecka inte att kontakta oss!</p>
        <a class="btn btn-red btn-expand" href="{{ route( 'contact' ) }}">Kontakta oss</a>
    </section>

@endsection
