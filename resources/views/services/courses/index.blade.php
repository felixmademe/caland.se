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
            <span class="underline">Bredden är vår styrka</span>
        </p>
    </section>
    <hr>
    <section class="service-about">
        <h2>Vad gör vi?</h2>
        <p>
            Våra duktiga instruktörer erbjuder en mängd olika kompetenshöjande
            utbildningar inom bl a transport, bygg och industri. Kontakta oss när ni är
            i behov av nedan tjänster. Vi jobbar i Karlstad & hela Värmland.
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
                        Stor maskinpark
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
                    <img class="img-fluid" src="{{ asset( '/img/collection.jpg' ) }}" alt="Samling av bilder">
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
                    <img class="img-fluid" src="{{ asset( '/img/collection.jpg' ) }}" alt="Samling av bilder">
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
                    <img class="img-fluid" src="{{ asset( '/img/collection.jpg' ) }}" alt="Samling av bilder">
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
                    <img class="img-fluid" src="{{ asset( '/img/collection.jpg' ) }}" alt="Samling av bilder">
                </div>
            </div>
        </div>
        <div class="text-center my-3">
            <img src="{{ asset( 'img/service/iso.jpg' ) }}" alt="">
        </div>
    </section>
    <hr>
    <section class="service-reference">
        <p>
            "Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit."
        </p>
        <small>John Doe, CEO Company</small>
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
