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
                <h4>Henrik Pagré</h4>
                <p>
                    <span class="red">Transport</span>
                    <br>
                    Logistikansvarig
                    <br>
                    054-22 07 92
                    <br>
                    <a class="link-effect" href="mailto:henrik@caland.se">henrik@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <h4>Ellinor Halldan</h4>
                <p>
                    <span class="red">Företagsservice</span>
                    <br>
                    Konsultchef/HR
                    <br>
                    054-22 07 95
                    <br>
                    <a class="link-effect" href="mailto:ellinor@caland.se">ellinor@caland.se</a>
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
