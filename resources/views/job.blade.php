@extends( 'layouts.app' )
@section( 'title', 'Jobba på Caland' )
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

    <section class="info row justify-content-center px-0">
        <div class="col-md-6 bg-white pt-5 pb-2 px-4">
            <h1>Jobba på Caland</h1>
            <p>
                Vill du jobba hos oss på Caland? Nedan kan du skicka in en intresseanmälan till
                samtliga av våra tjänster som presenteras här på hemsidan. Håll utkik på
                <a class="text-underline" href="https://www.facebook.com/calandkoncernen"><u>vår Facebooksida</u></a> där vi publicerar lediga jobb.
                <br>
            </p>
            <hr>
            <div class="application-form">
                <h2>Ansök om jobb</h2>
                <form class="job-application" action="/ansökan-email" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Namn</label>
                        <input class="form-control" type="text" name="name" placeholder="Namn" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Beskriv dig själv</label>
                        <textarea class="form-control" type="text" name="text" placeholder="Beskriv dig själv" rows="5" required></textarea>
                    </div>
                    <label for="file">CV</label>
                    <input type="file" class="filestyle" name="file" id="fileInput"
                        accept="application/pdf, application/msword, text/plain" data-text="Välj fil" data-btnClass="btn-red-border" required>
                    <br>
                    <div class="form-group ml-4">
                        <input class="form-check-input" type="checkbox" name="policy" required>
                        <label class="form-check-label" for="policy">
                            Jag samtycker till att mina uppgifter lagras och behandlas enligt följande
                            <a href="{{ route( 'policy' ) }}" target="_blank">avtal</a>.
                        </label>
                    </div>
                    <button type="submit" class="btn btn-red btn-expand">Skicka</button>
                </form>
            </div>
        </div>
    </section>
    <section class="info row justify-content-center px-0">
        <div class="col-md-6 bg-white pt-2 pb-5 px-4 service-contact">
            <hr>
            <h3>Kontakta oss</h3>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h4>Charlotta Löfgren</h4>
                    <p>
                        <span class="red">Koncernchef/Personalchef</span>
                        <br>
                        <a class="no-colour" href="tel:054220794">054-22 07 94</a>
                        <br>
                        <a class="no-colour" href="mailto:lotta@caland.se">lotta@caland.se</a>
                    </p>
                </div>
            </div>
        </div>
    </section>



@endsection
