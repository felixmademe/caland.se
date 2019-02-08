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
        <h2>Vad gör vi?</h2>'
        <p>
            Vi erbjuder yrkeskunnig bemanning främst inom våra verksamhetsområden transport,
            industri och bygg. Vi löser såväl tillfälliga som varaktiga personalbehov.
        </p>'
        <div class="d-block row d-md-flex flex-md-row py-4">
            <div class="col-lg-5 d-flex align-items-center justify-content-center">
                <img class="img-fluid" src="{{ asset( 'img/collection.jpg' ) }}" alt="Kranbil">
            </div>
            <div class="col-lg-7 mt-3 mt-md-0 bg-white d-flex align-items-center justify-content-center">
                <div class="text-block">
                    <h3>Krokbil och lastmaskin</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit.
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-block row d-md-flex flex-md-row-reverse py-4">
            <div class="col-lg-5 d-flex align-items-center justify-content-center">
                <img class="img-fluid" src="{{ asset( 'img/collection.jpg' ) }}" alt="Kranbil">
            </div>
            <div class="col-lg-7 mt-3 mt-md-0 bg-white d-flex align-items-center justify-content-center">
                <div class="text-block">
                    <h3>Krokbil och lastmaskin</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit.
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-block row d-md-flex flex-md-row py-4">
            <div class="col-lg-5 d-flex align-items-center justify-content-center">
                <img class="img-fluid" src="{{ asset( 'img/collection.jpg' ) }}" alt="Kranbil">
            </div>
            <div class="col-lg-7 mt-3 mt-md-0 bg-white d-flex align-items-center justify-content-center">
                <div class="text-block">
                    <h3>Krokbil och lastmaskin</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit.
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
