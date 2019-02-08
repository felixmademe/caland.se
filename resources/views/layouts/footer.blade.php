<footer class="footer">
    <div class="container">
        <div class="row p-2">
            <div class="col-md-3 mb-3 mb-md-0">
                <a href="{{ url( '/' ) }}">
                    <img src="{{ asset( '/img/logo.png' ) }}" alt="Caland AB logo">
                </a>
            </div>
            <div class="col-md-3">
                <h4>Företaget</h4>
                <p>
                    <a href="{{ route( 'job' ) }}">Jobb</a>
                    <br>
                    <a href="{{ route( 'about' ) }}">Om oss</a>
                    <br>
                    <a href="{{ route( 'contact' ) }}">Kontakt</a>
                </p>
            </div>
            <div class="col-md-3">
                <h4>Tjänster</h4>
                <p>
                    <a class="" href="{{ route( 'concrete' ) }}">Betonghåltagning</a>
                    <br>
                    <a class="" href="{{ route( 'transport' ) }}">Transport</a>
                    <br>
                    <a class="" href="{{ route( 'staff' ) }}">Bemaning</a>
                    <br>
                    <a class="" href="{{ route( 'course' ) }}">Utbildning</a>
                    <br>
                    <a class="" href="{{ route( 'help' ) }}">Bygghjälpen</a>
                    <br>
                    <a class="" href="{{ route( 'cleaning' ) }}">Städ</a>
                    {{-- <br>
                    <a class="" href="{{ route( 'company-service' ) }}">Företagsservice</a> --}}
                </p>
            </div>
            <div class="col-md-3">
                <h4>Kontakt</h4>
                <p>
                    Herrövägen 4
                    65671 Skattkärr
                    <br>
                    054-86 06 80
                    <br>
                    {{ env( 'MAIL_FROM_ADRESS', 'info@caland.se' ) }}
                </p>
            </div>
        </div>
        <hr>
        <div class=" text-center">
            <small>Copyright © {{ date( 'Y' ) }} Caland | Alla rättigheter reserverade</small>
        </div>
    </div>
</footer>
