@extends( 'layouts.app' )
@section( 'title', 'Utbildning' )
@section( 'content' )

    <section class="service-header">
        <img src="{{ asset( '/img/caland-koncernen.jpg' ) }}" alt="Caland Företagsservice">
        <br><br>
        <h1>Utbildning</h1>
    </section>
    <hr>
    <section class="service-about">

        <p>
            Våra duktiga instruktörer erbjuder en mängd olika kompetenshöjande
            utbildningar inom bl a transport, bygg och industri. Kontakta oss när ni är
            i behov av nedan tjänster. Vi jobbar i hela landet.
        </p>
        <p>
            Våra utbildningar följer de riktlinjer som ges från Folkhälsomyndigheten gällande Covid-19.
            Vi kan erbjuda våra kunder utbildningar digitalt via E-Learning samt lärarledda kurser via dator.
        </p>
        <p>
            Kontakta oss för ett alternativ som passar dig bäst
        </p>
        <p>
            <i>Se längre ner för information och bokning av kurs.</i>
        </p>
        {{-- <div class="text-center">
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'adr' ) }}">
                ADR
            </a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'roadwork' ) }}">
                Arbete på väg
            </a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'lift' ) }}">
                Bom- och saxlift
            </a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'teleporter' ) }}">
                Fallskydd
            </a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'first-help' ) }}">
                Första hjälpen
            </a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'wheel-loader' ) }}">
                Hjullastare
            </a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'vehicle-crane' ) }}">
                Fordonsmonterad kran
            </a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'travers' ) }}">
                Travers
            </a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'forklift' ) }}">
                Truck
            </a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'secure-lift' ) }}">
                Säkra lyft
            </a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'warm-work' ) }}">
                Heta arbeten
            </a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'digger' ) }}">
                Grävmaskin
            </a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'teleporter' ) }}">
                Teleskoplastare
            </a>
            <a rel="noopener noreferrer" class="btn btn-red btn-expand m-1" href="{{ route( 'teleporter' ) }}">
                YKB
            </a>
        </div> --}}
    </section>
    <hr>
    <section class="service-book">
        <h2>Boka utbildning</h2>
        <iframe id="kursguiden-course-module" src="https://kursbokning.eport.se/?iframeKey=B012ED4B82A0723ED13F6C33E798CAB7AA5945C3AFEDBE434629B427AC9176C118DF63D7639EC37939B98367477B7923022EF0F3F050E6D87CF3B8005836BA73"
                frameborder="0" style="width:100%;min-height:110vh"></iframe>
    </section>
    {{--
    <section class="service-book">
        <h2>Boka utbildning</h2>

        <script src="https://www.kursguiden.no/js/autoresize.js" charset="utf-8"></script>
        <iframe id="kursguiden-course-module" src="https://www.kursguiden.no/coursemodule/?id=358"
            frameborder="0" style="width:100%;height:100vh;"></iframe>
    </section>
    --}}
    <hr>
    <section class="service-contact">
        <h3>Kontakta oss</h3>
        <div class="row">
            <div class="col-md-6">
                <h4>Johan Wallstav</h4>
                <p>
                    <span class="red">Utbildning/Ägare</span>
                    <br>
                    <a rel="noopener noreferrer" class="no-colour" href="tel:054220797">054-22 07 97</a>
                    <br>
                    <a rel="noopener noreferrer" class="no-colour" href="mailto:johan@caland.se">johan@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <h4>Reimond Sundström</h4>
                <p>
                    <span class="red">Utbildning</span>
                    <br>
                    <a rel="noopener noreferrer" class="no-colour" href="tel:054220798">054-22 07 98</a>
                    <br>
                    <a rel="noopener noreferrer" class="no-colour" href="mailto:reimond@caland.se">reimond@caland.se</a>
                </p>
            </div>
        </div>
    </section>
    <hr>
    <section class="service-return">
        <p>Klicka här för att gå tillbaka</p>
        <a rel="noopener noreferrer" class="btn btn-red btn-expand" href="{{ route( 'services' ) }}">Tjänster</a>
    </section>

@endsection
