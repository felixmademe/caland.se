@extends( 'layouts.app' )
@section( 'title', 'Första-hjälpen' )
@section( 'content' )

    <section class="course-about">
        <h1>Första hjälpen</h1>
        <p>
            Calandkoncernen kämpar för att ingen ska lämnas ensam i en katastrof. Våra utbildningar
            i första hjälpen och hjärt-lungräddning är ett konkret sätt att omsätta denna ambition i handling.
            <br><br>
            Calandkoncernen utbildar årligen företag i första hjälpen. Vi har flera färdiga utbildningspaket
            men skräddarsyr även efter kundens önskemål. Våra instruktörer är utbildade och certifierade
            enligt HLR-Rådets riktlinjer.
            <br><br>
            Kontakta oss för mer information gällande Första Hjälpen utbildningar i Karlstad och hela Värmland.
            <br><br>
            Läs mer om utbildningen här:
            <br>
            <a rel="noopener noreferrer" class="btn btn-red" href="{{ asset( 'storage/första-hjälpen.pdf' ) }}" target="_blank">Första hjälpen</a>
        </p>
    </section>
    <hr>
    <section class="course-return">
        <p>Klicka här för att gå tillbaka</p>
        <a rel="noopener noreferrer" class="btn btn-red" href="{{ route( 'course' ) }}">Utbildning</a>
    </section>

@endsection
