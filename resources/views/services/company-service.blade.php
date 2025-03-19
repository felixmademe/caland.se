@extends( 'layouts.app' )
@section( 'title', 'Företagsservice' )
@section( 'content' )

    <section class="service-header">
        <img src="{{ asset( '/img/caland-foretagsservice.jpg' ) }}" alt="Caland Företagsservice">
        <br><br>
        <h1>Företagsservice</h1>
    </section>
    <hr>
    <section class="service-about">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <div class="row justify-content-center px-3">
            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a rel="noopener noreferrer" class="nav-link active btn-red-border m-1" id="second-tab" data-toggle="pill" href="#second"
                    role="tab" aria-controls="second" aria-selected="false">
                        Bygghjälpen
                    </a>
                </li>
            </ul>
            <br>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane active fade show" id="second" role="tabpanel" aria-labelledby="second-tab">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <div class="text-center">
                        <a rel="noopener noreferrer" class="btn btn-red btn-expand" href="{{ route( 'help' ) }}">Bygghjälpen</a>
                    </div>
                    <br>
                    <img class="lozad img-fluid" src="{{ asset( 'img/services/stad.jpg' ) }}" alt="Städservice">
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="service-contact">
        <h3>Kontakta oss</h3>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4>Charlotta Löfgren</h4>
                <p>
                    <span class="red">Koncernchef/Personalchef</span>
                    <br>
                    <a rel="noopener noreferrer" class="no-colour" href="tel:054220794">054-22 07 94</a>
                    <br>
                    <a rel="noopener noreferrer" class="no-colour" href="mailto:lotta@caland.se">lotta@caland.se</a>
                </p>
            </div>
        </div>
    </section>
    <hr>
    <section class="service-return">
        <p>Klicka här för att gå tillbaka</p>
        <a rel="noopener noreferrer" class="btn btn-red btn-expand" href="{{ route( 'services' ) }}">Tjänster</a>
    </section>

@endsection
