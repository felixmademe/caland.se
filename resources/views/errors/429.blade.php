@extends( 'layouts.app' )
@section( 'title', '429' )
@section( 'content' )

    <section class="error-message d-flex align-items-center">
        <div class="justify-content-center text-center">
            <h1>För många förfrågningar</h1>
            <p>
                Servern har tagit emot för många förfrågningar, vänligen vänta lite och försök igen.
                Tror du att något är fel, kontakta gärna vår support så löser vi det så snart som möjligt.
                <a href="{{ url( '/' ) }}">Klicka här</a> för att gå till startsidan
            </p>
            <a class="btn btn-red btn-expand" href="{{ route( 'support' ) }}">Support</a>
        </div>
    </section>

@endsection
