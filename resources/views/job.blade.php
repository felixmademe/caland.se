@extends( 'layouts.app' )
@section( 'title', 'Jobba på Caland' )
@section( 'content' )

    <section class="info row justify-content-center px-0">
        <div class="col-md-8 bg-white py-5 px-4">
            <h1>Jobba på Caland</h1>
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
                <h2>Tjänster</h2>
                <p>Nedan finns en samling av olika tjänster som du kan skicka en intresseanmälan om. </p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h5>Lastbilschaufför</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco.</p>
                    </li>
                    <li class="list-group-item">
                        <h5>Montör</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco.</p>
                    </li>
                    <li class="list-group-item">
                        <h5>Kranbilsförare</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco.</p>
                    </li>
                </ul>
            </div>
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
                        <label for="position">Position</label>
                        <input class="form-control" type="text" name="position" placeholder="Position" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Beskriv dig själv</label>
                        <textarea class="form-control" type="text" name="text" placeholder="Beskriv dig själv" rows="5" required></textarea>
                    </div>
                    <label for="file">CV</label>
                    <input type="file" class="filestyle" name="file" id="fileInput"
                        accept="application/pdf, application/msword, text/plain" data-text="Välj fil" data-btnClass="btn-red-border" required>
                    <br>
                    <button type="submit" class="btn btn-red btn-expand">Skicka</button>
                </form>
            </div>
        </div>
    </section>


@endsection
