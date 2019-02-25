@extends( 'layouts.app' )
@section( 'title', 'Städ' )
@section( 'content' )

    <section class="service-header">
        <img src="{{ asset( '/img/caland-foretagsservice.jpg' ) }}" alt="Caland Företagsservice">
        <br><br>
        <h1>Städ</h1>
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
        <div class="d-block row d-md-flex flex-md-row py-4">
            <div class="col-lg-5 d-flex align-items-center justify-content-center">
                <img class="img-fluid" src="{{ asset( 'img/service/stad.jpg' ) }}" alt="Kranbil">
            </div>
            <div class="col-lg-7 mt-3 mt-md-0 bg-white d-flex align-items-center justify-content-center">
                <div class="text-block">
                    <p>
                        Vi utför städtjänster för företag och privatpersoner.
                        Vi ombesörjer städ på följande områden:
                        <ul>
                            <li>Kontor</li>
                            <li>Butik</li>
                            <li>Bygg</li>
                            <li>Flytt</li>
                            <li>Hem</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="service-contact">
        <h3>Kontakta oss</h3>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <img class="img-fluid" src="{{ asset( '/img/staff/lotta.jpg' ) }}" alt="Lotta Ohlson Klein">
                <h4>Lotta Ohlson Klein</h4>
                <p>
                    <span class="red">Personalchef</span>
                    <br>
                    072-724 77 06
                    <br>
                    <a class="link-effect" href="mailto:charlotta@caland.se">charlotta@caland.se</a>
                </p>
            </div>
        </div>
    </section>

@endsection
