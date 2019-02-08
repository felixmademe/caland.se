@extends( 'layouts.app' )
@section( 'title', 'Bemanning' )
@section( 'content' )

    <section class="service-header">
        <img src="{{ asset( '/img/caland-foretagsservice.jpg' ) }}" alt="Caland Företagsservice">
        <br><br>
        <h1>Bemanning</h1>
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
            Vi erbjuder yrkeskunnig bemanning främst inom våra verksamhetsområden transport,
            industri och bygg. Vi löser såväl tillfälliga som varaktiga personalbehov. 
        </p>
        <div class="d-block row d-md-flex flex-md-row py-4">
            <div class="col-lg-5 d-flex align-items-center justify-content-center">
                <img class="img-fluid" src="{{ asset( 'img/service/staff-truck.jpg' ) }}" alt="Kranbil">
            </div>
            <div class="col-lg-7 mt-3 mt-md-0 bg-white d-flex align-items-center justify-content-center">
                <div class="text-block">
                    <h3>Personaluthyrning</h3>
                    <p>
                        Vi löser såväl tillfälliga som varaktiga personalbehov.
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-block row d-md-flex flex-md-row-reverse py-4">
            <div class="col-lg-5 d-flex align-items-center justify-content-center">
                <img class="img-fluid" src="{{ asset( 'img/service/staff-lorry.jpg' ) }}" alt="Kranbil">
            </div>
            <div class="col-lg-7 mt-3 mt-md-0 bg-white d-flex align-items-center justify-content-center">
                <div class="text-block">
                    <h3>Bemanningsentrepenad</h3>
                    <p>
                        Vi kan ta över ansvaret och bemanna en hel avdelning hos er, inklusive arbetsledning.
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-block row d-md-flex flex-md-row py-4">
            <div class="col-lg-5 d-flex align-items-center justify-content-center">
                <img class="img-fluid" src="{{ asset( 'img/service/staff-welding.jpg' ) }}" alt="Kranbil">
            </div>
            <div class="col-lg-7 mt-3 mt-md-0 bg-white d-flex align-items-center justify-content-center">
                <div class="text-block">
                    <h3>Rekrytering</h3>
                    <p>
                        På uppdrag hjälper vi till med rekrytering. Vår breda erfarenhet från
                        personaluthyrning hjälper er att hitta rätt kompetens.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="service-reference">
        <p>
            ”Med Caland Bemanning har vi ett tydligt och öppet samarbete som är
            anpassat efter våra krav och förväntningar.
            Caland erbjuder oss en flexibel lösning för vår säsongsbetonade produktion”
        </p>
        <small>Björn Jonnerberg, Produktionschef ArcelorMittal</small>
    </section>
    <hr>
    <section class="service-contact">
        <h3>Kontakta oss</h3>
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/charlotta.jpg' ) }}" alt="Charlotta Löfgren">
                <h4>Charlotta Löfgren</h4>
                <p>
                    <span class="red">Personalchef</span>
                    <br>
                    054-22 07 94
                    <br>
                    <a class="link-effect" href="mailto:charlotta@caland.se">charlotta@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/ellinor.jpg' ) }}" alt="Ellinor Halldan">
                <h4>Ellinor Halldan</h4>
                <p>
                    <span class="red">Konsultchef/HR</span>
                    <br>
                    054-22 07 95
                    <br>
                    <a class="link-effect" href="mailto:ellinor@caland.se">ellinor@caland.se</a>
                </p>
            </div>
        </div>
    </section>

@endsection
