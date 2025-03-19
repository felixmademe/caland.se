@extends( 'mail.layout' )
@section( 'content' )

    <h2>{{ $subject }}</h2>
    <p>Kontakt: <a href="mailto:{{ $email }}">{{ $email }}</a></p>
    <p>{{ $text }}</p>

@endsection
