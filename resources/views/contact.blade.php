@include('snippets.layout.head')

<body>  
    <!--loadingscreen-->
    @include('snippets.layout.loading-screen')

    <!--to top btn-->
    @include('snippets.layout.top-btn')

    <!--Navigation-->
    @include('snippets.layout.navigation')
    
    <section class="contact">
        <div class="c-content bg--neutrals-13 ff--alt">
            <div class="c-content-title fc--neutrals-4 ff--alt fs--size-2 p--10" data-aos="fade-up" data-aos-easing="ease-in" data-aos-delay="1500">
                <h1>Contacteer ons!</h1>
                <p class="fs--size-1">Ontdek hoe wij je kunnen helpen om de resultaten te bereiken waar jij en/of jouw team naar streeft.</p>
            </div>            
            <div class="c-content-form bg--neutrals-0 p--5" data-aos="zoom-in" data-aos-easing="ease-in" data-aos-delay="1500">
                <?php if(!empty($userError)): ?>
                    <div class="c-content-form-errors fc--neutrals-0 fw--bold fs--size-1 ff--normal bg--error-0">
                        <p><?= $userError; ?></p>
                    </div>
                <?php endif; ?>
                <form action="/contact" method="post" class="bg--neutrals-0">
                    <fieldset>
                        <label for="email" class="fc--neutrals-4">Jouw email<span class="fc--error-0 fs--size-3">*</span></label>
                        <input type="text" name="email" class="mt--2 fc--neutrals-3 fw--bold fs--size-1 ff--normal bg--neutrals-13">
                    </fieldset>
                    <fieldset>
                        <label for="message" class="fc--neutrals-4">Jouw bericht<span class="fc--error-0 fs--size-3">*</span></label>
                        <textarea name="message" cols="50" rows="20" class="mt--2 fc--neutrals-3 fw--bold fs--size-1 ff--normal bg--neutrals-13"></textarea>
                    </fieldset>
                    <fieldset>
                        <input type="submit" class="c-content-form-submit fc--neutrals-0 fw--bold fs--size-1 ff--normal bg--neutrals-4">
                    </fieldset>
                </form>
            </div>
            <div class="c-content-map bg--neutrals-3 fc--neutrals-0 ff--alt fs--size-2">
                <div data-aos="fade-up" data-aos-easing="ease-in" data-aos-delay="500">
                    <h1>Eens langskomen? Dat kan!</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2497.2681610570426!2d4.496299615760562!3d51.25097177959383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3f872b21d8093%3A0x1401b640c976dee4!2sSint-Cordulastraat%201%2C%202900%20Schoten!5e0!3m2!1snl!2sbe!4v1614477241397!5m2!1snl!2sbe" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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