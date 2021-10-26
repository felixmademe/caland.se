@extends( 'layouts.app' )
@section( 'title', 'Teleporter' )
@section( 'content' )

    <section class="course-about">
        <h1>Teleporter</h1>
        <p>
            Innehåller alla obligatoriska delar både teoretiskt och praktiskt.
            <br>
            Gaffel , personkorg , skopa , vajerspel.
        </p>
    </section>
    <hr>
    <section class="course-return">
        <p>Klicka här för att gå tillbaka</p>
        <a rel="noopener noreferrer" class="btn btn-red" href="{{ route( 'course' ) }}">Utbildning</a>
    </section>

@endsection
