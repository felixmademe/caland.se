<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
    <a rel="noopener noreferrer" class="navbar-brand" href="{{ url( '/' ) }}">
        <img src="{{ asset( '/img/logo.png' ) }}" width="120" alt="Caland AB logo">
    </a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item link-effect {{ Request::is( '/' ) ? 'active' : '' }}">
                <a rel="noopener noreferrer" class="nav-link" href="{{ route( 'index' ) }}">Start <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item link-effect {{ Request::is( 'tjanster/bemanning' ) ? 'active' : '' }}">
                <a rel="noopener noreferrer" class="nav-link" href="{{ route( 'staff' ) }}">Bemanning</a>
            </li>
            <li class="nav-item link-effect {{ Request::is( 'tjanster/transport' ) ? 'active' : '' }}">
                <a rel="noopener noreferrer" class="nav-link" href="{{ route( 'transport' ) }}">Transport</a>
            </li>
            <li class="nav-item link-effect {{ Request::is( 'tjanster/bygghjalpen' ) ? 'active' : '' }}">
                <a rel="noopener noreferrer" class="nav-link" href="{{ route( 'help' ) }}">Bygghjälpen</a>
            </li>
            <li class="nav-item link-effect {{ Request::is( 'tjanster/haltagning' ) ? 'active' : '' }}">
                <a rel="noopener noreferrer" class="nav-link" href="{{ route( 'concrete' ) }}">Håltagning</a>
            </li>
            <li class="nav-item link-effect {{ Request::is( 'tjanster/utbildning' ) ? 'active' : '' }}">
                <a rel="noopener noreferrer" class="nav-link" href="{{ route( 'course' ) }}">Utbildning</a>
            </li>
        </ul>
        <div class="dropdown-divider d-block d-lg-none"></div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item link-effect {{ Request::is( 'jobb' ) ? 'active' : '' }}">
                <a rel="noopener noreferrer" class="nav-link" href="{{ route( 'job' ) }}">Jobb</a>
            </li>
            <li class="nav-item link-effect {{ Request::is( 'kontakt' ) ? 'active' : '' }}">
                <a rel="noopener noreferrer" class="nav-link" href="{{ route( 'contact' ) }}">Kontakt</a>
            </li>
            <li class="nav-item link-effect {{ Request::is( 'om-oss' ) ? 'active' : '' }}">
                <a rel="noopener noreferrer" class="nav-link" href="{{ route( 'about' ) }}">Om oss</a>
            </li>
        </ul>
    </div>
</nav>
