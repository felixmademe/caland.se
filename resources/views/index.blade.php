@extends( 'layouts.app' )
@section( 'title', 'Start' )
@section( 'content' )

    <div class="mobile-hero d-block d-md-none">
        <img src="{{ asset( '/img/collection.jpg' ) }}" alt="">
        <div class="text">
            <h1>Caland AB</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <a class="btn btn-red" href="{{ route( 'about' ) }}">Läs mer</a>
        </div>
    </div>

    <div class="hero d-none d-md-block">
        <div class="d-flex flex-row">
            <div class="col-md-6 text-half d-flex align-items-center">
                <div class="">
                    <h1>Caland AB</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a class="btn btn-red" href="{{ route( 'about' ) }}">Läs mer</a>
                </div>
            </div>
            <div class="col-md-6 img-half">
                <img src="{{ asset( '/img/collection.jpg' ) }}" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="clients text-center d-flex align-items-center">
            <div class="client-swiper swiper-container">
                <h2>Några av våra stolta kunder</h2>
                <br><br>
                <div class="swiper-wrapper swiper-no-swiping">
                    <div class="swiper-slide align-self-center">
                        <img src="{{ asset( '/img/peab.svg' ) }}" alt="">
                    </div>
                    <div class="swiper-slide align-self-center">
                        <img src="{{ asset( '/img/valmet.jpg' ) }}" alt="">
                    </div>
                    <div class="swiper-slide align-self-center">
                        <img src="{{ asset( '/img/dhl.png' ) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
