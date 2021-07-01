@extends('layouts.app')

@section('content')
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

    <section class="wave-top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0b6ba3" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,202.7C384,192,480,128,576,101.3C672,75,768,85,864,112C960,139,1056,181,1152,197.3C1248,213,1344,203,1392,197.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    </section>

    <section class="message">
        <div class="m-content bg--neutrals-0 fc--neutrals-4 ff--normal fs--size-3">
            <div class="m-content-title p--10 pt--20 pb--20 ta--center" data-aos="zoom-in" data-aos-easing="ease-in" data-aos-delay="300">
                <h1>Wat kunnen wij <br><span class="fc--neutrals-2">voor u</span> doen?</h1>
                <a href="#offer" class="fc--neutrals-4"><i class="fas fa-hand-point-down pointer"></i></a>
            </div>
        </div>
    </section>

    <div data-aos="fade-up" data-aos-easing="ease-in" data-aos-duration="500">
        <section class="wave-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0f9aeb" fill-opacity="1" d="M0,256L48,250.7C96,245,192,235,288,240C384,245,480,267,576,266.7C672,267,768,245,864,218.7C960,192,1056,160,1152,154.7C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </section>
    
        <section id="offer" class="offer">
            <div class="o-content bg--neutrals-3 fc--neutrals-0 ff--normal p--10">
                <div class="o-content-title ta--justify fs--size-1" data-aos="fade-up" data-aos-easing="ease-in">
                    <h1>Facilitator in transformatie</h1><br>
                    <p>Meesterschap over je brein</p><br>
                    <p>Wij bieden een ruim aanbod aan coaching en/of training die jou helpen om de obstakels in je leven te overwinnen. We vinden  je persoonlijke krachten en boycotters. Dit zowel op persoonlijk als op professioneel vlak. <br><br><a href="/contact" class="fc--neutrals-0"><strong><u>Contacteer ons</u></strong></a> om te ontdekken hoe wij je kunnen helpen om de resultaten te bereiken waar jij en/of jouw team naar streeft.</p>
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
                                        <img src="./build/images/cogmed-training.jpg" alt="future proof brain BRAINS">
                                        <h1 class="fs--size-2">BRAINS</h1><br>
                                        <p>De juiste brein zorg, "vinger aan je brein".</p><br>
                                        <h2 class="fs--size-1">van 8 tot 88 jaar</h2><br><br>
                                        <a href="/projecten/#brains" class="o-content-container-box-cta bg--neutrals-1 p--2 fc--neutrals-0 fw--bold">Ontdek meer</a>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="o-content-container-box ta--left bg--error-0 p--7">
                                        <img src="./build/images/coaching.jpg" alt="future proof brain coaching">
                                        <h1 class="fs--size-2">Meesterschap over je brein</h1><br>
                                        <p>Gebaseerd op het boek: "Beslissen in een VUCA Wereld", Lannoo Campus.</p><br>
                                        <h2 class="fs--size-1">Ken je brein. Ontmoet 4 hoofpersonages in je brein.</h2><br><br>
                                        <a href="/projecten/#meesterschap-over-je-brein" class="o-content-container-box-cta bg--neutrals-1 p--2 fc--neutrals-0 fw--bold">Ontdek meer</a>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="o-content-container-box ta--left bg--neutrals-2 p--7">
                                        <img src="./build/images/team.jpg" alt="future proof brain training">
                                        <h1 class="fs--size-2">INDIVIDUELE PROGRAMMA'S</h1><br>
                                        <p>We bieden een breed gamma aan individuele coaching programma's. Ontdek ze hieronder!</p><br><br>
                                        <a href="/projecten/#individueel-programma" class="o-content-container-box-cta bg--neutrals-1 p--2 fc--neutrals-0 fw--bold">Ontdek meer</a>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="o-content-container-box ta--left bg--neutrals-4 p--7">
                                        <img src="./build/images/kind-vliegt-op-koffer.png" alt="future proof brain training">
                                        <h1 class="fs--size-2">FUTURE PROOF KIDS</h1><br>
                                        <p>Elke kind dat bij ons mee in coaching komt geeft aan de ouders een gratis voucher voor het volgen van ons online programma BRAINS.</p><br>
                                        <h2 class="fs--size-1">Dit is de visie die wij doortrekken in de begeleiding van onze kinderen en jongeren.</h2><br><br>
                                        <a href="/projecten/#future-proof-kids" class="o-content-container-box-cta bg--neutrals-1 p--2 fc--neutrals-0 fw--bold">Ontdek meer</a>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="o-content-container-box ta--left bg--neutrals-6 p--7">
                                        <img src="./build/images/kind-vliegt-op-koffer.png" alt="future proof brain training">
                                        <h1 class="fs--size-2">Wil je meer weten?</h1><br>
                                        <p>Maak gerust een afspraak via onderstaande knop. Hopelijk tot snel!</p><br><br>
                                        <a href="/contact" class="o-content-container-box-cta bg--neutrals-1 p--2 fc--neutrals-0 fw--bold"><strong>Contacteer ons</strong></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
