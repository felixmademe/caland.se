@extends( 'layouts.app' )
@section( 'title', '404' )
@section( 'content' )

    <section class="error-message d-flex align-items-center">
        <div class="justify-content-center text-center">
            <h1>Sidan finns inte</h1>
            <p>
                Sidan du försökte komma åt finns inte.
                Tror du att något är fel, kontakta gärna vår support så löser vi det så snart som möjligt.
                <a href="{{ url( '/' ) }}">Klicka här</a> för att gå till startsidan
            </p>
            <a class="btn btn-red btn-expand" href="{{ route( 'support' ) }}">Support</a>
        </div>
    </section>

@endsection
