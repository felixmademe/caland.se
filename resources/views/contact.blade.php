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
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/dan.jpg' ) }}" alt="Dan Andersson">
                <h4>Dan Andersson</h4>
                <p>
                    <span class="red">Inköpschef</span>
                    <br>
                    054-22 07 91
                    <br>
                    <a class="link-effect" href="mailto:dan@caland.se">dan@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/lena.jpg' ) }}" alt="Dan Andersson">
                <h4>Lena Andersson</h4>
                <p>
                    <span class="red">Lön</span>
                    <br>
                    054-22 07 93
                    <br>
                    <a class="link-effect" href="mailto:lena@caland.se">lena@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/charlotta.jpg' ) }}" alt="Charlotta Löfgren">
                <h4>Charlotta Löfgren</h4>
                <p>
                    <span class="red">Personalchef</span>
                    <br>
                    054-22 07 94
                    <br>
                    <a class="link-effect" href="mailto:charlotta@caland.se">charlotta@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/ellinor.jpg' ) }}" alt="Ellinor Halldan">
                <h4>Ellinor Halldan</h4>
                <p>
                    <span class="red">Konsultchef/HR</span>
                    <br>
                    054-22 07 95
                    <br>
                    <a class="link-effect" href="mailto:ellinor@caland.se">ellinor@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/henrik.jpg' ) }}" alt="Henrik Pagré">
                <h4>Henrik Pagré</h4>
                <p>
                    <span class="red">Logistikansvarig</span>
                    <br>
                    054-22 07 92
                    <br>
                    <a class="link-effect" href="mailto:henrik@caland.se">henrik@caland.se</a>
                </p>
            </div>
            <div class="col-md-12">
                <hr>
                <h3>Betonghåltagning</h3>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/marcus.jpg' ) }}" alt="Marcus Andersson">
                <h4>Marcus Andersson</h4>
                <p>
                    <span class="red">Arbetsledare</span>
                    <br>
                    070-399 81 23
                    <br>
                    <a class="link-effect" href="mailto:marcus@caland.se">marcus@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/robin.jpg' ) }}" alt="Robin Gränsed">
                <h4>Robin Gränsed</h4>
                <p>
                    <span class="red">Verksamhetschef</span>
                    <br>
                    070-537 98 28
                    <br>
                    <a class="link-effect" href="mailto:robin@caland.se">robin@caland.se</a>
                </p>
            </div>
            <div class="col-md-12">
                <hr>
                <h3>Utbildare</h3>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/johan.jpg' ) }}" alt="Johan Wallstav">
                <h4>Johan Wallstav</h4>
                <p>
                    <span class="red">Utbildare</span>
                    <br>
                    054-22 07 97
                    <br>
                    <a class="link-effect" href="mailto:johan@caland.se">johan@caland.se</a>
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset( '/img/staff/reimond.jpg' ) }}" alt="Reimond Sundström">
                <h4>Reimond Sundström</h4>
                <p>
                    <span class="red">Utbildare</span>
                    <br>
                    054-22 07 98
                    <br>
                    <a class="link-effect" href="mailto:reimond@caland.se">reimond@caland.se</a>
                </p>
            </div>
        </div>
    </section>
    <hr>
    <section class="contact p-0 p-md-5">
        <div class="text-center">
            <h2>Kontakta oss</h2>
            <p>
                Hittar du svar på dina frågor?
                Du är självklart välkommen att ringa oss eller så kan du skriva till oss.
                Det kan du göra genom att använda formuläret nedan.
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
                    <a href="{{ route( 'policy' ) }}" target="_blank">avtal</a>
                </label>
            </div>
            <button type="submit" class="btn btn-red btn-expand">Skicka</button>
        </form>
    </section>

@endsection
