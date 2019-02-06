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
    <hr>
    <section class="staff">
        <div class="text-center">
            <h2>Vi på Caland</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/dan.jpg' ) }}" alt="Dan Andersson">
                <h4>Dan Andersson</h4>
                <p>
                    <span class="red">Inköpschef</span>
                    <br>
                    054-22 07 91
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/lena.jpg' ) }}" alt="Dan Andersson">
                <h4>Lena Andersson</h4>
                <p>
                    <span class="red">Lön</span>
                    <br>
                    054-22 07 93
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/charlotta.jpg' ) }}" alt="Charlotta Löfgren">
                <h4>Charlotta Löfgren</h4>
                <p>
                    <span class="red">Personalchef</span>
                    <br>
                    054-22 07 94
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/ellinor.jpg' ) }}" alt="Ellinor Halldan">
                <h4>Ellinor Halldan</h4>
                <p>
                    <span class="red">Konsultchef/HR</span>
                    <br>
                    054-22 07 95
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/henrik.jpg' ) }}" alt="Henrik Pagré">
                <h4>Henrik Pagré</h4>
                <p>
                    <span class="red">Logistikansvarig</span>
                    <br>
                    054-22 07 92
                </p>
            </div>
            <div class="col-md-12 text-center">
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
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/robin.jpg' ) }}" alt="Robin Gränsed">
                <h4>Robin Gränsed</h4>
                <p>
                    <span class="red">Verksamhetschef</span>
                    <br>
                    070-537 98 28
                </p>
            </div>
            <div class="col-md-12 text-center">
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
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/reimond.jpg' ) }}" alt="Reimond Sundström">
                <h4>Reimond Sundström</h4>
                <p>
                    <span class="red">Utbildare</span>
                    <br>
                    054-22 07 98
                </p>
            </div>
        </div>
    </section>
    <section class="company-history">
        <br><br>
        <h2 class="text-center">Vår historia</h2>
        <hr>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="fa fa-building"></i>
                </div>
                <div class="timeline-content">
                    <h4 class="timeline-content-date">1994</h4>
                        <p>
                            Caland är ett familjeägt företag som startades år 1994 genom det första bolaget Caland AB.
                            Företagsnamnet är de tre första bokstäverna från familjenamnen Calais och Andersson,
                            <span class="red">CAL</span> och <span class="red">AND</span> blev företagsnamnet CALAND.
                        </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="fa fa-copyright"></i>
                </div>
                <div class="timeline-content right">
                    <h4 class="timeline-content-date">2002</h4>
                        <p>
                            Caland blev en koncern 2002 genom att Caland Betonghåltagning AB
                            startades med specialisering inom betonghåltagning, sanering och rivning.
                        </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="fa fa-truck"></i>
                </div>
                <div class="timeline-content">
                    <h4 class="timeline-content-date">2007</h4>
                        <p>
                            2007 utökades koncernen ytterligare med Caland Transport AB –Åkeri som
                            utför en mängd olika transporttjänster.

                        </p>
                </div>
            </div>
        </div>
    </section>

@endsection
