@extends( 'layouts.app' )
@section( 'title', 'Hjullastare' )
@section( 'content' )

    <section class="course-about">
        <h1>Hjullastarutbildning</h1>
        <p>
            <h4>Översikt</h4>
            Inför denna utbildning vill vi gärna veta vilka förkunskaper och erfarenhet ni har sedan tidigare, detta för att göra en individuell utbildningsplan.
            <br><br>
            <h4>Mål</h4>
            Vårt mål med utbildningen är att ge deltagaren de kunskaper som behövs att använda en hjullastare på ett rätt och säkert sätt inom användningsområdet.
            <br><br>
            Teoretisk och Praktisk Genomgång.
            <br><br>
            Kursen fördelas lika mellan en praktisk och en teoretisk del som avslutas med ett skriftligt prov, samt att ett antal praktiska moment skall vara godkända, materialhanteringövningar med både skopa och gafflar.
            <br><br>
            Teoretiska delar. Arbetsmiljölagen trafiklagstiftning, arbetsskydd och företagens egna regler. Uppbyggnad av maskin, ergonomi, särskilda risker vid användning av maskinen.
            <br><br>
            <h4>Bedömning</h4>
            Företaget har instruktörer som tecknat avtal med TYA om truck/maskinförarutbildning
            <br><br>
            Efter genomgången kurs erhålls deltagare diplom för kursen samt utbildningsintyg. Vid god erfarenhet 30 månader/4000 timmar vänligen kontakta oss för yrkesbevis.
            <br><br>
            Efter utbildningen skall deltagaren kunna.
            <br><br>
            Utföra säkerhetskontroller, daglig tillsyn och underhåll av hjullastaren, uppbyggnad och arbetssätt, välja rätt redskap för den tänkta uppgiften, placera hjullastaren så största stabilitet nås vid olika situationer, metoder för att öka maskinen framkomlighet, om maskinen fastnat, beräkna lyftförmåga enl. diagram, manöverera maskinen efter tecken och radio samt regler på allmän väg och på ett kvalite`,miljö och säkerhetsmedvetet sätt framföra maskinen.
            <br><br>
            Läs mer om utbildningen här
            <br>
            <a class="btn btn-red" href="{{ asset( 'storage/hjullastare.pdf' ) }}" target="_blank">Hjullastare</a>
        </p>
    </section>
    <hr>
    <section class="course-return">
        <p>Klicka här för att gå tillbaka</p>
        <a class="btn btn-red" href="{{ route( 'course' ) }}">Utbildning</a>
    </section>

@endsection
