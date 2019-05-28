@extends( 'layouts.app' )
@section( 'title', 'Transport' )
@section( 'content' )

    <section class="service-header">
        <img src="{{ asset( '/img/caland-transport.jpg' ) }}" alt="Caland Transport AB">
        <br><br>
        <h1>Transport</h1>
    </section>
    <hr>
    <section class="service-about">
        <p>
            Vår breda flotta av fordon gör att vi kan åta oss många olika typer av uppdrag.
            Kontakta oss så löser vi dina transportbehov!
            Vi utgår från Karlstad & Värmland men jobbar i hela Sverige.
        </p>
        <div class="d-flex justify-content-center">
            <div class="col-md-6">
                <img class="lozad img-fluid my-2" data-src="{{ asset( '/img/services/transport.jpg' ) }}" alt="Godstransport">
                <img class="lozad img-fluid my-2" data-src="{{ asset( '/img/services/krokbil.jpg' ) }}" alt="Krokbil">
                <img class="lozad img-fluid my-2" data-src="{{ asset( '/img/services/trailer.jpg' ) }}" alt="Trailer">
            </div>
            <div class="col-md-6">
                <img class="lozad img-fluid my-2" data-src="{{ asset( '/img/services/tma.jpg' ) }}" alt="TMA">
                <img class="lozad img-fluid my-2" data-src="{{ asset( '/img/services/kranbil.jpg' ) }}" alt="Kranbil">
            </div>

            {{-- <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
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
            </ul>
            <br>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                </div>
                <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                </div>
                <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                </div>
            </div> --}}
        </div>
    </section>
    <hr>
    <section class="service-contact">
        <h3>Kontakta oss</h3>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4>Henrik Pagré</h4>
                <p>
                    <span class="red">Transport/Bemanning</span>
                    <br>
                    <a class="no-colour" href="tel:054220792">054-22 07 92</a>
                    <br>
                    <a class="no-colour" href="mailto:henrik@caland.se">henrik@caland.se</a>
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
