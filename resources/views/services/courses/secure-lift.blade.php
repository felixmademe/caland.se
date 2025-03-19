@extends( 'layouts.app' )
@section( 'title', 'Säkra lyft' )
@section( 'content' )

    <section class="course-about">
        <h1>Säkra lyft lastkopplingsutbildning</h1>
        <p>
            <h4>Säkra lyft lastkopplingsutbildning</h4>
            Majoriteten av alla olyckor beror på felhantering av last eller redskap. Genom att känna
            till lagar, föreskrifter och standarder kan ni planera och utföra lyftarbetet på ett säkert sätt.
            <br><br>
            Med en säkra lyft minskar ni risken för antalet olyckor och tillbud.
            <br><br>
            Våra kurser uppfyller myndigheternas krav på dokumenterad utbildning och bygger på lång
            erfarenhet från besiktning och kontroll.
            <br><br>
            Vi hjälper dig med en kurs anpassad efter just ditt företags behov. Kontakta oss när ni
            ska utbildas i Säkra lyft lastkopplingsutbildning i Karlstad och Värmland
            <br><br>
            Läs mer om utbildningen här:
            <br>
            <a rel="noopener noreferrer" class="btn btn-red" href="{{ asset( 'storage/säkra-lyft.pdf' ) }}" target="_blank">Säkra lyft lastkopplingsutbildning</a>
        </p>
    </section>
    <hr>
    <section class="course-return">
        <p>Klicka här för att gå tillbaka</p>
        <a rel="noopener noreferrer" class="btn btn-red" href="{{ route( 'course' ) }}">Utbildning</a>
    </section>

@endsection
