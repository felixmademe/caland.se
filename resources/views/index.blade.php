@extends( 'layouts.app' )
@section( 'title', 'Start' )
@section( 'content' )

    <header class="hero">
        <div class="text-box">
            <div class="logo-wrapper">
                <img class="lozad img-fluid" data-src="{{ asset( '/img/logo.png' ) }}" alt="Caland Koncern AB logga">
            </div>
            <h1>Bredden är vår styrka</h1>
        </div>
    </header>

    <section class="company py-5">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="col-sm-6 p-2">
                    <a class="btn btn-start" href="{{ route( 'services' ) }}">Våra tjänster</a>
                </div>
                <div class="col-sm-6 p-2">
                    <a class="btn btn-start" href="{{ route( 'course' ) }}">Boka utbildning</a>
                </div>
                <div class="col-sm-6 p-2">
                    <a class="btn btn-start" href="{{ route( 'contact' ) }}">Kontakta oss</a>
                </div>
                <div class="col-sm-6 p-2">
                    <a class="btn btn-start" href="{{ route( 'job' ) }}">Jobba på Caland</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h2>Våra certifikat</h2>
                    <a href="{{ asset( '/documents/certificates/ISO-Certifikat.pdf' ) }}" target=”_blank”>
                        <img class="lozad img-fluid" data-src="{{ asset( '/img/iso-certifikat.png' ) }}" alt="Caland AB - Certifikat ISO 9001 och 14001">
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <p>
                    Caland koncernen har i över 10 år varit ISO-certifierade och idag är vi certifierade enligt ISO 9001 för kvalitetsledning och ISO 14001 för miljöledning.
                </p>
                <p>
                    <a href="{{ asset( '/documents/certificates/ISO-Certifikat.pdf' ) }}" target=”_blank”>
                        <img src="{{ asset( '/img/pdf-logo.png' ) }}" height="40" class="mr-2" class="lozad" />
                        ISO Certifikat 9001 och 14001
                    </a>
                </p>
                <p>
                    ISO är ett internationellt standardiseringsorgan som idag använd av företag och organisationer runt om i världen. En ISO-certifiering har som syfte att kontinuerligt utveckla verksamheten till det bättre. För att bli certifierad krävs att verksamheten uppfyller aktuella standarden. Årliga revisioner säkerställer att kraven i standarden upprätthålls.
                </p>
            </div>
        </div>
    </section>

@endsection
