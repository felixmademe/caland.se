@extends( 'layouts.app' )
@section( 'title', 'Support' )
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

    <section class="contact p-0 p-md-5">
        <div class="text-center">
            <h2>Support</h2>
            <p>
                Här kan du skicka in ett meddelande om du tycker att något ser konstigt ut eller om
                något inte fungerar som det ska. Gäller det kontakt med Caland, använd det
                <a rel="noopener noreferrer" href="{{ route( 'contact' ) }}">här formuläret</a>.
            </p>
        </div>
        <form class="" action="/support-email" method="post" id="supportEmail">
            @csrf
            <input type="hidden" id="recaptcha" name="recaptcha" value="{{ config( 'recaptcha.key.site' ) }}">
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
                    <a rel="noopener noreferrer" href="{{ route( 'policy' ) }}" target="_blank">avtal</a>
                </label>
            </div>
            <div class="form-group">
                <small>
                    Denna webbplats är skyddad av reCAPTCHA och Googles
                    <a rel="noopener noreferrer" class="link" href="https://policies.google.com/privacy"
                    rel="noreferrer" target="_blank">sekretesspolicy</a> och
                    <a rel="noopener noreferrer" class="link" href="https://policies.google.com/terms"
                    rel="noreferrer" target="_blank">användarvillkor</a> gäller.
                </small>
            </div>
            <button type="submit" class="btn btn-red btn-expand">Skicka</button>
        </form>
    </section>

@endsection
