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
            <br>
            <span class="underline">Bredden är vår styrka</span>
        </p>
    </section>
    <hr>
    <section class="service-about">
        <h2>Vad gör vi?</h2>
        <p class="text-center">
            Vi erbjuder yrkeskunnig hjälp inom stora som små transporter
            i framförallt Sverige. Kontakta oss när ni är i behov av nedan tjänster.
            Vi utgår från Karlstad & Värmland men jobbar i hela Sverige.
        </p>
        <div class="row justify-content-center">
            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active btn-red-border m-1" id="first-tab" data-toggle="pill" href="#first"
                        role="tab" aria-controls="first" aria-selected="true">
                        Styckegodstransporter
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="second-tab" data-toggle="pill" href="#second"
                    role="tab" aria-controls="second" aria-selected="false">
                        Kranbilstransporter
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="third-tab" data-toggle="pill" href="#third"
                    role="tab" aria-controls="third" aria-selected="false">
                        Krokbil och lastmaskin
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="fourth-tab" data-toggle="pill" href="#fourth"
                    role="tab" aria-controls="fourth" aria-selected="false">
                        Åkeri
                    </a>
                </li>
            </ul>
            <br>
            <div class="tab-content px-2" id="myTabContent">
                <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.
                    </p>
                    <img class="img-fluid" src="{{ asset( '/img/service/transport.jpg' ) }}" alt="Godstransport">
                </div>
                <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.
                    </p>
                    <img class="img-fluid" src="{{ asset( '/img/service/kranbil.jpg' ) }}" alt="Kranbil">
                </div>
                <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.
                    </p>
                    <img class="img-fluid" src="{{ asset( '/img/service/krokbil.jpg' ) }}" alt="Krokbil">
                </div>
                <div class="tab-pane fade" id="fourth" role="tabpanel" aria-labelledby="fourth-tab">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.
                    </p>
                    <img class="img-fluid" src="{{ asset( '/img/service/transport.jpg' ) }}" alt="Samling av bilder">
                </div>
            </div>
        </div>
        <div class="text-center my-3">
            <img src="{{ asset( '/img/service/iso.jpg' ) }}" alt="">
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
