@extends( 'layouts.app' )
@section( 'title', 'ADR-utbildning' )
@section( 'content' )

    <section class="course-about">
        <h1>ADR-utbildning</h1>
        <p>
            <h4>Full ADR behörighet för chaufförer</h4>
            <br>
            ADR ny Grund, styckegods omfattar alla klasser.
            <br><br>
            Efter godkänd utbildning utfärdas ett ADR – intyg som gäller i fem år.
            <br><br>
            ADR-utbildning riktar sig till:
            <br>
            <ul>
                <li>Chaufförer som transporterar mindre mängder farligt gods</li>
                <li>övrig personal som kommer i kontakt med farligt gods, t ex kontor, lager- och terminalpersonal</li>
            </ul>
            Om det kan räknas som mindre mängd beror på ämnets farlighet och kvantiteten. Kontakta oss så
            hjälper vi er att ta reda på om ni behöver någon utbildning och i så fall vilken.
            <br><br>
            Vi ger ADR 1.3 både som företagsanpassade kurser och som öppna utbildningar dit ni kan skicka enstaka deltagare.
            <br><br>
            Välkommen att kontakta oss när ni är i behov av ADR Utbildning i Karlstad och hela Värmland
            <br><br>
            Läs mer om utbildningarna här:
            <br>
            <a class="btn btn-red" href="{{ asset( 'storage/ADR.pdf' ) }}" target="_blank">ADR</a>
            <a class="btn btn-red" href="{{ asset( 'storage/ADR-1.3.pdf' ) }}" target="_blank">ADR 1.3</a>
        </p>
    </section>
    <hr>
    <section class="course-return">
        <p>Klicka här för att gå tillbaka</p>
        <a class="btn btn-red" href="{{ route( 'course' ) }}">Utbildning</a>
    </section>

@endsection
