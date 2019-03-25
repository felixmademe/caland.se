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
            <span class="underline">Bredden är vår styrka</span>.
        </p>
    </section>
    <hr>
    <section class="service-about">
        <h2>Vad gör vi?</h2>
        <p>
            Våra duktiga instruktörer erbjuder en mängd olika kompetenshöjande
            utbildningar inom bl a transport, bygg och industri. Kontakta oss när ni är
            i behov av nedan tjänster. Vi jobbar i Karlstad & hela Värmland.
            <br>
            <i>Se längre ner för bokning av kurs.</i>
        </p>
        <div class="text-center">
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'adr' ) }}">
                ADR-utbildning
            </a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'roadwork' ) }}">
                Arbete på väg-utbildning
            </a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'lift' ) }}">
                Bom- och saxliftutbildning
            </a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'first-help' ) }}">
                Första hjälpen-utbildning
            </a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'wheel-loader' ) }}">
                Hjullastarutbildning
            </a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'vehicle-crane' ) }}">
                Fordonsmonterad kranutbildning
            </a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'travers' ) }}">
                Traversutbildning
            </a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'forklift' ) }}">
                Truckutbildning
            </a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'secure-lift' ) }}">
                Säkra lyft-utbildning
            </a>
            <a class="btn btn-red btn-expand m-1" href="{{ route( 'warm-work' ) }}">
                Heta arbeten
            </a>
        </div>
        <div class="text-center my-3">
            <img src="{{ asset( 'img/services/iso.jpg' ) }}" alt="ISO Certifikationer">
        </div>
    </section>
    <hr>
    <section class="service-book">
        <h2>Boka utbildning</h2>
        <script src="https://www.kursguiden.no/js/autoresize.js" charset="utf-8"></script>
        <iframe id="kursguiden-course-module" src="https://www.kursguiden.no/coursemodule/?id=358"
            frameborder="0" style="width:100%;height:100vh;"></iframe>
    </section>
    <hr>
    <section class="service-contact">
        <h3>Kontakta oss</h3>
        <div class="row">
            <div class="col-md-6">
                <h4>Johan Wallstav</h4>
                <p>
                    <span class="red">Företagsservice</span>
                    <br>
                    <b>Utbildare</b>
                    <br>
                    054-22 07 97
                    <br>
                    <a class="link-effect" href="mailto:johan@caland.se">johan@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <h4>Reimond Sundström</h4>
                <p>
                    <span class="red">Företagsservice</span>
                    <br>
                    <b>Utbildare</b>
                    <br>
                    054-22 07 98
                    <br>
                    <a class="link-effect" href="mailto:reimond@caland.se">reimond@caland.se</a>
                </p>
            </div>
        </div>
    </section>
    <hr>
    <section class="service-return">
        <p>Klicka här för att gå tillbaka</p>
        <a class="btn btn-red btn-expand" href="{{ route( 'services' ) }}">Tjänster</a>
    </section>

@endsection
