@extends( 'layouts.app' )
@section( 'title', 'Heta arbetens' )
@section( 'content' )

    <section class="course-about">
        <h1>Heta arbeten</h1>
        <p>
            Information kommer snart.
        </p>
    </section>
    <hr>
    <section class="course-return">
        <p>Klicka här för att gå tillbaka</p>
        <a class="btn btn-red" href="{{ route( 'course' ) }}">Utbildningar</a>
    </section>

@endsection