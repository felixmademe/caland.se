@extends( 'layouts.app' )
@section( 'title', 'Betonghåltagning' )
@section( 'content' )

    <section class="text-center">
        <img src="{{ asset( '/img/caland-betong.jpg' ) }}" alt="Caland Betonghåltagning">
        <br><br>
        <h1>Betonghåltagning - Referenser</h1>
        <p>
            Vi har resurser, metoder och kompetens att utföra
            professionella tjänster inom byggbranschen.
            <span class="underline">Bredden är vår styrka</span>
        </p>
    </section>
    <hr>
    <section>
        <h2>Referenser</h2>
        <div class="row justify-content-center">
            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active btn-red-border m-1" id="pead-tab" data-toggle="pill" href="#pead"
                        role="tab" aria-controls="pead" aria-selected="true">
                        PEAB
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="dhl-tab" data-toggle="pill" href="#dhl"
                    role="tab" aria-controls="dhl" aria-selected="false">
                        DHL
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="valmet-tab" data-toggle="pill" href="#valmet"
                    role="tab" aria-controls="valmet" aria-selected="false">
                        Valmet
                    </a>
                </li>
            </ul>
            <br>
            <div class="tab-content px-2" id="myTabContent">
                <div class="tab-pane fade show active" id="pead" role="tabpanel" aria-labelledby="pead-tab">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.
                    </p>
                    <img class="img-fluid" src="{{ asset( '/img/peab.svg' ) }}" alt="Samling av bilder">
                </div>
                <div class="tab-pane fade" id="dhl" role="tabpanel" aria-labelledby="dhl-tab">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.
                    </p>
                    <img class="img-fluid" src="{{ asset( '/img/dhl.png' ) }}" alt="Samling av bilder">
                </div>
                <div class="tab-pane fade" id="valmet" role="tabpanel" aria-labelledby="valmet-tab">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.
                    </p>
                    <img class="img-fluid" src="{{ asset( '/img/valmet.jpg' ) }}" alt="Samling av bilder">
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="text-center">
        <p>Klicka här för att gå tillbaka</p>
        <a class="btn btn-red" href="{{ route( 'concrete' ) }}">Betonghåltagning</a>
    </section>

@endsection
