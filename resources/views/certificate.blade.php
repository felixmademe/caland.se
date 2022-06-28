@extends( 'layouts.app' )
@section( 'title', 'Certifikat' )
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

    <section>
        <h1>Våra certifikat</h1>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <a rel="noopener noreferrer" href="{{ asset( '/img/caland-certificate-2022.jpg' ) }}" data-toggle="lightbox">
                    <img class="lozad img-fluid" data-src="{{ asset( '/img/caland-certificate-2022.jpg' ) }}" alt="Caland AB - Certifikat 2022">
                </a>
            </div>
        </div>
    </section>

@endsection
