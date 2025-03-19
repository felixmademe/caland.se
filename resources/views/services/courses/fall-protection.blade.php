@extends( 'layouts.app' )
@section( 'title', 'Fallskydd inkl räddning' )
@section( 'content' )

    <section class="course-about">
        <h1>Fallskydd inkl räddning</h1>
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
