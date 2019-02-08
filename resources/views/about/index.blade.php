@extends( 'layouts.app' )
@section( 'title', 'Om oss' )
@section( 'content' )

    <section class="company">
        <div class="text-center">
            <h1>Om oss</h1>
        </div>
        <p>
            Caland är ett familjeägt företag som startades år 1994 genom det första bolaget Caland AB.
            Företagsnamnet är de tre första bokstäverna från familjenamnen Calais och Andersson,
            <span class="red">CAL</span> och <span class="red">AND</span> blev företagsnamnet CALAND.
            <br><br>
            Caland blev en koncern 2002 genom att Caland Betonghåltagning AB
            startades med specialisering inom betonghåltagning, sanering och rivning.
            2007 utökades koncernen ytterligare med Caland Transport AB –Åkeri som
            utför en mängd olika transporttjänster.
        </p>
    </section>
    <section class="company-history text-center">
        <p>Vill du veta mer om vår histora, klicka nedan och läs mer!</p>
        <a class="btn btn-red" href="{{ route( 'history' ) }}">Läs mer</a>
    </section><hr>
    <section class="staff">
        <h2>Vi på Caland</h2>
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/dan.jpg' ) }}" alt="Dan Andersson">
                <h4>Dan Andersson</h4>
                <p>
                    <span class="red">Inköpschef</span>
                    <br>
                    054-22 07 91
                    <br>
                    <a class="link-effect" href="mailto:dan@caland.se">dan@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/lena.jpg' ) }}" alt="Dan Andersson">
                <h4>Lena Andersson</h4>
                <p>
                    <span class="red">Lön</span>
                    <br>
                    054-22 07 93
                    <br>
                    <a class="link-effect" href="mailto:lena@caland.se">lena@caland.se</a>
                </p>
            </div>
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
            <div class="col-md-6">
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
            <div class="col-md-12">
                <hr>
                <h3>Betonghåltagning</h3>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/marcus.jpg' ) }}" alt="Marcus Andersson">
                <h4>Marcus Andersson</h4>
                <p>
                    <span class="red">Arbetsledare</span>
                    <br>
                    070-399 81 23
                    <br>
                    <a class="link-effect" href="mailto:marcus@caland.se">marcus@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/robin.jpg' ) }}" alt="Robin Gränsed">
                <h4>Robin Gränsed</h4>
                <p>
                    <span class="red">Verksamhetschef</span>
                    <br>
                    070-537 98 28
                    <br>
                    <a class="link-effect" href="mailto:robin@caland.se">robin@caland.se</a>
                </p>
            </div>
            <div class="col-md-12">
                <hr>
                <h3>Utbildare</h3>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/johan.jpg' ) }}" alt="Johan Wallstav">
                <h4>Johan Wallstav</h4>
                <p>
                    <span class="red">Utbildare</span>
                    <br>
                    054-22 07 97
                    <br>
                    <a class="link-effect" href="mailto:johan@caland.se">johan@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/reimond.jpg' ) }}" alt="Reimond Sundström">
                <h4>Reimond Sundström</h4>
                <p>
                    <span class="red">Utbildare</span>
                    <br>
                    054-22 07 98
                    <br>
                    <a class="link-effect" href="mailto:reimond@caland.se">reimond@caland.se</a>
                </p>
            </div>
        </div>
    </section>

@endsection