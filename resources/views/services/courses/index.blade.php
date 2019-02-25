@extends( 'layouts.app' )
@section( 'title', 'Utbildning' )
@section( 'content' )

    <section class="service-header">
        <img src="{{ asset( '/img/caland-koncernen.jpg' ) }}" alt="Caland Företagsservice">
        <br><br>
        <h1>Utbildning</h1>
        <p>
            Vi har resurser, metoder och kompetens att utföra
            professionella tjänster inom byggbranschen.
            <br>
            <span class="underline">Bredden är vår styrka</span>
        </p>
    </section>
    <hr>
    <section class="service-about">
        <h2>Vad gör vi?</h2>
        <p>
            Våra duktiga instruktörer erbjuder en mängd olika kompetenshöjande
            utbildningar inom bl a transport, bygg och industri. Kontakta oss när ni är
            i behov av nedan tjänster. Vi jobbar i Karlstad & hela Värmland.
            <br>
            <i>Se längre ner för bokning av kurs.</i> 
        </p>
        <div class="row justify-content-center">
            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active btn-red-border m-1" id="first-tab" data-toggle="pill" href="#first"
                        role="tab" aria-controls="first" aria-selected="true">
                        ADR-utbildning
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="second-tab" data-toggle="pill" href="#second"
                    role="tab" aria-controls="second" aria-selected="false">
                        Arbete på väg-utbildning
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="third-tab" data-toggle="pill" href="#third"
                    role="tab" aria-controls="third" aria-selected="false">
                        Bom och saxlift-utbildning
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="fourth-tab" data-toggle="pill" href="#fourth"
                    role="tab" aria-controls="fourth" aria-selected="false">
                        Första hjälpen-utbildning
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="fifth-tab" data-toggle="pill" href="#fifth"
                    role="tab" aria-controls="fifth" aria-selected="false">
                        Hjullastare-utbildning
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="sixth-tab" data-toggle="pill" href="#sixth"
                    role="tab" aria-controls="sixth" aria-selected="false">
                        Fordonsmonterad kranutbildning
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="seventh-tab" data-toggle="pill" href="#seventh"
                    role="tab" aria-controls="seventh" aria-selected="false">
                        Traversutbildning
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="eighth-tab" data-toggle="pill" href="#eighth"
                    role="tab" aria-controls="eighth" aria-selected="false">
                        Truckutbildning
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="ninth-tab" data-toggle="pill" href="#ninth"
                    role="tab" aria-controls="ninth" aria-selected="false">
                        Säkra Lyftutbildning
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-red-border m-1" id="tenth-tab" data-toggle="pill" href="#tenth"
                    role="tab" aria-controls="tenth" aria-selected="false">
                        Heta Arbeten
                    </a>
                </li>
            </ul>
            <br>
            <div class="tab-content px-2" id="myTabContent">
                <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                    <h4>ADR-utbildning</h4>
                    <p>
                        <h5>Full ADR behörighet för chaufförer</h5>
                        <br>
                        ADR Ny Grund, Styckegods omfattar alla klasser.
                        <br><br>
                        Efter godkänd utbildning utfärdas ett ADR – intyg som gäller i fem år.
                        <br><br>
                        ADR Utbildning riktar sig till:
                        <br>
                        <ul>
                            <li>chaufförer som transporterar mindre mängder farligt gods</li>
                            <li>övrig personal som kommer i kontakt med farligt gods, t ex kontor, lager- och terminalpersonal</li>
                        </ul>
                        Om det kan räknas som mindre mängd beror på ämnets farlighet och kvantiteten. Kontakta oss så
                        hjälper vi er att ta reda på om ni behöver någon utbildning och i så fall vilken.
                        <br><br>
                        Vi ger ADR 1.3 både som företagsanpassade kurser och som öppna utbildningar dit ni kan skicka enstaka deltagare.
                        <br><br>
                        Välkommen att kontakta oss när ni är i behov av ADR Utbildning i Karlstad och hela Värmland
                        <br><br>
                        Läs mer om utbildningarna här:
                        <br>
                        <a class="btn btn-red" href="{{ asset( 'storage/ADR.pdf' ) }}" target="_blank">ADR</a>
                        <a class="btn btn-red" href="{{ asset( 'storage/ADR-1.3.pdf' ) }}" target="_blank">ADR 1.3</a>
                    </p>
                </div>
                <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                    <h4>Arbete på väg-utbildning</h4>
                    <p>
                        Arbete på Väg Utbildning – Kursen uppfyller alla de krav på utbildningen, som Trafikverket ställer, för personal som utför arbete på väg.
                        <br><br>
                        <b>Kursbeskrivning:</b>
                        <br>
                        Kursen tar upp regler för säkerheten vid vägarbete och hur reglerna ska tillämpas vid olika typer av arbeten. Kursen innehåller också mer allmänna trafiksäkerhetsfrågor.
                        <br><br>
                        <b>Nivå 1</b> - är en grundläggande utbildning som alla ska genomgå  & som ligger till grund för Nivå 2.
                        <br><br>
                        <b>Nivå 2</b> - är en ny inriktning som avser alla som framför något slag av väghållningsfordon.
                        <br><br>
                        Välkommen att kontakta oss när ni är i behov av Arbete på Väg Utbildning i Karlstad och hela Värmland.
                        <br><br>
                        Läs mer om utbildningen här:
                        <br>
                        <a class="btn btn-red" href="{{ asset( 'storage/apv.pdf' ) }}" target="_blank">APV</a>
                    </p>
                </div>
                <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                    <h4>Bom och saxlift-utbildning</h4>
                    <p>
                        Utbildning i mobila arbetsplattformar Skylift, saxlift och Bom i Karlstad & Värmland
                        <br><br>
                        Caland är certifierade och utfärdar förarbevis på mobila arbetsplattformar, s k skylift
                        och saxplattform enligt SS-ISO 18878:2004
                        <br><br>
                        I utbildningen på mobila arbetsplattformar, s k skylift och saxlift plattform,
                        betonas säkerhetsaspekten för att skapa en säker arbetsmiljö. Utbildningen pågår en dag.
                        <br><br>
                        Innehåll: Genomgång av förarkrav. Besiktning. Instruktioner. Trafikregler. Kontroll
                        av plattform, körövningar och säkerhetsutrustning etc.
                        <br><br>
                        Syfte/mål med kursen:
                        <br>
                        Kursens syfte är att utbilda användare av lift / mobila arbetsplattformar till säkra
                        och ekonomiska förare. Efter avslutad liftutbildning med godkända resultat utfärdas kursintyg.
                        <br>
                        Kontakta oss för mer information gällande skylift, saxlift och andra liftutbildningar.
                        <br>
                        Läs mer om utbildningen här:
                        <br>
                        <a class="btn btn-red" href="{{ asset( 'storage/bom-och-saxlift.pdf' ) }}" target="_blank">Bom och saxlift</a>
                    </p>
                </div>
                <div class="tab-pane fade" id="fourth" role="tabpanel" aria-labelledby="fourth-tab">
                    <h4>Första-hjälpen-utbildning</h4>
                    <p>
                        Calandkoncernen kämpar för att ingen ska lämnas ensam i en katastrof. Våra utbildningar
                        i första hjälpen och hjärt-lungräddning är ett konkret sätt att omsätta denna ambition i handling.
                        <br><br>
                        Calandkoncernen utbildar årligen företag i första hjälpen. Vi har flera färdiga utbildningspaket
                        men skräddarsyr även efter kundens önskemål. Våra instruktörer är utbildade och certifierade
                        enligt HLR-Rådets riktlinjer.
                        <br><br>
                        Kontakta oss för mer information gällande Första Hjälpen utbildningar i Karlstad och hela Värmland.
                        <br><br>
                        Läs mer om utbildningen här:
                        <br>
                        <a class="btn btn-red" href="{{ asset( 'storage/första-hjälpen.pdf' ) }}" target="_blank">Första hjälpen</a>
                    </p>
                </div>
                <div class="tab-pane fade" id="fifth" role="tabpanel" aria-labelledby="fifth-tab">
                    <h4>Hjullastare-utbildning</h4>
                    <p>
                        <h5>Översikt</h5>
                        Inför denna utbildning vill vi gärna veta vilka förkunskaper och erfarenhet ni har sedan tidigare, detta för att göra en individuell utbildningsplan.
                        <br><br>
                        <h5>Mål</h5>
                        Vårt mål med utbildningen är att ge deltagaren de kunskaper som behövs att använda en hjullastare på ett rätt och säkert sätt inom användningsområdet.
                        <br><br>
                        Teoretisk och Praktisk Genomgång.
                        <br><br>
                        Kursen fördelas lika mellan en praktisk och en teoretisk del som avslutas med ett skriftligt prov, samt att ett antal praktiska moment skall vara godkända, materialhanteringövningar med både skopa och gafflar.
                        <br><br>
                        Teoretiska delar. Arbetsmiljölagen trafiklagstiftning, arbetsskydd och företagens egna regler. Uppbyggnad av maskin, ergonomi, särskilda risker vid användning av maskinen.
                        <br><br>
                        <h5>Bedömning</h5>
                        Företaget har instruktörer som tecknat avtal med TYA om truck/maskinförarutbildning
                        <br><br>
                        Efter genomgången kurs erhålls deltagare diplom för kursen samt utbildningsintyg. Vid god erfarenhet 30 månader/4000 timmar vänligen kontakta oss för yrkesbevis.
                        <br><br>
                        Efter utbildningen skall deltagaren kunna.
                        <br><br>
                        Utföra säkerhetskontroller, daglig tillsyn och underhåll av hjullastaren, uppbyggnad och arbetssätt, välja rätt redskap för den tänkta uppgiften, placera hjullastaren så största stabilitet nås vid olika situationer, metoder för att öka maskinen framkomlighet, om maskinen fastnat, beräkna lyftförmåga enl. diagram, manöverera maskinen efter tecken och radio samt regler på allmän väg och på ett kvalite`,miljö och säkerhetsmedvetet sätt framföra maskinen.
                        <br><br>
                        Läs mer om utbildningen här
                        <br>
                        <a class="btn btn-red" href="{{ asset( 'storage/hjullastare.pdf' ) }}" target="_blank">Hjullastare</a>
                    </p>
                </div>
                <div class="tab-pane fade" id="sixth" role="tabpanel" aria-labelledby="sixth-tab">
                    <h4>Fordonsmonterad kranutbildning</h4>
                    <p>
                        Utbildning där du lär dig att köra fordonsmonterad kran.
                        <br><br>
                        Fordonsmonterad kranar delas in i två kategorier: 1: Kranar med kapacitet upp till 18 tonmeter och timmerkranar oavsett storlek. 2: Kranar med kapacitet över 18 tonmeter.
                        <br><br>
                        Förkunskapskrav: Körkortsklass lägst *BC***. Utbildningen ger intyg för båda kategorierna.
                        <br><br>
                        Efter avslutad och godkänd utbildning erhålles intyg enligt TYA
                        <br><br>
                        Välkommen att kontakta oss när ni behöver utbildas i Fordonsmonterad Kranutbildning i Karlstad & Värmland.
                    </p>
                </div>
                <div class="tab-pane fade" id="seventh" role="tabpanel" aria-labelledby="seventh-tab">
                    <h4>Traversutbildning</h4>
                    <p>
                        Vi på Caland är certifierade och erbjuder Traverutbildning som följer SS-ISO 9926-1.
                        <br><br>
                        <b>Kursinnehåll:</b>
                        <br>
                        Introduktion och terminologi, vad är vad? Konstruktion, hur vikt fördelas,
                        operatörens roll, användning. Kommunikation och lasthantering. Underhåll och kontroll.
                        Lagar, regler, ergonomi, säkerhet och olyckor.
                        <br><br>
                        <b>Vad säger lagen?</b>
                        <br>
                        Krav på denna utbildning ställs i Arbetsmiljöverkets föreskrift AFS:2006:6.
                        <br>
                        Utdrag från § 29 i denna föreskrift:
                        <br><br>
                        <span class="italic">”En arbetsgivare som låter en arbetstagare eller inhyrd arbetskraft använda
                        lyftanordningar eller lyftredskap skall ha dokumentation över dennes praktiska och
                        teoretiska kunskaper med avseende på säker användning av utrustningen.”</span>
                        <br><br>
                        Kontakta oss för mer information gällande Traverutbildning i Karlstad och Värmland.
                    </p>
                </div>
                <div class="tab-pane fade" id="eighth" role="tabpanel" aria-labelledby="eighth-tab">
                    <h4>Truckutbildning</h4>
                    <p>
                        <h5>Vi erbjuder Truckutbildningar i Karlstad & hela Värmland</h5>
                        <b>Truckkort A</b> Låglyftande plocktruck, ledstaplare, låglyftande åktruck samt låglyftare.
                        <br><br>
                        <b>Truckkort B</b> Omfattar alla truckar inom A samt motviktstruck.
                        <br><br>
                        Även Höglyftande åkstaplare, skjutstativtruck, höglyftande plocktruck, smalgångstruck
                        samt fyrvägstruck. (Detta är den vanligaste utbildningen)
                        <br><br>
                        Utbildningarna inriktar sig framförallt på säkerheten i det dagliga arbetet med truck.
                        <br>
                        Välkommen att kontakta oss för mer information gällande truckutbildning och truckkort.
                        <br><br>
                        Läs mer om utbildningen här:
                        <br>
                        <a class="btn btn-red" href="{{ asset( 'storage/truck.pdf' ) }}" target="_blank">Truck</a>
                    </p>
                </div>
                <div class="tab-pane fade" id="ninth" role="tabpanel" aria-labelledby="ninth-tab">
                    <h4>Säkra lyft-utbildning</h4>
                    <p>
                        <h5>Säkra lyftutbildning</h5>
                        Majoriteten av alla olyckor beror på felhantering av last eller redskap. Genom att känna
                        till lagar, föreskrifter och standarder kan ni planera och utföra lyftarbetet på ett säkert sätt.
                        <br><br>
                        Med en Säkra Lyftutbildning minskar ni risken för antalet olyckor och tillbud.
                        <br><br>
                        Våra kurser uppfyller myndigheternas krav på dokumenterad utbildning och bygger på lång
                        erfarenhet från besiktning och kontroll.
                        <br><br>
                        Vi hjälper dig med en kurs anpassad efter just ditt företags behov. Kontakta oss när ni
                        ska utbildas i Säkra Lyft i Karlstad och Värmland
                        <br><br>
                        Läs mer om utbildningen här:
                        <br>
                        <a class="btn btn-red" href="{{ asset( 'storage/säkra-lyft.pdf' ) }}" target="_blank">Säkra lyft</a>
                    </p>
                </div>
                <div class="tab-pane fade" id="tenth" role="tabpanel" aria-labelledby="tenth-tab">
                    <h4>Heta arbeten</h4>
                    <p>
                        Information kommer snart.
                    </p>
                </div>
            </div>
        </div>
        {{-- <ul class="list-group list-group-flush">
            <a href="{{ route( 'adr' ) }}" class="list-group-item">
                ADR-utbildning
            </a>
            <a href="{{ route( 'roadwork' ) }}" class="list-group-item">
                Arbete på väg-utbildning
            </a>
            <a href="{{ route( 'lift' ) }}" class="list-group-item">
                Bom och saxlift-utbildning
            </a>
            <a href="{{ route( 'first-help' ) }}" class="list-group-item">
                Första hjälpen-utbildning
            </a>
            <a href="{{ route( 'wheel-loader' ) }}" class="list-group-item">
                Hjullastare-utbildning
            </a>
            <a href="{{ route( 'vehicle-crane' ) }}" class="list-group-item">
                Fordonsmonterad kranutbildning
            </a>
            <a href="{{ route( 'travers' ) }}" class="list-group-item">
                Traversutbildning
            </a>
            <a href="{{ route( 'forklift' ) }}" class="list-group-item">
                Truckutbildning
            </a>
            <a href="{{ route( 'secure-lift' ) }}" class="list-group-item">
                Säkra Lyftutbildning
            </a>
            <a href="{{ route( 'warm-work' ) }}" class="list-group-item">
                Heta Arbeten
            </a>
        </ul> --}}
        <div class="text-center my-3">
            <img src="{{ asset( 'img/service/iso.jpg' ) }}" alt="">
        </div>
    </section>
    <hr>
    <section class="service-book">
        {{-- <h3>Kurser</h3>
        <ul class="list-group list-group-flush">
            @foreach( $courses as $course )
                <li>
                    {{ $course[ 'title' ] }}
                    <br>
                    {{ $course[ 'price' ][ 'value' ] }} sek
                </li>
            @endforeach
        </ul>
        <hr> --}}
        <h2>Boka utbildning</h2>
        <script src="https://www.kursguiden.no/js/autoresize.js" charset="utf-8"></script>
        <iframe id="kursguiden-course-module" src="https://www.kursguiden.no/coursemodule/?id=358"
            frameborder="0" style="width:100%;height:100vh;"></iframe>
    </section>
    <hr>
    <section class="service-contact">
        <h3>Kontakta oss</h3>
        <div class="row">
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

@endsection
