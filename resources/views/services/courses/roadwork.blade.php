@extends( 'layouts.app' )
@section( 'title', 'Arbete på väg' )
@section( 'content' )

    <section class="course-about">
        <h1>Arbete på väg</h1>
        <p>
            Arbete på väg – Kursen uppfyller alla de krav på utbildningen, som Trafikverket ställer, för personal som utför arbete på väg.
            <br><br>
            <b>Kursbeskrivning:</b>
            <br>
            Kursen tar upp regler för säkerheten vid vägarbete och hur reglerna ska tillämpas vid olika typer av arbeten. Kursen innehåller också mer allmänna trafiksäkerhetsfrågor.
            <br><br>
            <b>Nivå 1</b> - är en grundläggande utbildning som alla ska genomgå  & som ligger till grund för Nivå 2.
            <br><br>
            <b>Nivå 2</b> - är en ny inriktning som avser alla som framför något slag av väghållningsfordon.
            <br><br>
            Välkommen att kontakta oss när ni är i behov av Arbete på Väg Utbildning i Karlstad och hela Värmland.
            <br><br>
            Läs mer om utbildningen här:
            <br>
            <a rel="noopener noreferrer" class="btn btn-red" href="{{ asset( 'storage/apv.pdf' ) }}" target="_blank">APV</a>
        </p>
    </section>
    <hr>
    <section class="course-return">
        <p>Klicka här för att gå tillbaka</p>
        <a rel="noopener noreferrer" class="btn btn-red" href="{{ route( 'course' ) }}">Utbildning</a>
    </section>

@endsection
