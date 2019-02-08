@extends( 'layouts.app' )
@section( 'title', 'Transport' )
@section( 'content' )

    <section class="service-header">
        <img src="{{ asset( '/img/caland-transport.jpg' ) }}" alt="Caland Transport AB">
        <br><br>
        <h1>Transport</h1>
        <p>
            Vi har resurser, metoder och kompetens att utföra
            professionella tjänster inom byggbranschen.
            <span class="underline">Bredden är vår styrka</span>
        </p>
    </section>
    <hr>
    <section class="service-about">
        <h2>Vad gör vi?</h2>
        <p>
            Vi erbjuder yrkeskunnig hjälp inom stora som små transporter
            i framförallt Sverige. Kontakta oss när ni är i behov av nedan tjänster.
            Vi utgår från Karlstad & Värmland men jobbar i hela Sverige.
        </p>
        <br>
        <div class="d-block row d-md-flex flex-md-row py-4">
            <div class="col-lg-5 d-flex align-items-center justify-content-center">
                <img class="img-fluid" src="{{ asset( 'img/service/kranbil.jpg' ) }}" alt="Kranbil">
            </div>
            <hr>
            <div class="col-lg-7 bg-white d-flex align-items-center justify-content-center">
                <div class="text-block">
                    <h3>Kranbilstransporter</h3>
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
                <img class="img-fluid" src="{{ asset( 'img/service/krokbil.jpg' ) }}" alt="Kranbil">
            </div>
            <br class="d-block d-md-none">
            <div class="col-lg-7 bg-white d-flex align-items-center justify-content-center">
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
        <div class="text-center my-3">
            <img src="{{ asset( 'img/service/iso.jpg' ) }}" alt="">
        </div>
    </section>
    <hr>
    <section class="service-contact">
        <h3>Kontakta oss</h3>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <img class="img-fluid" src="{{ asset( '/img/staff/henrik.jpg' ) }}" alt="Henrik Pagré">
                <h4>Henrik Pagré</h4>
                <p>
                    <span class="red">Logistikansvarig</span>
                    <br>
                    054-22 07 92
                    <br>
                    <a class="link-effect" href="mailto:henrik@caland.se">henrik@caland.se</a>
                </p>
            </div>
        </div>
    </section>
@endsection
