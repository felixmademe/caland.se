@extends( 'layouts.app' )
@section( 'title', 'Truckutbildning' )
@section( 'content' )

    <section class="course-about">
        <h1>Truckutbildning</h1>
        <p>
            <h4>Vi erbjuder truckutbildningar i Karlstad & hela Värmland</h4>
            <b>Truckkort A</b>: Låglyftande plocktruck, ledstaplare, låglyftande åktruck samt låglyftare.
            <br><br>
            <b>Truckkort B</b>: Omfattar alla truckar inom A samt motviktstruck.
            <br><br>
            Även höglyftande åkstaplare, skjutstativtruck, höglyftande plocktruck, smalgångstruck
            samt fyrvägstruck. (Detta är den vanligaste utbildningen)
            <br><br>
            Utbildningarna inriktar sig framförallt på säkerheten i det dagliga arbetet med truck.
            <br>
            Välkommen att kontakta oss för mer information gällande truckutbildning och truckkort.
            <br><br>
            Läs mer om utbildningen här:
            <br>
            <a rel="noopener noreferrer" class="btn btn-red" href="{{ asset( 'storage/truck.pdf' ) }}" target="_blank">Truck</a>
        </p>
    </section>
    <hr>
    <section class="course-return">
        <p>Klicka här för att gå tillbaka</p>
        <a rel="noopener noreferrer" class="btn btn-red" href="{{ route( 'course' ) }}">Utbildning</a>
    </section>

@endsection
