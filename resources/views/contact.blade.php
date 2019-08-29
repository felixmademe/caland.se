@extends( 'layouts.app' )
@section( 'title', 'Kontakt' )
@section( 'content' )

    @if( session()->has( 'success' ) )
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get( 'success' ) }}
            <button type="button" class="close black" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif( session()->has( 'error' ) )
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session()->get( 'error' ) }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <section class="staff">
        <h1>Personal</h1>
        <div class="row row-eq-height">
            <div class="col-md-6">
                <a href="{{ asset( '/img/staff/johan.jpg' ) }}" data-toggle="lightbox">
                    <img class="lozad img-fluid" data-src="{{ asset( '/img/staff/johan.jpg' ) }}" alt="Caland AB - Johan Wallstav">
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
            <div class="col-md-6">
                <a href="{{ asset( '/img/staff/reimond.jpg' ) }}" data-toggle="lightbox">
                    <img class="lozad img-fluid" data-src="{{ asset( '/img/staff/reimond.jpg' ) }}" alt="Caland AB - Reimond Sundström">
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
            <div class="col-md-6">
                <a href="{{ asset( '/img/staff/henrik.jpg' ) }}" data-toggle="lightbox">
                    <img class="lozad img-fluid" data-src="{{ asset( '/img/staff/henrik.jpg' ) }}" alt="Caland AB - Henrik Pagré">
                </a>
                <h4>Henrik Pagré</h4>
                <p>
                    <span class="red">Transport/Bemanning</span>
                    <br>
                    <a class="no-colour" href="tel:054220792">054-22 07 92</a>
                    <br>
                    <a class="no-colour" href="mailto:henrik@caland.se">henrik@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <a href="{{ asset( '/img/staff/marcus.jpg' ) }}" data-toggle="lightbox">
                    <img class="lozad img-fluid" data-src="{{ asset( '/img/staff/marcus.jpg' ) }}" alt="Caland AB - Marcus Andersson">
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
            <div class="col-md-6">
                <a href="{{ asset( '/img/staff/robin.jpg' ) }}" data-toggle="lightbox">
                    <img class="lozad img-fluid" data-src="{{ asset( '/img/staff/robin.jpg' ) }}" alt="Caland AB - Robin Gränsed">
                </a>
                <h4>Robin Gränsed</h4>
                <p>
                    <span class="red">Håltagning/Byggtjänster</span>
                    <br>
                    <a class="no-colour" href="tel:0703998123">070-399 81 23</a>
                    <br>
                    <a class="no-colour" href="mailto:robin@caland.se">robin@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <a href="{{ asset( '/img/staff/lena.jpg' ) }}" data-toggle="lightbox">
                    <img class="lozad img-fluid" data-src="{{ asset( '/img/staff/lena.jpg' ) }}" alt="Caland AB - Lena Andersson">
                </a>
                <h4>Lena Andersson</h4>
                <p>
                    <span class="red">Lön/Städ</span>
                    <br>
                    <a class="no-colour" href="tel:054220793">054-22 07 93</a>
                    <br>
                    <a class="no-colour" href="mailto:lena@caland.se">lena@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <a href="{{ asset( '/img/staff/charlotta.jpg' ) }}" data-toggle="lightbox">
                    <img class="lozad img-fluid" data-src="{{ asset( '/img/staff/charlotta.jpg' ) }}" alt="Caland AB - Charlotta Löfgren">
                </a>
                <h4>Charlotta Löfgren</h4>
                <p>
                    <span class="red">Koncernchef</span>
                    <br>
                    <a class="no-colour" href="tel:054220794">054-22 07 94</a>
                    <br>
                    <a class="no-colour" href="mailto:lotta@caland.se">lotta@caland.se</a>
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
                formuläret nedan för att komma i kontakt med oss
            </p>
        </div>
        <form class="" action="/kontakta-email" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Namn</label>
                <input class="form-control" type="text" name="name" placeholder="Namn">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="subject">Ämne</label>
                <input class="form-control" type="text" name="subject" placeholder="Ämne">
            </div>
            <div class="form-group">
                <label for="text">Meddelande</label>
                <textarea class="form-control" type="text" name="text" placeholder="Meddelande" rows="5"></textarea>
            </div>
            <div class="form-group ml-4">
                <input class="form-check-input" type="checkbox" name="policy" required>
                <label class="form-check-label" for="policy">
                    Jag samtycker till att mina uppgifter lagras och behandlas enligt följande
                    <a href="{{ route( 'policy' ) }}" target="_blank">avtal</a>.
                </label>
            </div>
            <button type="submit" class="btn btn-red btn-expand">Skicka</button>
        </form>
    </section>

@endsection
