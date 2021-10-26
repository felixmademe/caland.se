@extends( 'layouts.app' )
@section( 'title', 'Om oss' )
@section( 'content' )

    <section class="company">
        <div class="text-center">
            <h1>Om oss</h1>
        </div>
        <p>
            Caland är ett familjeägt företag som startades år 1994 genom det första bolaget Caland AB.
            Företagsnamnet är de tre första bokstäverna från familjenamnen Calais och Andersson, <span class="red">CAL</span>
            och <span class="red">AND</span> blev företagsnamnet <span class="red">CALAND</span>.
            <br><br>
            Vid starten sysselsatte företaget två personer som servade företag inom åkeri- och
            betonghåltagningsbranschen genom personaluthyrning. Idag är Caland verksamma inom en mängd
            ytterligare olika branscher så som  industri, rivning, sanering, byggtjänster, utbildningar
            och städ. Calandkoncernen sysselsätter idag över 100 st anställda.
        </p>
    </section>
    <hr>
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
                            Caland startas.
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
                            Caland blev en koncern genom att Caland Betonghåltagning AB startas.
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
                            Koncernen utökas med bolaget Caland Transport AB.
                        </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="fas fa-warehouse"></i>
                </div>
                <div class="timeline-content right">
                    <h4 class="timeline-content-date">2014</h4>
                        <p>
                            Koncernen flyttar in i nybyggd fastighet på Herrövägen 4 i Skattkärr.
                        </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="fas fa-plus"></i>
                </div>
                <div class="timeline-content">
                    <h4 class="timeline-content-date">2016</h4>
                        <p>
                            Koncernen utökas med bolagen Caland Entreprenad AB och Caland Företagsservice AB.
                        </p>
                </div>
            </div>
        </div>
    </section>

@endsection
