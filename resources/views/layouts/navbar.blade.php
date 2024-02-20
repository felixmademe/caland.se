<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
    <a class="navbar-brand" href="{{ url( '/' ) }}">
        <img src="{{ asset( '/img/logo.png' ) }}" width="120" alt="Caland AB logo">
    </a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item link-effect {{ Request::is( '/' ) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route( 'index' ) }}">Start <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item link-effect {{ Request::is( 'tjanster/bemanning' ) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route( 'staff' ) }}">Bemanning</a>
            </li>
            <li class="nav-item link-effect {{ Request::is( 'tjanster/transport' ) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route( 'transport' ) }}">Transport</a>
            </li>
            <li class="nav-item link-effect {{ Request::is( 'tjanster/bygghjalpen' ) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route( 'help' ) }}">Bygghjälpen</a>
            </li>
            <li class="nav-item link-effect dropdown {{ Request::is( 'tjanster/haltagning' ) ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" id="concrete-dropdown" href="#" role="button" 
                   data-toggle="dropdown" aria-expanded="false">
                    Håltagning
                </a>
                <div class="dropdown-menu" id="concrete-dropdown-menu">
                    <a class="dropdown-item link-effect" href="{{ route( 'concrete' ) }}">Håltagning</a>
                    <a class="dropdown-item link-effect" href="{{ route( 'concrete-demolition' ) }}">Rivning</a>
                    <a class="dropdown-item link-effect" href="{{ route( 'concrete-asbest' ) }}">Asbetsanering</a>
                    <a class="dropdown-item link-effect" href="{{ route( 'concrete-transport' ) }}">Transport/lyfthjälp</a>
                    <a class="dropdown-item link-effect" href="{{ route( 'concrete-grinding' ) }}">Slipning av betonggolv</a>
                    <a class="dropdown-item link-effect" href="{{ route( 'concrete-machines' ) }}">Vår maskinpark</a>
                </div>
            </li>
            <li class="nav-item link-effect {{ Request::is( 'tjanster/utbildning' ) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route( 'course' ) }}">Utbildning</a>
            </li>
        </ul>
        <div class="dropdown-divider d-block d-lg-none"></div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item link-effect {{ Request::is( 'jobb' ) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route( 'job' ) }}">Jobb</a>
            </li>
            <li class="nav-item link-effect {{ Request::is( 'kontakt' ) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route( 'contact' ) }}">Kontakt</a>
            </li>
            <li class="nav-item link-effect dropdown {{ Request::is( 'om-oss' ) ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" id="about-dropdown" href="#" role="button" 
                   data-toggle="dropdown" aria-expanded="false">
                    Om oss
                </a>
                <div class="dropdown-menu" id="about-dropdown-menu">
                    <a class="dropdown-item link-effect" href="{{ route( 'about' ) }}">Om oss</a>
                    <a class="dropdown-item link-effect" href="{{ route( 'business-idea' ) }}">Affärsidé</a>
                    <a class="dropdown-item link-effect" href="{{ route( 'history' ) }}">Historia</a>
                    <a class="dropdown-item link-effect" href="{{ route( 'values' ) }}">Vår värdegrund</a>
                    <a class="dropdown-item link-effect" href="{{ route( 'about-policy' ) }}">Policy</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
