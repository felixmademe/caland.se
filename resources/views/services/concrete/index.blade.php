@extends( 'layouts.app' )
@section( 'title', 'Håltagning' )
@section( 'content' )

    <section class="service-header">
        <img src="{{ asset( '/img/caland-betong.jpg' ) }}" alt="Caland Håltagning AB">
        <br><br>
        <h1>Håltagning</h1>
    </section>
    <hr>
    <section class="service-about">

        <p>
            Vi erbjuder yrkeskunnig hjälp inom byggbranschen med specialisering inom håltagning,
            asbestsanering och rivningsarbeten i Karlstad och hela Värmland.
        </p>
        <div class="text-center">
            <a class="btn btn-red btn-expand" href="{{ route( 'help' ) }}">Bygghjälpen</a>
        </div>
        <br>
        <div class="row justify-content-center px-3">
            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active btn-red-border m-1" id="håltagning-tab" data-toggle="pill" href="#håltagning"
                        role="tab" aria-controls="håltagning" aria-selected="true">
                        Håltagning
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="rivning-tab" data-toggle="pill" href="#rivning"
                    role="tab" aria-controls="rivning" aria-selected="false">
                        Rivning
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="asbestsanering-tab" data-toggle="pill" href="#asbestsanering"
                    role="tab" aria-controls="asbestsanering" aria-selected="false">
                        Asbestsanering
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="stor-maskinpark-tab" data-toggle="pill" href="#stor-maskinpark"
                    role="tab" aria-controls="stor-maskinpark" aria-selected="false">
                        Vår maskinpark
                    </a>
                </li>
            </ul>
            <br>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="håltagning" role="tabpanel" aria-labelledby="håltagning-tab">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.
                    </p>
                    <img class="lozad img-fluid" data-src="{{ asset( '/img/services/brokk-arbete.jpg' ) }}" alt="Samling av bilder">
                </div>
                <div class="tab-pane fade" id="rivning" role="tabpanel" aria-labelledby="rivning-tab">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.
                    </p>
                    <img class="lozad img-fluid" data-src="{{ asset( '/img/services/golvslipning.jpg' ) }}" alt="Slipning av gold">
                </div>
                <div class="tab-pane fade" id="asbestsanering" role="tabpanel" aria-labelledby="asbestsanering-tab">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.
                    </p>
                    <img class="lozad img-fluid" data-src="{{ asset( '/img/services/asbestsanering.jpg' ) }}" alt="Asbestsanering i kök">
                </div>
                <div class="tab-pane fade" id="stor-maskinpark" role="tabpanel" aria-labelledby="stor-maskinpark-tab">
                    <p>
                        Vi har ett stort antal maskiner:
                        <ul>
                            <li>Demoleringsrobotar från Brokk 40 till 260</li>
                            <li>Teleskoplastare</li>
                            <li>Lastmaskin</li>
                            <li>Krokbil</li>
                            <li>Kranbil</li>
                            <li>Grävmaskin</li>
                        </ul>
                    </p>
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <img class="lozad img-fluid my-2" data-src="{{ asset( '/img/services/kranbil.jpg' ) }}" alt="Kranbil">
                            <img class="lozad img-fluid my-2" data-src="{{ asset( '/img/services/hjullastare.jpg' ) }}" alt="Hjullastare">
                        </div>
                        <div class="col-md-6">
                            <img class="lozad img-fluid my-2" data-src="{{ asset( '/img/services/brokk.jpg' ) }}" alt="Tvätt av Brokk">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="service-reference">
        <p>Klicka här för se några referensprojekt</p>
        <a class="btn btn-red btn-expand" href="{{ route( 'references' ) }}">Referensprojekt</a>
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
