@extends( 'layouts.app' )
@section( 'title', 'Städ' )
@section( 'content' )

    <section class="service-header">
        <img src="{{ asset( '/img/caland-betong.jpg' ) }}" alt="Caland Företagsservice">
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
        <p>
            Vi utför städtjänster hos företag och på byggarbetsplatser.
        </p>
        <div class="row justify-content-center px-3">
            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active btn-red-border m-1" id="first-tab" data-toggle="pill" href="#first"
                        role="tab" aria-controls="first" aria-selected="true">
                        Städ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="second-tab" data-toggle="pill" href="#second"
                    role="tab" aria-controls="second" aria-selected="false">
                        Bygghjälpen
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
                    <img class="lozad img-fluid" src="{{ asset( 'img/services/stad.jpg' ) }}" alt="Städservice">
                </div>
                <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <div class="text-center">
                        <a class="btn btn-red btn-expand" href="{{ route( 'help' ) }}">Bygghjälpen</a>
                    </div>
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
            <div class="col-md-6 offset-md-3">
                <h4>Lena Andersson</h4>
                <p>
                    <span class="red">Koncern</span>
                    <br>
                    Lön
                    <br>
                    054-22 07 93
                    <br>
                    <a class="link-effect" href="mailto:lena@caland.se">lena@caland.se</a>
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
