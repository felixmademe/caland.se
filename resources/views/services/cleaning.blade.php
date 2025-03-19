@extends( 'layouts.app' )
@section( 'title', 'Städ' )
@section( 'content' )

    <section class="service-header">
        <img src="{{ asset( '/img/caland-betong.jpg' ) }}" alt="Caland Företagsservice">
        <br><br>
        <h1>Städ</h1>
    </section>
    <hr>
    <section class="service-about">
        <p>
            Vi utför städtjänster hos företag och på byggarbetsplatser. Hör av dig med din förfrågan.
            <br>
            Vi ombesörjer städ på följande områden:
            <ul>
                <li>Kontor</li>
                <li>Butik</li>
                <li>Bygg</li>
            </ul>
        </p>
        <div class="text-center">
            <a rel="noopener noreferrer" class="btn btn-red btn-expand" href="{{ route( 'help' ) }}">Bygghjälpen</a>
        </div>
    </section>
    <hr>
    <section class="service-contact">
        <h3>Kontakta oss</h3>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4>Lena Andersson</h4>
                <p>
                    <span class="red">Städ</span>
                    <br>
                    <a rel="noopener noreferrer" class="no-colour" href="tel:054220793">054-22 07 93</a>
                    <br>
                    <a rel="noopener noreferrer" class="no-colour" href="mailto:lena@caland.se">lena@caland.se</a>
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
