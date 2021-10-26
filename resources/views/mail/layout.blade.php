<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            @font-face
            {
                font-family: 'Pontano Sans', Arial, Helvetica, sans-serif
                src: url('https://fonts.googleapis.com/css?family=Pontano+Sans');
            }

            a
            {
                color: #ef0000;
                text-decoration: none;
            }

            h3
            {
                margin-bottom: 5px;
            }

            hr
            {
                width: 70%;
                margin: 0 auto;
                color: #363839;
            }

            body
            {
                width: 70%;
                margin: 20px auto;
            }

            header
            {
                color: #ed2e3b !important;
                padding: 20px 0;
                width: 100%;
                text-align: center;
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
            }

            .main
            {
                width: 100%;
                padding: 40px 20px;
            }

            footer
            {
                padding: 20px 0;
                border-bottom-left-radius: 4px;
                border-bottom-right-radius: 4px;
                width: 100%;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <h1>Caland AB</h1>
            </header>

            <div class="main">
                @yield( 'content' )
            </div>

            <footer>
                <hr>
                <h3>Caland AB</h3>
                <a rel="noopener noreferrer" href="https://caland.se">https://caland.se</a>
                <br>
                Herrövägen 4
                65671 Skattkärr
                <br>
                054-86 06 80
                <br>
                <a rel="noopener noreferrer" href="mailto:info@caland.se">info@caland.se</a>
            </footer>
        </div>
    </body>
</html>
