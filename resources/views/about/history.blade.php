@extends( 'layouts.app' )
@section( 'title', 'Vår historia' )
@section( 'content' )

    <section class="company-history">
        <h1>Vår historia</h1>
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
    <hr>
    <section class="text-center">
        <p>Klicka här för att gå tillbaka</p>
        <a class="btn btn-red" href="{{ route( 'about' ) }}">Om oss</a>
    </section>

@endsection
