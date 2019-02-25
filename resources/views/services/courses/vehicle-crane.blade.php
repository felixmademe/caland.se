@extends( 'layouts.app' )
@section( 'title', 'Fordonsmonterad kranutbildning' )
@section( 'content' )

    <section class="course-about">
        <h1>Fordonsmonterad kranutbildning</h1>
        <p>
            <b>Fordonsmonterad Kranutbildning</b>
            <br><br>
            Utbildning där du lär dig att köra fordonsmonterad kran.
            <br><br>
            Fordonsmonterad kranar delas in i två kategorier: 1: Kranar med kapacitet upp till 18 tonmeter och timmerkranar oavsett storlek. 2: Kranar med kapacitet över 18 tonmeter.
            <br><br>
            Förkunskapskrav: Körkortsklass lägst *BC***. Utbildningen ger intyg för båda kategorierna.
            <br><br>
            Efter avslutad och godkänd utbildning erhålles intyg enligt TYA
            <br><br>
            Välkommen att kontakta oss när ni behöver utbildas i Fordonsmonterad Kranutbildning i Karlstad & Värmland.
        </p>
    </section>
    <hr>
    <section class="course-return">
        <p>Klicka här för att gå tillbaka</p>
        <a class="btn btn-red" href="{{ route( 'course' ) }}">Utbildning</a>
    </section>

@endsection
