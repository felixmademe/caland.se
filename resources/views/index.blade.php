@extends( 'layouts.app' )
@section( 'title', 'Start' )
@section( 'content' )

    <header class="mobile-hero d-block d-md-none">
        <img src="{{ asset( '/img/collection.jpg' ) }}" alt="">
        <div class="text">
            <h1>Caland AB</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <a class="btn btn-red btn-expand" href="{{ route( 'about' ) }}">Läs mer</a>
        </div>
    </header>

    <header class="hero d-none d-md-block">
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
    </header>

    <section class="company">
        <div class="d-block row d-md-flex flex-md-row">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset( '/img/collection.jpg' ) }}" alt="">
            </div>
            <br class="d-block d-md-none">
            <div class="col-md-6 bg-white d-flex align-items-center justify-content-center">
                <div class="text-block">
                    <h3>Caland AB</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.
                    </p>
                    <a class="btn btn-red btn-expand" href="{{ route( 'about' ) }}">Läs mer</a>
                </div>
            </div>
        </div>
        <br class="d-block d-md-none">
        <div class="d-block row d-md-flex flex-md-row-reverse">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset( '/img/collection.jpg' ) }}" alt="">
            </div>
            <br class="d-block d-md-none">
            <div class="col-md-6 bg-white d-flex align-items-center justify-content-center">
                <div class="text-block">
                    <h3>Caland AB</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.
                    </p>
                    <a class="btn btn-red btn-expand" href="{{ route( 'about' ) }}">Läs mer</a>
                </div>
            </div>
        </div>
        <br class="d-block d-md-none">
        <div class="d-block row d-md-flex flex-md-row">
            <div class="col-md-6 text-center d-flex align-items-center justify-content-center">
                <img src="{{ asset( '/img/collection.jpg' ) }}" alt="">
            </div>
            <br class="d-block d-md-none">
            <div class="col-md-6 bg-white d-flex align-items-center justify-content-center">
                <div class="text-block">
                    <h3>Caland AB</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliqu
                    </p>
                    <a class="btn btn-red btn-expand" href="{{ route( 'about' ) }}">Läs mer</a>
                </div>
            </div>
        </div>
    </section>

    <section class="contact d-flex align-items-center">
        <div class="col-12 d-flex justify-content-center">
            <div class="contact-form col-md-8 my-5">
                <div class="text-center">
                    <h3>Kontakta oss</h3>
                    <p>
                        Hittar du svar på dina frågor?
                        Du är självklart välkommen att ringa oss eller så kan du skriva till oss.
                        Det kan du göra genom att använda formuläret nedan.
                    </p>
                </div>
                <form class="" action="" method="post">
                    <div class="form-group">
                        <label for="name">Namn</label>
                        <input class="form-control" type="text" name="name" placeholder="Namn">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email" placeholder="Email">
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
        </div>
    </section>

@endsection
