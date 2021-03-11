@include('snippets.layout.head')

<body>  
    <!--loadingscreen-->
    @include('snippets.layout.loading-screen')

    <!--to top btn-->
    @include('snippets.layout.top-btn')

    <!--Navigation-->
    @include('snippets.layout.navigation')

    <section class="home">
        <header id="header">            
            <div class="background fc--neutrals-0 ff--alt fs--size-1">
                <div class="title">
                    <div data-aos="fade-up" data-aos-duration="2500" data-aos-easing="ease-out" data-aos-delay="1500">
                        <h1>Samen werken we aan een</h1>
                        <h1 class="subtitle">future proof brain.</h1>
                    </div>
                    <div class="btn" data-aos="fade-up" data-aos-duration="2500" data-aos-easing="ease-out" data-aos-delay="1500">
                        <div class="about-btn">
                            <a href="/ons-team"><button type="button" class="fc--neutrals-1 fw--bold ff-normal">ONS TEAM</button></a>
                        </div>
                        <div class="contact-btn">
                            <a href="/contact"><button type="button" class="fc--neutrals-0 fw--bold ff-normal">CONTACT</button></a>
                        </div>
                    </div>
                </div>
                <div class="header-container" data-aos="zoom-in-down" data-aos-duration="2500" data-aos-easing="ease-out">
                    <img loading="lazy" src="build/images/boot.png" alt="image of a boat" class="boot">
                </div>
                <picture>
                    <source srcset="./build/images/no-boat.webp" type="image/webp">
                    <source srcset="./build/images/no-boat.png" type="image/png"> 
                    <img loading="lazy" src="build/images/no-boat.png" alt="header image" class="background-img">
                </picture>
            </div>
        </header>
    </section>  
    
    <section class="intro bg--neutrals-4 p--10">
        <div class="i-content ff--normal fc--neutrals-0">
            <div class="fs--size-1" data-aos="fade-up">
                <h1>“Een verandering van tijdperk vraagt om een ander gebruik van je brein”</h1>
            </div>
            <div class="i-content-img-box" data-aos="fade-up">
                <a href="./build/images/ann2.jpg" data-lightbox="fpb-images"><img src="build/images/ann2.jpg" alt="picture of owner future proof brain"></a>
            </div>
            <div class="fs--size-1" data-aos="fade-up">
                <p>De aanpak van <strong>Ann Caroline Roymans</strong> en haar "formule" slaat de nagel op de kop. Na 30 jaren van ervaring in de neurologische <strong>re-validatie</strong> heeft zij tevens sinds 7 jaar het parcour gekozen van <strong>pre-validatie</strong>;  het gezonde brein optimaliseren in deze VUCA wereld. <br><br>Als <strong>auteur</strong> weet ze je te boeien met "Beslissen in een VUCA wereld" van Lannoo Campus. Samen met haar team werkt zij voor bedrijven alsook in privé setting. Als <strong>bedrijfsleider</strong> kent ze zelf de klappen van de zweep om haar team agile te houden en met passie naar het werk te laten komen. Als <strong>trainer en coach</strong> vervult ze de rol van <strong>facilitator in transformatie</strong> van het brein. Van mens, team en organisatie.  Ze heeft een wetenschappelijk gefundeerde achtergrond van de <strong>neurocognitieve gedragsmatige methodologie</strong> (NGM) die ze weet te vertalen naar direct “into the field”-informatie: </p>
            </div>
            <div class="i-content-list" data-aos="fade-up">
                <ul>
                    <li><span class="ff--normal fc--neutrals-0 fw--bold">Begrijpbaar</span></li>
                    <li><span class="ff--normal fc--neutrals-0 fw--bold">Hanteerbaar</span></li>
                    <li><span class="ff--normal fc--neutrals-0 fw--bold">Toepasbaar</span></li>
                </ul>
            </div>            
            <div class="i-content-subtext fs--size-1" data-aos="fade-up">
                <p>Dankzij visual storytelling, visual harvesting en haar TED-stijl is zij een <strong>boeiend public speaker</strong>.</p>
            </div>
        </div>
    </section>

    <section class="message">
        <div class="m-content bg--neutrals-0 fc--neutrals-4 ff--normal fs--size-3">
            <div class="m-content-title p--10 pt--20 pb--20 ta--center" data-aos="zoom-in" data-aos-easing="ease-in" data-aos-delay="300">
                <h1>Wat kunnen wij <br><span class="fc--neutrals-2">voor u</span> doen?</h1>
                <a href="#offer" class="fc--neutrals-4"><i class="fas fa-hand-point-down pointer"></i></a>
            </div>
        </div>
    </section>

    <section id="offer" class="offer">
        <div class="o-content bg--neutrals-3 fc--neutrals-0 ff--normal p--10">
            <div class="o-content-title ta--justify fs--size-1" data-aos="fade-up" data-aos-easing="ease-in">
                <h1>Facilitator in transformatie</h1><br>
                <p>Meesterschap over je brein</p><br>
                <p>Wij bieden een ruim aanbod aan coaching en/of training die jou helpen om de obstakels in je leven te overwinnen. We vinden  je persoonlijke krachten en boycotters. Dit zowel op persoonlijke als op professionele vlak. <br><br><a href="/contact" class="fc--neutrals-0"><strong><u>Contacteer ons</u></strong></a> om te ontdekken hoe wij je kunnen helpen om de resultaten te bereiken waar jij en/of jouw team naar streeft.</p>
            </div>
            <br><br>
            <div class="o-content-container ta--left fs--size-1 mt--20">
                <div class="o-content-container-title fs--size-1 ta--left" data-aos="fade-up" data-aos-easing="ease-in">
                    <h1>Ons aanbod</h1>
                </div>
                <div class="splide p--3" data-aos="fade-up" data-aos-easing="ease-in">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="o-content-container-box ta--left bg--neutrals-5 p--7">
                                    <img src="./build/images/team.jpg" alt="future proof brain team training">
                                    <h1 class="fs--size-1">TEAM EN INDIVIDU</h1>
                                    <h2 class="fs--size-1">Bootcamp of ambassadeurstraining</h2><br>
                                    <p>Future proof people and future proof organisations</p><br>
                                    <p>Omarm de uitdagingen van de verandering in jouw organisatie</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="o-content-container-box ta--left bg--error-0 p--7">
                                    <img src="./build/images/coaching.jpg" alt="future proof brain coaching">
                                    <h1 class="fs--size-1">NEUROCOGNITIEVE GEDRAGSMATIGE COACHING</h1>
                                    <h2 class="fs--size-1">EXECUTIEVE COACHING</h2>
                                    <h2 class="fs--size-1">INDIVIDUELE COACHING</h2>
                                    <h2 class="fs--size-1">LOOPBAAN COACHING</h2><br>
                                    <p>Neurocognitieve gedragsmatige herprogrammering</p><br>
                                    <p>Transformatie & inspiratie</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="o-content-container-box ta--left bg--neutrals-2 p--7">
                                    <img src="./build/images/cogmed-training.jpg" alt="future proof brain training">
                                    <h1 class="fs--size-1">COGMED TRAINING ACT</h1><br>
                                    <p>Haal meer uit je geheugen</p><br>
                                    <p>Leren omgaan met niet helpende gedachten</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('snippets.layout.footer')

    <script rel="preload" src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous" as="script"></script>
    <script src="build/js/parallax-min.js" type="text/javascript"></script>  
    <script src="build/js/sidebar-min.js" type="text/javascript"></script>
    <script src="build/js/scroll-to-top-btn-min.js" type="text/javascript"></script>
    <script src="build/js/loading-screen-min.js" type="text/javascript"></script>
    <script src="build/js/lottie-resizing-min.js" type="text/javascript"></script>
    <script rel="preload" type="module" src="build/js/lottie-min.js" type="text/javascript"></script>
    <script type="module" src="build/js/loader-anim-min.js" type="text/javascript"></script>   
    <script src="build/js/lightbox-min.js"></script>
    <script src="build/js/splide-min.js"></script>
    <script src="https://kit.fontawesome.com/a335cdc05c.js" crossorigin="anonymous"></script> 

    <!-- AOS Animation effects -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- SPLIDE -->
    <script>
	    new Splide( '.splide', {type: 'loop'}).mount();
    </script>

</body>
</html>
