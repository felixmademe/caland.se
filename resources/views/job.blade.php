@extends( 'layouts.app' )
@section( 'title', 'Jobba på Caland' )
@section( 'content' )

    <section class="info row justify-content-center">
        <div class="col-md-8 bg-white p-5">
            <h1 class="text-center">Jobba på Caland</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
            <hr>
            <div class="jobs">
                <h2 class="text-center">Lediga jobb</h2>
                <div class="list-group">
                    <a class="list-group-item list-group-item-action pointer">Lastbilschaufför - Heltid</a>
                    <a class="list-group-item list-group-item-action pointer">Kranbilsförare - Heltid</a>
                    <a class="list-group-item list-group-item-action pointer">Lastbilschaufför - Heltid</a>
                    <a class="list-group-item list-group-item-action pointer">Kranbilsförare - Heltid</a>
                    <a class="list-group-item list-group-item-action pointer">Lastbilschaufför - Heltid</a>
                    <a class="list-group-item list-group-item-action pointer">Kranbilsförare - Heltid</a>
                    <a class="list-group-item list-group-item-action pointer">Lastbilschaufför - Heltid</a>
                    <a class="list-group-item list-group-item-action pointer">Kranbilsförare - Heltid</a>
                </div>
            </div>
            <hr>
            <div class="application-form">
                <h2 class="text-center">Ansök om jobb</h2>
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
                        <label for="position">Position</label>
                        <input class="form-control" type="text" name="position" placeholder="Position" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Beskriv dig själv</label>
                        <textarea class="form-control" type="text" name="message" placeholder="Beskriv dig själv" rows="5" required></textarea>
                    </div>
                    <label for="file">CV</label>
                    <input type="file" class="filestyle" name="file" id="fileInput"
                        accept=".pdf" data-text="Välj fil" data-btnClass="btn-red-border" required>
                    <br>
                    <button type="submit" class="btn btn-red btn-expand">Skicka</button>
                </form>
            </div>
        </div>
    </section>


@endsection
