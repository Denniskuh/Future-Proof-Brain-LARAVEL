@include('snippets.layout.head')

<body>  
    <!--loadingscreen-->
    @include('snippets.layout.loading-screen')

    <!--to top btn-->
    @include('snippets.layout.top-btn')

    <!--Navigation-->
    @include('snippets.layout.navigation')

    <section class="over-ons-header bg--neutrals-3">
        <div class="ooh-content ff--normal p--10">
            <div class="ooh-content-title fc--neutrals-0 fs--size-4 ta--center" data-aos="zoom-in" data-aos-easing="ease-in" data-aos-delay="1500">
                <h1>Ons Team</h1>                
            </div>
        </div>
    </section>

    <section class="over-ons-wrapper">
        <div class="oow-content ff--normal p--10">                
            <div class="oow-content-team fc--neutrals-4 fs--size-1 f--bold" data-aos="zoom-in" data-aos-easing="ease-in" data-aos-delay="1500">
                <div class="oow-content-team-box bg--neutrals-1">
                    <div class="oow-content-team-box-img fc--neutrals-0 fs--size-1 f--bold ta--left">
                        <a href="./build/images/ann5.jpg" data-lightbox="fpb-team"><img src="./build/images/ann5.jpg" alt="future proof brain ambassadeur"></a>                                     
                    </div>
                    <div class="oow-content-team-box-info p--7">
                        <h1>Ann-Caroline Roymans</h1><br>
                        <h4>CEO</h4><br>
                        <p>Ambassadeur in transformatie van je brein</p>  
                        <p class="ta--justify fc--neutrals-0 mt--8">Sinds 2013 ben ik aan de slag als gecertificeerde professionele coach en trainer, gespecialiseerd in rewinding van het brein.<br><br>Met andere woorden overschrijven van oude patronen met nieuwe. Zelf maakte ik voor het eerst echt kennis met neurocognitieve  coaching - neuromanagement toen ik op zware obstakels botste in mijn eigen leven en de uitdaging kreeg om deze te overwinnen.<br><br>Dit heeft me gemotiveerd om mijn verworven inzichten  om te zetten in een boek. Om vervolgens mijn  passie om te zetten in een fulltime baan.</p>
                        <div class="oow-content-team-box-info-logo ta--center">
                            <a href="https://www.linkedin.com/in/ann-caroline-roymans/" class="fc--neutrals-0 fs--size-5" target="_blank"><i class="fab fa-linkedin mt--8"></i></a>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>

    @include('snippets.layout.footer')

    <script rel="preload" src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous" as="script"></script> 
    <script src="build/js/sidebar-min.js" type="text/javascript"></script>
    <script src="build/js/scroll-to-top-btn-min.js" type="text/javascript"></script>
    <script src="build/js/loading-screen-min.js" type="text/javascript"></script>
    <script src="build/js/lottie-resizing-min.js" type="text/javascript"></script>
    <script rel="preload" type="module" src="build/js/lottie-min.js" type="text/javascript"></script>
    <script type="module" src="build/js/loader-anim-min.js" type="text/javascript"></script>  
    <script src="build/js/lightbox-min.js"></script> 
    <script src="https://kit.fontawesome.com/a335cdc05c.js" crossorigin="anonymous"></script> 

    <!-- AOS Animation effects -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>