<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 offset-sm-4">
                <h5>Företaget</h5>
                <p>
                    <a rel="noopener noreferrer" href="{{ route( 'services' ) }}">Tjänster</a>
                    <br>
                    <a rel="noopener noreferrer" href="{{ route( 'certificate' ) }}">Certifikat</a>
                    <br>
                    <a rel="noopener noreferrer" href="{{ route( 'about' ) }}">Om oss</a>
                    <br>
                    <a rel="noopener noreferrer" href="{{ route( 'contact' ) }}">Kontakt</a>
                </p>
            </div>
            <div class="col-sm-3">
                <h5>Kontakt</h5>
                <p>
                    Herrövägen 4,
                    65671 Skattkärr
                    <br>
                    <a rel="noopener noreferrer" class="no-colour" href="tel:054-86 06 80">054-86 06 80</a>
                    <br>
                    <a rel="noopener noreferrer" href="https://www.facebook.com/calandkoncernen" target="_blank">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                </p>
            </div>
            <div class="col-12 text-center">
                <hr class="d-block d-md-none">
                <small>Copyright © {{ date( 'Y' ) }} Caland AB | Alla rättigheter reserverade</small>
            </div>
        </div>
    </div>
</footer>
