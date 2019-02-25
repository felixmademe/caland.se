@extends( 'layouts.app' )
@section( 'title', 'Betonghåltagning' )
@section( 'content' )

    <section class="service-header">
        <img src="{{ asset( '/img/caland-betong.jpg' ) }}" alt="Caland Betonghåltagning AB">
        <br><br>
        <h1>Betonghåltagning</h1>
        <p>
            Vi har resurser, metoder och kompetens att utföra
            professionella tjänster inom byggbranschen.
            <span class="underline">Bredden är vår styrka</span>
        </p>
    </section>
    <hr>
    <section class="service-about">
        <h2>Vad gör vi?</h2>
        <p class="text-center">
            Vi erbjuder yrkeskunnig hjälp inom byggbranschen med specialisering inom håltagning,
            asbestsanering och rivningsarbeten i Karlstad och hela Värmland
        </p>
        <div class="row justify-content-center">
            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active btn-red-border m-1" id="betonghåltagning-tab" data-toggle="pill" href="#betonghåltagning"
                        role="tab" aria-controls="betonghåltagning" aria-selected="true">
                        Betonghåltagning
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
            <div class="tab-content px-2" id="myTabContent">
                <div class="tab-pane fade show active" id="betonghåltagning" role="tabpanel" aria-labelledby="betonghåltagning-tab">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.
                    </p>
                    <img class="img-fluid" src="{{ asset( '/img/services/brokk-arbete.jpg' ) }}" alt="Samling av bilder">
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
                    <img class="img-fluid" src="{{ asset( '/img/services/golvslipning.jpg' ) }}" alt="Slipning av gold">
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
                    <img class="img-fluid" src="{{ asset( '/img/services/asbestsanering.jpg' ) }}" alt="Asbestsanering i kök">
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
                    <div class="col-10 mx-auto">
                        <img class="img-fluid" src="{{ asset( '/img/services/kranbil.jpg' ) }}" alt="Kranbil">
                        <hr>
                        <img class="img-fluid" src="{{ asset( '/img/services/hjullastare.jpg' ) }}" alt="Hjullastare">
                        <hr>
                        <img class="img-fluid" src="{{ asset( '/img/services/brokk.jpg' ) }}" alt="Tvätt av Brokk">
                    </div>
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
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/marcus.jpg' ) }}" alt="Marcus Andersson">
                <h4>Marcus Andersson</h4>
                <p>
                    <span class="red">Verksamhetschef</span>
                    <br>
                    070-537 98 28
                    <br>
                    <a class="link-effect" href="mailto:marcus@caland.se">marcus@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/robin.jpg' ) }}" alt="Robin Gränsed">
                <h4>Robin Gränsed</h4>
                <p>
                    <span class="red">Arbetsledare</span>
                    <br>
                    070-399 81 23
                    <br>
                    <a class="link-effect" href="mailto:robin@caland.se">robin@caland.se</a>
                </p>
            </div>
        </div>
    </section>

@endsection
