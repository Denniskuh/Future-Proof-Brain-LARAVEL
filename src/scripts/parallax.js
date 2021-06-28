//BACKGROUND IMAGE PAALLAX EFFECT
window.addEventListener('scroll', () => {
    const parallax = document.querySelector('.background-img');    
    let scrollPosition = window.pageYOffset;
    
    if(window.innerWidth>=750){
        //ONLY DO THE PARALLAX EFFECT ON TABLET AND DESKTOP => NOT ON MOBILE FOR PERFORMANCE REASONS
        parallax.style.transform = 'translateY(' + scrollPosition * .6 + 'px)';
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

window.addEventListener('scroll', () => {
    tl.to(".header-container", {
        x: "50vw"
    });
});