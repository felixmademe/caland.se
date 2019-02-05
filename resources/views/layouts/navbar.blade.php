<nav class="navbar navbar-expand-md fixed-top scrolling-navbar">
    <a class="navbar-brand" href="{{ url( '/' ) }}">
        <img src="{{ asset( '/img/logo.png' ) }}" width="120" alt="Caland AB logo">
    </a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route( 'index' ) }}">Start <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tjänster
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route( 'concrete' ) }}">Betonghåltagning</a>
                    <a class="dropdown-item" href="{{ route( 'transport' ) }}">Transport</a>
                    <a class="dropdown-item" href="{{ route( 'staff' ) }}">Bemaning</a>
                    <a class="dropdown-item" href="{{ route( 'education' ) }}">Utbildning</a>
                    <a class="dropdown-item" href="{{ route( 'help' ) }}">Bygghjälpen</a>
                    <a class="dropdown-item" href="{{ route( 'cleaning' ) }}">Städ</a>
                    <a class="dropdown-item" href="{{ route( 'company-service' ) }}">Företagsservice</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route( 'services' ) }}">Se alla tjänster</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route( 'job' ) }}">Jobb</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route( 'about' ) }}">Om oss</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route( 'contact' ) }}">Kontakt</a>
            </li>
        </ul>
    </div>
</nav>
