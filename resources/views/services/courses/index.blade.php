@extends( 'layouts.app' )
@section( 'title', 'Utbildning' )
@section( 'content' )

    <section class="service-header">
        <img src="{{ asset( '/img/caland-koncernen.jpg' ) }}" alt="Caland Företagsservice">
        <br><br>
        <h1>Utbildning</h1>
        <p>
            Vi har resurser, metoder och kompetens att utföra
            professionella tjänster inom byggbranschen.
            <br>
            <span class="underline">Bredden är vår styrka</span>
        </p>
    </section>
    <hr>
    <section class="service-about">
        <h2>Vad gör vi?</h2>
        <p>
            Våra duktiga instruktörer erbjuder en mängd olika kompetenshöjande
            utbildningar inom bl a transport, bygg och industri. Kontakta oss när ni är
            i behov av nedan tjänster. Vi jobbar i Karlstad & hela Värmland.
        </p>
        <ul class="list-group list-group-flush">
            <a href="{{ route( 'adr' ) }}" class="list-group-item">
                ADR-utbildning
            </a>
            <a href="{{ route( 'roadwork' ) }}" class="list-group-item">
                Arbete på väg-utbildning
            </a>
            <a href="{{ route( 'lift' ) }}" class="list-group-item">
                Bom och saxlift-utbildning
            </a>
            <a href="{{ route( 'first-help' ) }}" class="list-group-item">
                Första hjälpen-utbildning
            </a>
            <a href="{{ route( 'wheel-loader' ) }}" class="list-group-item">
                Hjullastare-utbildning
            </a>
            <a href="{{ route( 'vehicle-crane' ) }}" class="list-group-item">
                Fordonsmonterad kranutbildning
            </a>
            <a href="{{ route( 'travers' ) }}" class="list-group-item">
                Traversutbildning
            </a>
            <a href="{{ route( 'forklift' ) }}" class="list-group-item">
                Truckutbildning
            </a>
            <a href="{{ route( 'secure-lift' ) }}" class="list-group-item">
                Säkra Lyftutbildning
            </a>
            <a href="{{ route( 'warm-work' ) }}" class="list-group-item">
                Heta Arbeten
            </a>
        </ul>
        <div class="text-center my-3">
            <img src="{{ asset( 'img/service/iso.jpg' ) }}" alt="">
        </div>
    </section>
    <hr>
    <section class="service-reference">
        <p>
            ”Då jag anlitar Caland Utbildning så kan jag vara säker på att mina medarbetare
            har de behörigheter som krävs för att arbeta åt mig. Vidare har jag stor hjälp
            av Caland i mina miljö- och  säkerhetsfrågor. Jag ser dem som en långsiktig samarbetspartner”
        </p>
        <small>Roger Olsson, Rogers Åkeri AB</small>
    </section>
    <hr>
    <section class="service-contact">
        <h3>Kontakta oss</h3>
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/johan.jpg' ) }}" alt="Johan Wallstav">
                <h4>Johan Wallstav</h4>
                <p>
                    <span class="red">Utbildare</span>
                    <br>
                    054-22 07 97
                    <br>
                    <a class="link-effect" href="mailto:johan@caland.se">johan@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/reimond.jpg' ) }}" alt="Reimond Sundström">
                <h4>Reimond Sundström</h4>
                <p>
                    <span class="red">Utbildare</span>
                    <br>
                    054-22 07 98
                    <br>
                    <a class="link-effect" href="mailto:reimond@caland.se">reimond@caland.se</a>
                </p>
            </div>
        </div>
    </section>

@endsection
