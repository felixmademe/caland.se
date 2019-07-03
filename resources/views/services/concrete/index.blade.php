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
                    <a class="nav-link btn-red-border m-1" id="slipning-tab" data-toggle="pill" href="#slipning"
                    role="tab" aria-controls="slipning" aria-selected="false">
                        Slipning av betonggolv
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="transport-tab" data-toggle="pill" href="#transport"
                    role="tab" aria-controls="transport" aria-selected="false">
                        Transport/lyfthjälp
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="stor-maskinpark-tab" data-toggle="pill" href="#stor-maskinpark"
                    role="tab" aria-controls="stor-maskinpark" aria-selected="false">
                        Vår maskinpark
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="håltagning" role="tabpanel" aria-labelledby="håltagning-tab">
                    <p>
                        Vi utför håltagning i alla förekommande material.
                        <br>
                        Metoder vi använder oss av är:
                        <ul>
                            <li>Kärnborrning upp till 1000mm</li>
                            <li>Sågning med klinga, materialtjocklek upp till 920mm</li>
                            <li>Sågning med wire, används vid tex större fundament, tjockare konstruktioner</li>
                        </ul>
                    </p>
                    <img class="lozad img-fluid my-2" data-src="{{ asset( '/img/services/brokk-arbete.jpg' ) }}" alt="Arbete med Brokk">
                    <img class="lozad img-fluid my-2" data-src="{{ asset( '/img/services/betong-borr.jpg' ) }}" alt="Borrning i betong">
                </div>
                <div class="tab-pane fade" id="rivning" role="tabpanel" aria-labelledby="rivning-tab">
                    <p>
                        Vi utför alla typer av rivningar, stora som små.
                        Med en modern maskinpark arbetar vi både effektivt och säkert.
                        Arbetsmiljön står alltid som högsta prio.

                    </p>
                    <img class="lozad img-fluid my-2" data-src="{{ asset( '/img/services/brokk-rivning.jpg' ) }}" alt="Rivning med Brokk">
                </div>
                <div class="tab-pane fade" id="asbestsanering" role="tabpanel" aria-labelledby="asbestsanering-tab">
                    <p>
                        Alla våra medarbetare är utbildade inom asbestsanering.
                        Detta för att i ett tidigt skede av rivningsprocessen kunna identifiera eventuella risker
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
                            <img class="lozad img-fluid my-2" data-src="{{ asset( '/img/services/lyft-material.jpg' ) }}" alt="Lyftning av material">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="slipning" role="tabpanel" aria-labelledby="slipning-tab">
                    <p>
                        Vi slipar allt från limrester till HTC Superfloor.
                    </p>
                    <img class="lozad img-fluid" data-src="{{ asset( '/img/services/golvslipning.jpg' ) }}" alt="Golvslipning i lägenhet">
                </div>
                <div class="tab-pane fade" id="transport" role="tabpanel" aria-labelledby="transport-tab">
                    <p>
                        Med vår lastbil tar vi hand om allt från transport av restavfall till kranlyft.
                        Vid behov av lyfthjälp har vi 2st runtomsvängande teleskoplastare som är fullt utrustade med gafflar, vinsch, material/personkorg.
                        Lyfthöjd 25 meter.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <img class="lozad img-fluid" data-src="{{ asset( '/img/services/lyft-flakbil.jpg' ) }}" alt="Lyft av material från lätt lastbil">
                        </div>
                        <div class="col-md-6">
                            <img class="lozad img-fluid" data-src="{{ asset( '/img/services/lyftning-lastbil.jpg' ) }}" alt="Lyftning av material med kranbil">
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <hr>
    <section class="service-reference">
        <p>Klicka här för se några referensbilder</p>
        <a class="btn btn-red btn-expand" href="{{ route( 'references' ) }}">Referensbilder</a>
    </section> --}}
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
