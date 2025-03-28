@extends('layouts.app')
@section('title', 'Kontakt')
@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close black" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <section class="staff">
        <h1>Personal</h1>
        <div class="row row-eq-height">
            <div class="col-md-6 col-lg-4">
                <a href="{{ asset('/img/staff/lars-lofgren.jpg') }}" data-toggle="lightbox">
                    <img class="lozad img-fluid" data-src="{{ asset('/img/staff/lars-lofgren.jpg') }}"
                        alt="Caland AB - Lars Löfgren">
                </a>
                <h4>Lars Löfgren</h4>
                <p>
                    <span class="red">Transport/Bemanning</span>
                    <br>
                    <a class="no-colour" href="tel:0703998170">070-399 81 70</a>
                    <br>
                    <a class="no-colour" href="mailto:lars@caland.se">lars@caland.se</a>
                </p>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="{{ asset('/img/staff/marcus-andersson.jpg') }}" data-toggle="lightbox">
                    <img class="lozad img-fluid" data-src="{{ asset('/img/staff/marcus-andersson.jpg') }}"
                        alt="Caland AB - Marcus Andersson">
                </a>
                <h4>Marcus Andersson</h4>
                <p>
                    <span class="red">Håltagning/Byggtjänster</span>
                    <br>
                    <a class="no-colour" href="tel:0705379828">070-537 98 28</a>
                    <br>
                    <a class="no-colour" href="mailto:marcus@caland.se">marcus@caland.se</a>
                </p>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="{{ asset('/img/staff/johan-gransed.jpg') }}" data-toggle="lightbox">
                    <img class="lozad img-fluid" data-src="{{ asset('/img/staff/johan-gransed.jpg') }}"
                        alt="Caland AB - Johan Gränsed">
                </a>
                <h4>Johan Gränsed</h4>
                <p>
                    <span class="red">Håltagning/Byggtjänster</span>
                    <br>
                    <a class="no-colour" href="tel:0703998124">070-399 81 24</a>
                    <br>
                    <a class="no-colour" href="mailto:johan.g@caland.se">johan.g@caland.se</a>
                </p>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="{{ asset('/img/staff/johan-wallstav.jpg') }}" data-toggle="lightbox">
                    <img class="lozad img-fluid" data-src="{{ asset('/img/staff/johan-wallstav.jpg') }}"
                        alt="Caland AB - Johan Wallstav">
                </a>
                <h4>Johan Wallstav</h4>
                <p>
                    <span class="red">Utbildning</span>
                    <br>
                    <a class="no-colour" href="tel:054220797">054-22 07 97</a>
                    <br>
                    <a class="no-colour" href="mailto:johan@caland.se">johan@caland.se</a>
                </p>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="{{ asset('/img/staff/reimond-sundstrom.jpg') }}" data-toggle="lightbox">
                    <img class="lozad img-fluid" data-src="{{ asset('/img/staff/reimond-sundstrom.jpg') }}"
                        alt="Caland AB - Reimond Sundström">
                </a>
                <h4>Reimond Sundström</h4>
                <p>
                    <span class="red">Utbildning</span>
                    <br>
                    <a class="no-colour" href="tel:054220798">054-22 07 98</a>
                    <br>
                    <a class="no-colour" href="mailto:reimond@caland.se">reimond@caland.se</a>
                </p>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="{{ asset('/img/staff/hanna-blom.jpg') }}" data-toggle="lightbox">
                    <img class="lozad img-fluid" data-src="{{ asset('/img/staff/hanna-blom.jpg') }}"
                        alt="Caland AB - Hanna Blom">
                </a>
                <h4>Hanna Blom</h4>
                <p>
                    <span class="red">HSEQ - samordnare</span>
                    <br>
                    <a class="no-colour" href="tel:0703998123">070-399 81 23</a>
                    <br>
                    <a class="no-colour" href="mailto:hanna@caland.se">hanna@caland.se</a>
                </p>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="{{ asset('/img/staff/charlotta-lofgren.jpg') }}" data-toggle="lightbox">
                    <img class="lozad img-fluid" data-src="{{ asset('/img/staff/charlotta-lofgren.jpg') }}"
                        alt="Caland AB - Charlotta Löfgren">
                </a>
                <h4>Charlotta Löfgren</h4>
                <p>
                    <span class="red">Personalchef</span>
                    <br>
                    <a class="no-colour" href="tel:054220794">054-22 07 94</a>
                    <br>
                    <a class="no-colour" href="mailto:lotta@caland.se">lotta@caland.se</a>
                </p>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="{{ asset('/img/staff/louise-rohr.jpg') }}" data-toggle="lightbox">
                    <img class="lozad img-fluid" data-src="{{ asset('/img/staff/louise-rohr.jpg') }}"
                        alt="Caland AB - Louise Röhr">
                </a>
                <h4>Louise Röhr</h4>
                <p>
                    <span class="red">Kontorskoordinator/
                        <br class="d-block d-md-none">
                        Administration</span>
                    <br>
                    <a class="no-colour" href="tel:0727247716">072-724 77 16</a>
                    <br>
                    <a class="no-colour" href="mailto:louise@caland.se">louise@caland.se</a>
                </p>
            </div>
        </div>
    </section>
    <hr>
    <section class="contact p-0 p-md-5">
        <div class="text-center">
            <h2>Kontakta oss</h2>
            <p>
                Du är självklart välkommen att ringa till oss eller så kan du använda dig av
                formuläret nedan för att komma i kontakt med oss.
            </p>
        </div>
        <form class="" action="/api/kontakta-email" method="post" id="contactEmail">
            @csrf
            <input type="hidden" id="recaptcha" name="recaptcha" value="{{ config('recaptcha.key.site') }}">
            <div class="form-group">
                <label for="name">Namn</label>
                <input class="form-control" type="text" id="name" name="name" placeholder="Namn"
                    autocomplete="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Email"
                    autocomplete="email">
            </div>
            <div class="form-group">
                <label for="subject">Ämne</label>
                <input class="form-control" type="text" id="subject" name="subject" placeholder="Ämne">
            </div>
            <div class="form-group">
                <label for="text">Meddelande</label>
                <textarea class="form-control" id="text" name="text" placeholder="Meddelande" rows="5"></textarea>
            </div>
            <div class="form-group ml-4">
                <input class="form-check-input" type="checkbox" name="policy" id="policy" required>
                <label class="form-check-label" for="policy">
                    Jag samtycker till att mina uppgifter lagras och behandlas enligt följande
                    <a href="{{ route('policy') }}" target="_blank">avtal</a>.
                </label>
            </div>
            <div class="form-group">
                <small>
                    Denna webbplats är skyddad av reCAPTCHA och Googles
                    <a class="link" href="https://policies.google.com/privacy" rel="noreferrer"
                        target="_blank">sekretesspolicy</a> och
                    <a class="link" href="https://policies.google.com/terms" rel="noreferrer"
                        target="_blank">användarvillkor</a> gäller.
                </small>
            </div>
            <button type="submit" class="btn btn-red btn-expand">Skicka</button>
        </form>
    </section>

@endsection
