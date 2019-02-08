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

    <div class="contact p-0 p-md-5">
        <div class="text-center">
            <h1>Kontakta oss</h1>
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
                <label for="message">Meddelande</label>
                <textarea class="form-control" type="text" name="message" placeholder="Meddelande" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-red btn-expand">Skicka</button>
        </form>
    </div>

@endsection
