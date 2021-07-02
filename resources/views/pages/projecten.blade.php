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
            <div class="project__content bg--neutrals-4 p--10 ff--normal" data-aos="zoom-in" data-aos-easing="fade-left" data-aos-delay="500">
                <h1 class="fs--size-8">BRAINS</h1>
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
                <div class="project__content__image" data-tilt data-tilt-glare data-aos="zoom-in" data-aos-easing="fade-right">
                    <a href="./build/images/cogmed-training.jpg" data-lightbox="fpb-projects"><img src="./build/images/cogmed-training.jpg" alt="BRAINS program images"></a>
                </div>
            </div><br>
        </section>
    </div>
@endsection