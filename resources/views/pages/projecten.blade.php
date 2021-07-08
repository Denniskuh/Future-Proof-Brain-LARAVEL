@extends('layouts.app')

@section('content')
    <div class="projects">
        <section class="project bg--neutrals-3">
            <div class="project__landing ff--normal p--10">
                <div class="project__landing__title fc--neutrals-0 fs--size-4 ta--center" data-aos="zoom-in" data-aos-easing="ease-in" data-aos-delay="1500">
                    <h1>Onze Projecten</h1><br>     
                    <a href="#brains"><i class="fas fa-chevron-down fc--neutrals-0 project__landing__title__arrow"></i></a>         
                </div>
                <div class="project__landing__background fc--neutrals-0" data-aos="fade-in" data-aos-easing="ease-in"  data-aos-delay="1500">
                    <img src="./build/images/neus-wolken.jpg" alt="neus wolken" class="project__landing__background__image">               
                </div> 
            </div>
        </section>
    
        <section class="project bg--neutrals-3 fc--neutrals-0 py--20" id="brains">
            <div class="project__content bg--neutrals-4 p--10 ff--normal" data-aos="zoom-in">
                <h1 class="project__content__title fs--size-4">BRAINS</h1>
                <p>De juiste brein zorg, "vinger aan je brein".</p><br>
                <a href="/contact" class="o-content-container-box-cta bg--neutrals-1 p--2 my--10 fc--neutrals-0 fw--bold"><strong>Contacteer ons </strong></a><br><br><br>
                <h2>Wat doen we in dit programma?</h2><br>
                <ol>                            
                    <li>We werken binnen een organisatie voor team en/of individu</li><br>
                    <li>We maken een individueel traject</li><br>
                    <li>Open training in groep is ook mogelijk</li><br>
                    <li>6 delig programma van gemiddeld 90 minuten</li><br>
                    <li>Online, LOLA’s (life online learning activities)</li><br>
                    <li>Complementair en aan te raden: Vip2Apro ( persoonlijkheidsanalyse vanuit de NGM)</li>
                </ol><br><br>
                <h2>Leeftijdscategorie</h2><br>
                <p>Van 8 tot 88 jaar</p><br>
                <div class="project__content__image" data-aos="fade-left">
                    <a href="./build/images/cogmed-training.jpg" data-lightbox="fpb-projects"><img src="./build/images/cogmed-training.jpg" alt="BRAINS program images"></a>
                </div>
            </div><br>
        </section>

        <section class="project bg--neutrals-3 fc--neutrals-0 py--20" id="meesterschap-over-je-brein">
            <div class="project__content bg--neutrals-4 p--10 ff--normal" data-aos="zoom-in" data-aos-easing="fade-left">
                <h1 class="project__content__title fs--size-4">MEESTERSCHAP OVER JE BREIN</h1>
                <p>Gebaseerd op het boek: "Beslissen in een VUCA wereld".</p><br>
                <p>Ken je brein. Ontmoet 4 hoofdpersonages in je brein.</p>
                <p> <small>bron NGM: Neuro Gedragsmatige Methodologie (NGM).</small></p><br>
                <a href="/contact" class="o-content-container-box-cta bg--neutrals-1 p--2 my--10 fc--neutrals-0 fw--bold"><strong>Contacteer ons </strong></a><br><br><br>
                <h2>Wat doen we in dit programma?</h2><br>
                <ol>                            
                    <li>We werken binnen een organisatie voor een team of een groep</li><br>
                    <li><span class="bg--neutrals-3 p--2">8 basisdelen</span><br><br><span class="bg--neutrals-5 p--2">4 complementaire delen</span></li><br>
                    <li>Online en offline sessies van 3 uur per deel</li><br>
                </ol><br><br>
                <h2>Leeftijdscategorie</h2><br>
                <p>Van 18 tot 88 jaar</p><br><br>
                <div class="project__content__image" data-aos="fade-left">
                    <a href="./build/images/coaching.jpg" data-lightbox="fpb-projects"><img src="./build/images/coaching.jpg" alt="MEESTERSCHAP OVER JE BREIN program images"></a>
                </div>
                <div class="project__content__details">
                    <h2 class="fs--size-6">Hoe ziet dit er exact uit?</h2><br>
                    <div class="project__content__details__base">
                        <h3 class="fs--size-3 bg--neutrals-3 p--2">DEEL 1 & 2</h3><br>
                        <p>Je reptielgebied : “Je holbewoner slaat bij bedreigingen met zijn knots in je ziel.”</p><br>
                        <i class="fas fa-angle-double-down"></i><br><br>
                        <h3 class="fs--size-3 bg--neutrals-3 p--2">DEEL 3 & 4</h3><br>
                        <p>Je groepspositie : “Mensen zijn kuddedieren en één van onze grootste angsten is uit de groep vallen.”</p><br>
                        <i class="fas fa-angle-double-down"></i><br><br>
                        <h3 class="fs--size-3 bg--neutrals-3 p--2">DEEL 5 & 6</h3><br>
                        <p>Je emotionele hersengebied : “Wij hebben een black box waar we alle data opslaan.”</p><br>
                        <i class="fas fa-angle-double-down"></i><br><br>
                        <h3 class="fs--size-3 bg--neutrals-3 p--2">DEEL 7 & 8</h3><br>
                        <p>Je prefrontale hersengebied : “het neemt ⅕ van je hersenmassa in beslag, ontstond zo’n 100.000 jaar geleden en is het toppunt van onze intelligentie. De adaptieve intelligentie die ons Future Proof maakt.”</p><br>
                        <i class="fas fa-angle-double-down"></i><br><br>
                    </div>
                    <div class="project__content__details__complementairy">
                        <h3 class="fs--size-4 bg--neutrals-5 p--2">DEEL 9 & 10</h3><br>
                        <p>Synthese van de voorgaande en doorgetrokken naar specifieke doelen als communicatie, persoonlijk stressmanagement, relationeel stressmanagement, probleemoplossend denken</p><br>
                        <i class="fas fa-angle-double-down"></i><br><br>
                        <h3 class="fs--size-4 bg--neutrals-5 p--2">DEEL 11 & 12</h3><br>
                        <p>Persoonlijke presentatie van eindwerken en POP</p><br>
                        <i class="fas fa-angle-double-down"></i><br><br>
                        <h3 class="fs--size-4 bg--neutrals-5 p--2">WE RADEN OOK HET VOLGENDE AAN</h3><br>
                        <p>Vip2Apro  (persoonlijkheidsanalyse vanuit de NGM)</p>
                    </div>
                </div>
                <h2 class="fs--size-4 mt--20 ta--center">Enkele lovende woorden die we hebben ontvangen</h2><br>
                @include('includes.quotes')<br>
            </div><br>
        </section>

        <section class="project bg--neutrals-3 fc--neutrals-0 py--20" id="individueel-programma">
            <div class="project__content bg--neutrals-4 p--10 ff--normal" data-aos="zoom-in">
                <h1 class="project__content__title fs--size-4">INDIVIDUELE PROGRAMMA'S</h1>
                <p>We bieden een breed gamma aan individuele coaching programma's. Ontdek ze hieronder!</p><br>
                <a href="/contact" class="o-content-container-box-cta bg--neutrals-1 p--2 my--10 fc--neutrals-0 fw--bold"><strong>Contacteer ons </strong></a><br><br><br>
                <h2>Wat bieden we exact aan?</h2><br>
                <ol>                            
                    <li>BRAINS coaching</li><br>
                    <li>Loopbaancoaching</li><br>
                    <li>Hartcoherentie training</li><br>
                    <li>M-braining</li><br>
                    <li>Cogmed/geheugentraining</li><br>
                    <li>ACT</li><br>
                    <li>Stressmanagement</li><br>
                    <li>Executieve coaching/businesscoaching</li>
                </ol><br><br>
                <h2>Leeftijdscategorie</h2><br>
                <p>Van 8 tot 88 jaar</p><br>
                <div class="project__content__image" data-aos="fade-left">
                    <a href="./build/images/team.jpg" data-lightbox="fpb-projects"><img src="./build/images/team.jpg" alt="BRAINS program images"></a>
                </div>
            </div><br>
        </section>

        <section class="project bg--neutrals-3 fc--neutrals-0 py--20" id="future-proof-kids">
            <div class="project__content bg--neutrals-4 p--10 ff--normal" data-aos="zoom-in">
                <h1 class="project__content__title fs--size-4">INDIVIDUELE PROGRAMMA'S</h1>
                <p>We bieden een breed gamma aan individuele coaching programma's. Ontdek ze hieronder!</p><br>
                <a href="/contact" class="o-content-container-box-cta bg--neutrals-1 p--2 my--10 fc--neutrals-0 fw--bold"><strong>Contacteer ons </strong></a><br><br><br>
                <h2>Wat bieden we exact aan?</h2><br>
                <ol>   
                    <h3 class="fs--size-4 bg--neutrals-5 p--2">Vroegbegeleiding</h3><br>                         
                    <li>Als jouw baby een extra duwtje nodig heeft (0-2 jaar)</li><br>
                    <h3 class="fs--size-4 bg--neutrals-5 p--2">Peuter-kleuter begeleiding</h3><br> 
                    <li>Als je vragen hebt over de ontwikkeling en opvoeding van jouw kind.(2-5 jaar)</li><br>
                    <h3 class="fs--size-4 bg--neutrals-5 p--2">Jongeren begeleiding</h3><br> 
                    <li>Als de pre- puberteit en puberteit  moeilijke uitdagingen geeft. Stressmanagement, communicatie en zelfbeeld (6 tot 16 jaar). Studiebegeleiding.</li><br>
                    <h3 class="fs--size-4 bg--neutrals-5 p--2">Jong adolescenten begeleiding</h3><br> 
                    <li>Als puberteit  moeilijke uitdagingen geeft. Stressmanagement, communicatie en zelfbeeld (6 tot 16 jaar). Studiebegeleiding.</li><br>
                </ol><br><br>
                <h2>Leeftijdscategorie</h2><br>
                <p>Van 0 tot 16 jaar</p><br>
                <div class="project__content__image" data-aos="fade-left">
                    <a href="./build/images/kind-vliegt-op-koffer.png" data-lightbox="fpb-projects"><img src="./build/images/kind-vliegt-op-koffer.png" alt="BRAINS program images"></a>
                </div>
            </div><br>
        </section>
    </div>
@endsection