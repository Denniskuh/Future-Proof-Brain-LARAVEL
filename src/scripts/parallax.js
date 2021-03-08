window.addEventListener('scroll', () => {
    const parallax = document.querySelector('.background-img');    
    const balloonFloating = document.querySelector('.header-container');
    let scrollPosition = window.pageYOffset;

    balloonFloating.style.transform = 'translateX(' + scrollPosition * 1.3 + 'px)';
    if(window.innerWidth>=750){
        //ONLY DO THE PARALLAX EFFECT ON TABLET AND DESKTOP => NOT ON MOBILE FOR PERFORMANCE REASONS
        parallax.style.transform = 'translateY(' + scrollPosition * .6 + 'px)';
    }
});