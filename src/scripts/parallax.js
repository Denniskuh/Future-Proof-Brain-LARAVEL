//BACKGROUND IMAGE PAALLAX EFFECT
window.addEventListener('scroll', () => {
    const parallax = document.querySelector('.background-img');    
    let scrollPosition = window.pageYOffset;
    
    //CHECK IF ON CORRECT PAGE
    if(document.location.pathname == "/" || document.location.pathname == "/home"){
        if(window.innerWidth>=750){
            //ONLY DO THE PARALLAX EFFECT ON TABLET AND DESKTOP => NOT ON MOBILE FOR PERFORMANCE REASONS
            parallax.style.transform = 'translateY(' + scrollPosition * .6 + 'px)';
        }
    }
});

//BALLOON ANIMATION WITH GSAP
let tl = gsap.timeline({ 
    duration: 2,
    scrollTrigger: {
        trigger: ".background",
        start: "100px top",
        end: "bottom bottom",
        scrub: true,
        markers: false
    }
});

//PROJECTEN PAGE PARALLAX WITH GSAP
let ptl1 = gsap.timeline({
    duration: 1,
    scrollTrigger: {
        trigger: ".project:nth-child(1)",
        start: "50px top",
        end: "bottom bottom",
        scrub: true,
        markers: false
    }
});

window.addEventListener('scroll', () => {
    //HOME PAGE ANIMATION --> ONLY ANIMATE WHEN ON CORRECT PAGE
    if(document.location.pathname === "/" || document.location.pathname === "/home"){
        tl.to(".header-container", {
            x: "50vw"
        });
    }
    //PROJECT PAGE ANIMATIONS --> ONLY ANIMATE WHEN ON CORRECT PAGE
    if(document.location.pathname === "/projecten"){
        ptl1.to(".project__landing__background__image", {
            scale: 1.1
        });
        ptl1.to(".project__landing__title h1", {
            y: "-20vh"
        });
    }
});