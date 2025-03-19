@extends( 'layouts.app' )
@section( 'title', 'Traverskranutbildning' )
@section( 'content' )

    <section class="course-about">
        <h1>Traverskranutbildning</h1>
        <p>
            Vi på Caland är certifierade och erbjuder Traverskranutbildning som följer SS-ISO 9926-1.
            <br><br>
            <b>Kursinnehåll:</b>
            <br>
            Introduktion och terminologi, vad är vad? Konstruktion, hur vikt fördelas,
            operatörens roll, användning. Kommunikation och lasthantering. Underhåll och kontroll.
            Lagar, regler, ergonomi, säkerhet och olyckor.
            <br><br>
            <b>Vad säger lagen?</b>
            <br>
            Krav på denna utbildning ställs i Arbetsmiljöverkets föreskrift AFS:2006:6.
            <br>
            Utdrag från § 29 i denna föreskrift:
            <br><br>
            <span class="italic">”En arbetsgivare som låter en arbetstagare eller inhyrd arbetskraft använda
            lyftanordningar eller lyftredskap skall ha dokumentation över dennes praktiska och
            teoretiska kunskaper med avseende på säker användning av utrustningen.”</span>
            <br><br>
            Kontakta oss för mer information gällande Traverutbildning i Karlstad och Värmland.
        </p>
    </section>
    <hr>
    <section class="course-return">
        <p>Klicka här för att gå tillbaka</p>
        <a rel="noopener noreferrer" class="btn btn-red" href="{{ route( 'course' ) }}">Utbildning</a>
    </section>

@endsection
