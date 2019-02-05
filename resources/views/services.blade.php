@extends( 'layouts.app' )
@section( 'title', 'Tjänster' )
@section( 'content' )

    <div class="services">
        <h1 class="text-center">Tjänster</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <hr>
        <ul class="list-group list-group-flush">
            <a href="{{ route( 'concrete' ) }}" class="list-group-item">
                Betonghåltagning
            </a>
            <a href="{{ route( 'transport' ) }}" class="list-group-item">
                Transport
            </a>
            <a href="{{ route( 'staff' ) }}" class="list-group-item">
                Bemanning
            </a>
            <a href="{{ route( 'education' ) }}" class="list-group-item">
                Utbildning
            </a>
            <a href="{{ route( 'help' ) }}" class="list-group-item">
                Bygghjälpen
            </a>
            <a href="{{ route( 'cleaning' ) }}" class="list-group-item">
                Städ
            </a>
            <a href="{{ route( 'company-service' ) }}" class="list-group-item">
                Företagsservice
            </a>
        </ul>
    </div>

@endsection
