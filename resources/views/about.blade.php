@extends( 'layouts.app' )
@section( 'title', 'Om oss' )
@section( 'content' )

    <section class="about">
        <div class="text-center">
            <h1>Om oss</h1>
        </div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <br><br>
        <h2 class="text-center">Vår historia</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="fa fa-check"></i>
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
                    <i class="fa fa-check"></i>
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
                    <i class="fa fa-check"></i>
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
