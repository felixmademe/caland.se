@extends( 'layouts.app' )
@section( 'title', 'Transport' )
@section( 'content' )

    <section class="service-header">
        <img src="{{ asset( '/img/caland-foretagsservice.jpg' ) }}" alt="Caland Företagsservice">
        <br><br>
        <h1>Transport</h1>
    </sectiocalan>
    <hr>
    <section class="service-about">
        <p>
            Vår breda flotta av fordon gör att vi kan åta oss många olika typer av uppdrag.
            Vi utgår från Karlstad men jobbar i hela Sverige.
            <br>
            Kontakta oss så löser vi dina transportbehov!
        </p>
        <div class="row justify-content-center">
            <div class="col-md-4 my-1">
                <a rel="noopener noreferrer" href="{{ asset( '/img/services/trailer.jpg' ) }}" data-toggle="lightbox">
                    <img class="lozad img-fluid my-2" data-src="{{ asset( '/img/services/trailer.jpg' ) }}" alt="Trailer lastar material">
                </a>
            </div>
            <div class="col-md-4 my-1">
                <a rel="noopener noreferrer" href="{{ asset( '/img/services/transport.jpg' ) }}" data-toggle="lightbox">
                    <img class="lozad img-fluid my-2" data-src="{{ asset( '/img/services/transport.jpg' ) }}" alt="Transport av gods">
                </a>
            </div>
            <div class="col-md-4 my-1">
                <a rel="noopener noreferrer" href="{{ asset( '/img/services/krokbil.jpg' ) }}" data-toggle="lightbox">
                    <img class="lozad img-fluid my-2" data-src="{{ asset( '/img/services/krokbil.jpg' ) }}" alt="Krokbil som lastar maskin">
                </a>
            </div>
        </div>
    </section>
    <hr>
    <section class="service-contact">
        <h3>Kontakta oss</h3>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4>Lars Löfgren</h4>
                <p>
                    <span class="red">Transport/Bemanning</span>
                    <br>
                    <a rel="noopener noreferrer" class="no-colour" href="tel:0703998170">070-399 81 70</a>
                    <br>
                    <a rel="noopener noreferrer" class="no-colour" href="mailto:lars@caland.se">lars@caland.se</a>
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
