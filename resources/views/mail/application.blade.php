@extends( 'mail.layout' )
@section( 'content' )

    <h2>{{ $name }} ansöker om {{ $position }}</h2>
    <p>
        <b>Personligt brev:</b>
        <br><br>
        {{ $text }}
    </p>
    <br>
    <small>CV är bifogat i mailet.</small>

@endsection
