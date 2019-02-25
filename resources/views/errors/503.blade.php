@extends( 'layouts.error' )
@section( 'title', '503' )
@section( 'content' )

    <section class="error-message d-flex align-items-center">
        <div class="justify-content-center text-center">
            <h1>Tillfälligt avbrott</h1>
            <p>
                Webbsidan är tillfälligt nere men är uppe så snart som möjligt.
                Tror du att något är fel, kontakta gärna vår support så löser vi det så snart som möjligt.
                <a href="{{ url( '/' ) }}">Klicka här för att gå till startsidan</a>
            </p>
            <a class="btn btn-red btn-expand" href="{{ route( 'support' ) }}">Support</a>
        </div>
    </section>

@endsection
