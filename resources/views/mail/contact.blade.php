@extends( 'mail.layout' )
@section( 'content' )

    <h2>{{ $subject }}</h2>
    <p>{{ $text }}</p>

@endsection
