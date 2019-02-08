@extends( 'layouts.app' )
@section( 'title', 'Bom och saxlift-utbildning' )
@section( 'content' )

    <section class="course-about">
        <h1>Bom och saxlift-utbildning</h1>
        <p>
            Utbildning i mobila arbetsplattformar Skylift, saxlift och Bom i Karlstad & Värmland
            <br><br>
            Caland är certifierade och utfärdar förarbevis på mobila arbetsplattformar, s k skylift
            och saxplattform enligt SS-ISO 18878:2004
            <br><br>
            I utbildningen på mobila arbetsplattformar, s k skylift och saxlift plattform,
            betonas säkerhetsaspekten för att skapa en säker arbetsmiljö. Utbildningen pågår en dag.
            <br><br>
            Innehåll: Genomgång av förarkrav. Besiktning. Instruktioner. Trafikregler. Kontroll
            av plattform, körövningar och säkerhetsutrustning etc.
            <br><br>
            Syfte/mål med kursen:
            <br>
            Kursens syfte är att utbilda användare av lift / mobila arbetsplattformar till säkra
            och ekonomiska förare. Efter avslutad liftutbildning med godkända resultat utfärdas kursintyg.
            <br>
            Kontakta oss för mer information gällande skylift, saxlift och andra liftutbildningar.
            <br>
            Läs mer om utbildningen här:
            <br>
            <a class="btn btn-red" href="{{ asset( 'storage/bom-och-saxlift.pdf' ) }}" target="_blank">Bom och saxlift</a>
        </p>
    </section>
    <hr>
    <section class="course-return">
        <p>Klicka här för att gå tillbaka</p>
        <a class="btn btn-red" href="{{ route( 'course' ) }}">Utbildningar</a>
    </section>

@endsection