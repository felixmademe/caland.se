@extends( 'layouts.app' )
@section( 'title', 'Brandfarliga arbeten' )
@section( 'content' )

    <section class="course-about">
        <h1>Brandfarliga arbeten</h1>
        <p>
            Information kommer snart.
        </p>
    </section>
    <hr>
    <section class="course-return">
        <p>Klicka här för att gå tillbaka</p>
        <a rel="noopener noreferrer" class="btn btn-red" href="{{ route( 'course' ) }}">Utbildning</a>
    </section>

@endsection
