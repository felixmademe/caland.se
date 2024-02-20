@extends( 'layouts.app' )
@section( 'title', 'Om oss' )
@section( 'content' )

    <section class="company">
        <div class="text-center">
            <h1>Om oss</h1>
        </div>
        <div class="mt-5" id="affarside">
            <h2 class="font-weight-normal mb-3">Affärsidé</h2>
            <p>
                Calands affärsidé är att vara en pålitlig partner och helhetslösning för våra kunder. Detta gör vi genom att erbjuda ett brett utbud av tjänster inom håltagning-, rivning- och saneringsarbete, transport och industrientreprenad, samt genom att vi inom dessa områden även tillhandahåller utbildningar och personalbemanning. 
                <br/>
                Bredden är vår styrka!
            </p>
        </div>
        <div class="mt-5" id="historia">
            <h2 class="font-weight-normal mb-3">Historia</h2>
            <p>
                Caland är ett familjeägt företag som startades år 1994 genom det första bolaget Caland AB. Företagsnamnet är de tre första bokstäverna från familjenamnen Calais och Andersson, <span class="red">CAL</span> och <span class="red">AND</span> blev företagsnamnet <span class="red">CALAND</span>. Vid starten sysselsatte företaget två personer som servade företag inom åkeri- och betonghåltagningsbranschen genom personaluthyrning.
            </p>
            <p>
                2002 blir Caland en koncern då första dotterbolaget Caland Betonghåltagning AB startas med tjänster inom håltagning, rivning och sanering.
            </p>
            <p>
                2007 startas Caland Transport AB - koncernens åkeri.
            </p>
            <p>
                2009 bildar Caland AB en utbildningsenhet för utbildningar både internt och externt.
            </p>
            <p>
                2016 utökas koncernen med två bolag, Caland Företagsservice AB - som tar över personaluthyrningen från Caland AB samt Caland Entreprenad AB - med verksamhet inom gjuteri -och metallindustrin.
            </p>
            <p>
                Caland är fortfarande idag en bred men starkt sammanlänkad koncern som nu består av fyra bolag då Caland Transport AB och Caland Företagsservice AB fusionerades ihop 2022.
            </p>
            <p>
                Företagen drivs och ägs idag av grundarfamiljen Andersson, fast nu i generation två.
            </p>
        </div>
        <div class="mt-5" id="var-vardegrund">
            <h2 class="font-weight-normal mb-3">Vår värdegrund</h2>
            <p>
                Caland koncernen är en familjär partner att lita på som alltid gör sitt yttersta för kunden och den anställdes bästa. Detta ska genomsyra hela vår verksamhet och beskrivs närmare med dessa kärnvärden:
            </p>
            <h3 class="text-left font-weight-normal mt-5 mb-3">Genuina</h3>
            <p>
                Vi är ärliga och pålitliga - vi håller det vi lovar.
            </p>
            <p>
                Vi litar på varandra och genom rak konstruktiv dialog gör vi varandra bättre. 
            </p>
            <p>
                Vi lyssnar på varandra och delar med oss av kompetens och lärdomar.
            </p>
            <h3 class="text-left font-weight-normal mt-5 mb-3">Lösningsorienterade</h3>
            <p>
                Vi är handlingskraftiga och agerar snabbt när utmaningar uppstår.
            </p>
            <p>
                Vi samarbetar mellan avdelningar för att komma fram till den bästa lösningen.
            </p>
            <p>
                Vi strävar ständigt efter förbättringar, som leder till hållbara lösningar i alla led.
            </p>

            <h3 class="text-left font-weight-normal mt-5 mb-3">Tillgängliga</h3>
            <p>
                Vi är lätta att nå för våra kunder och återkopplar då det krävs.
            </p>
            <p>
                Vi finns till hands för våra medarbetare - alla ska känna sig sedda, hörda och trygga.
            </p>
        </div>
    </section>
    <section id="certificates" class="mt-5" id="policy">
        <h2 class="font-weight-normal mb-4">Policy</h2>
        <p>        
            <a href="{{ asset( '/documents/certificates/Kvalitetspolicy.pdf' ) }}" target=”_blank”>            
                <img src="{{ asset( '/img/pdf-logo.png' ) }}" height="40" class="mr-2" class="lozad" />
                Kvalitetspolicy
            </a>
        </p>
        <p>
            <a href="{{ asset( '/documents/certificates/Miljöpolicy.pdf' ) }}" target=”_blank”>
                <img src="{{ asset( '/img/pdf-logo.png' ) }}" height="40" class="mr-2" class="lozad" />
                Miljöpolicy
            </a>
        </p>
        <p>
            <a href="{{ asset( '/documents/certificates/ISO-Certifikat.pdf' ) }}" target=”_blank”>
                <img src="{{ asset( '/img/pdf-logo.png' ) }}" height="40" class="mr-2" class="lozad" />
                ISO Certifikat 9001 och 14001
            </a>
        </p>
    </section>
    
@endsection