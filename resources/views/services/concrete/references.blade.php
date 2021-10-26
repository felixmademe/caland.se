@extends( 'layouts.app' )
@section( 'title', 'Håltagning' )
@section( 'content' )

    <section class="service-header">
        <img src="{{ asset( '/img/caland-betong.jpg' ) }}" alt="Caland Håltagning">
        <br><br>
        <h1>Referensbilder</h1>
    </section>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <img class="lozad img-fluid my-1" src="{{ asset( '/img/services/betong-borr.jpg' ) }}" alt="Borrning i betong">
            <img class="lozad img-fluid my-1" src="{{ asset( '/img/services/staff-welding.jpg' ) }}" alt="Svetsning av rör">
            <img class="lozad img-fluid my-1" src="{{ asset( '/img/services/betong-lyfta.jpg' ) }}" alt="Lyftning av material på bygge">
            <img class="lozad img-fluid my-1" src="{{ asset( '/img/services/tma.jpg' ) }}" alt="TMA lastbil">
            <img class="lozad img-fluid my-1" src="{{ asset( '/img/services/asbestsanering-stada.jpg' ) }}" alt="Städning efter asbestsanering">
        </div>
        <div class="col-md-6">
            <img class="lozad img-fluid my-1" src="{{ asset( '/img/services/brokk-rivning.jpg' ) }}" alt="Brokk rivning">
            <img class="lozad img-fluid my-1" src="{{ asset( '/img/services/lift-hogt.jpg' ) }}" alt="Lyft av material">
            <img class="lozad img-fluid my-1" src="{{ asset( '/img/services/transport.jpg' ) }}" alt="Transport med lastbil">
            <img class="lozad img-fluid my-1" src="{{ asset( '/img/services/torn.jpg' ) }}" alt="Arbete uppe på torn">
            <img class="lozad img-fluid my-1" src="{{ asset( '/img/services/rivning.jpg' ) }}" alt="Rivning av byggnad">
        </div>
    </div>
    <hr>
    <section class="text-center">
        <p>Klicka här för att gå tillbaka</p>
        <a rel="noopener noreferrer" class="btn btn-red" href="{{ route( 'concrete' ) }}">Håltagning</a>
    </section>

@endsection
