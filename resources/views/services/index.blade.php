@extends( 'layouts.app' )
@section( 'title', 'Tjänster' )
@section( 'content' )

    <section class="service-header">
        <h1>Tjänster</h1>
        {{-- <p>
            Vi har resurser, metoder och kompetens att utföra
            professionella tjänster inom byggbranschen.
            <br>
            <span class="underline">Bredden är vår styrka</span>.
        </p> --}}
    </section>
    <hr>
    <section class="service-about">
        <div class="text-center">
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'staff' ) }}">Bemanning</a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'concrete' ) }}">Håltagning</a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'concrete' ) }}">Rivning</a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'asbest' ) }}">Asbestsanering</a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'transport' ) }}">Transport</a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'course' ) }}">Utbildning</a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'help' ) }}">Bygghjälpen</a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'cleaning' ) }}">Städ</a>
        </div>
    </section>
    <hr>
    <section class="service-contact text-center">
        <h3>Kontakt</h3>
        <p>Är det något du undrar, tveka inte att kontakta oss!</p>
        <a rel="noopener noreferrer" class="btn btn-red btn-expand" href="{{ route( 'contact' ) }}">Kontakta oss</a>
    </section>

@endsection
