@include('includes.head')

    <body>  
        <!--loadingscreen-->
        @include('includes.loading-screen')

        <!--to top btn-->
        @include('includes.top-btn')

        <!--Navigation-->
        @include('includes.navigation')

        {{--Content--}}
        @yield('content')

        {{--Footer--}}
        @include('includes.footer')

        <script rel="preload" src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous" as="script"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/ScrollTrigger.min.js"></script>
        <script src="build/js/parallax-min.js" type="text/javascript"></script>  
        <script src="build/js/sidebar-min.js" type="text/javascript"></script>
        <script src="build/js/scroll-to-top-btn-min.js" type="text/javascript"></script>
        <script src="build/js/loading-screen-min.js" type="text/javascript"></script>
        <script src="build/js/lottie-resizing-min.js" type="text/javascript"></script>
        <script rel="preload" type="module" src="build/js/lottie-min.js" type="text/javascript"></script>
        <script type="module" src="build/js/loader-anim-min.js" type="text/javascript"></script>   
        <script src="build/js/lightbox-min.js"></script>
        <script src="https://kit.fontawesome.com/a335cdc05c.js" crossorigin="anonymous"></script> 

        
        @if($title == "Home")
            <script src="build/js/splide-min.js"></script>
            <!-- SPLIDE -->
            <script>
                new Splide( '.splide', {type: 'loop'}).mount();
            </script>
        @endif

        @if($title == "Projecten")
            <script type="text/javascript" src="./build/js/vanilla-tilt-min.js">
                VanillaTilt.init(document.querySelector(".project__content__image"), {
                    max: 25,
                    speed: 400,
                    speed: 300,
                    transition: true,
                    easing: "cubic-bezier(.03,.98,.52,.99)",
                    glare: true,
                    "max-glare": 1
                });
            </script>
        @endif

        <!-- AOS Animation effects -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

    </body>
</html>
