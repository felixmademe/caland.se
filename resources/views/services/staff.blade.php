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
            <span class="underline">Bredden är vår styrka</span>.
        </p>
    </section>
    <hr>
    <section class="service-about">
        <h2>Vad gör vi?</h2>
        <p>
            <p>
                Vi erbjuder yrkeskunnig bemanning och löser såväl tillfälliga och varaktiga behov.
                Behöver du hjälp en dag en vecka eller under en längre period? Då kan vi hjälpa dig!
                <br><br>
                Bredden är vår styrka, därför kan vi hjälpa dig med:
                <ul>
                    <li>Lastbilschaufförer</li>
                    <li>Terminalarbetare</li>
                    <li>Truckförare</li>
                    <li>Lagerarbetare</li>
                    <li>Industriarbetare</li>
                    <li>Maskinoperatörer</li>
                    <li>Maskinförare</li>
                    <li>Budbilschaufförer</li>
                    <li>Bärhjälpar</li>
                    <li>Montörer</li>
                    <li>Fastighetskötare</li>
                    <li>Lokalvårdare</li>
                    <li>Sanerare</li>
                    <li>Rivare</li>
                    <li>Byggstädare</li>
                </ul>
            </p>
        </p>
        <div class="row justify-content-center px-3">
            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active btn-red-border m-1" id="first-tab" data-toggle="pill" href="#first"
                        role="tab" aria-controls="first" aria-selected="true">
                        Personaluthyrning
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="second-tab" data-toggle="pill" href="#second"
                    role="tab" aria-controls="second" aria-selected="false">
                        Bemanningsentrepenad
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="asbestsanering-tab" data-toggle="pill" href="#asbestsanering"
                    role="tab" aria-controls="third" aria-selected="false">
                        Rekrytering
                    </a>
                </li>
            </ul>
            <br>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                    <p>
                        Vi löser såväl tillfälliga som varaktiga personalbehov.
                    </p>
                    <img class="lozad img-fluid" data-src="{{ asset( '/img/services/staff-truck.jpg' ) }}" alt="Gaffeltruck">
                </div>
                <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                    <p>
                        Vi har lång erfarenhet av att bedriva bemanningsentreprenad. Då vi tar över ansvaret
                        och bemannar en hel avdelning hos er inklusive arbetsledning så att ni kan fokusera på annat.
                    </p>
                    <img class="lozad img-fluid" data-src="{{ asset( '/img/services/staff-truck1.jpg' ) }}" alt="Gaffeltruck">
                </div>
                <div class="tab-pane fade" id="asbestsanering" role="tabpanel" aria-labelledby="asbestsanering-tab">
                    <p>
                        Välj att rekrytera direkt eller hyr först och rekrytera sen som en möjlighet att testa
                        din nästa medarbetare först.
                    </p>
                    <img class="lozad img-fluid" data-src="{{ asset( '/img/services/staff-welding.jpg' ) }}" alt="Svetsning">
                </div>
            </div>
        </div>
        <div class="text-center my-3">
            <img class="lozad" data-src="{{ asset( '/img/services/iso.jpg' ) }}" alt="ISO Certifikationer">
        </div>
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
