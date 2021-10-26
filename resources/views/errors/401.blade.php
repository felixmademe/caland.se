@extends( 'layouts.error' )
@section( 'title', '401' )
@section( 'content' )

    <section class="error-message d-flex align-items-center">
        <div class="justify-content-center text-center">
            <h1>Nekad åtkomst</h1>
            <p>
                Du har inte tillåtesle att se den här sidan.
                Tror du att något är fel, kontakta gärna vår support så löser vi det så snart som möjligt.
                <a rel="noopener noreferrer" href="{{ url( '/' ) }}">Klicka här</a> för att gå till startsidan
            </p>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand" href="{{ route( 'support' ) }}">Support</a>
        </div>
    </section>

@endsection
