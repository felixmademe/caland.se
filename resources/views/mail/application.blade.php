@extends( 'mail.layout' )
@section( 'content' )

    <h2>
        {{ $name }}
        <br>
        {{ $position }}
    </h2>
    <p>
        <b>Personligt brev:</b>
        <br><br>
        {{ $text }}
    </p>
    <small>CV finns bifogat nedan.</small>

@endsection
