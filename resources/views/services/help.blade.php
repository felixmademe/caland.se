@extends( 'layouts.app' )
@section( 'title', 'Bygghjälp' )
@section( 'content' )

    <section class="service-header">
        <img src="{{ asset( '/img/caland-foretagsservice.jpg' ) }}" alt="Caland Företagsservice">
        <br><br>
        <h1>Bygghjälpen</h1>
    </section>
    <hr>
    <section class="service-about">
        <p>
            Vänder sig till företag som verkar inom byggindustrin. Här kan du få hjälp med enklare uppdrag
            för att underlätta ert arbete. Bygghjälpen kan hjälpa er med tjänster såsom hantlangning, bärhjälp,
            byggstäd med mera.
            <ul>
                <li>Hantlangning</li>
                <li>Bärhjälp</li>
                <li>Bortforsling av material</li>
            </ul>
            Oavsett om ni har behov av handkraft eller maskinell hjälp så tveka inte att höra av er till oss.
        </p>
    </section>
    <hr>
    <section class="service-contact">
        <h3>Kontakta oss</h3>
        <div class="row">
            <div class="col-md-6">
                <h4>Marcus Andersson</h4>
                <p>
                    <span class="red">Håltagning/Byggtjänster</span>
                    <br>
                    <a class="no-colour" href="tel:0705379828">070-537 98 28</a>
                    <br>
                    <a class="no-colour" href="mailto:marcus@caland.se">marcus@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <h4>Robin Gränsed</h4>
                <p>
                    <span class="red">Håltagning/Byggtjänster</span>
                    <br>
                    <a class="no-colour" href="tel:0703998123">070-399 81 23</a>
                    <br>
                    <a class="no-colour" href="mailto:robin@caland.se">robin@caland.se</a>
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
