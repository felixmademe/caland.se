@extends( 'mail.layout' )
@section( 'content' )

    <h2>
        {{ $name }}
        <br>
        <a href="mailto:{{ $email }}">{{ $email }}</a>

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
