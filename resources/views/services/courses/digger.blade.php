@extends( 'layouts.app' )
@section( 'title', 'Grävmaskin' )
@section( 'content' )

    <section class="course-about">
        <h1>Grävmaskin</h1>
        <p>
            Utbildningsintyg eller Yrkesbevis på Grävmaskin eller Grävlastare.
        </p>
    </section>
    <hr>
    <section class="course-return">
        <p>Klicka här för att gå tillbaka</p>
        <a class="btn btn-red" href="{{ route( 'course' ) }}">Utbildning</a>
    </section>

@endsection
