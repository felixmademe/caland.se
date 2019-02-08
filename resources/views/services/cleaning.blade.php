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
            <span class="underline">Bredden är vår styrka</span>
        </p>
    </section>
    <hr>
    <section class="service-about">
        <h2>Vad gör vi?</h2>'
        <p>
            Vi ombesörjer städ på följande områden:
            <ul>
                <li>Kontor</li>
                <li>Butik</li>
                <li>Bygg</li>
                <li>Flytt</li>
                <li>Hem</li>
            </ul>
        </p>
        <div class="text-center">
            <img class="img-fluid" src="{{ asset( 'img/service/stad.jpg' ) }}" alt="Caland AB Företagsservice Städ">
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
