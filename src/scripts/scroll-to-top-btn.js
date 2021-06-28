$(document).on("ready",function(){
    $(window).on("scroll", function(){
        if($(window).scrollTop() > 100){
            $('.hamburger').css({
                "opacity":"1", "pointer-events":"auto"                        
            });                   
        }else{
            $('.hamburger').css({
                "opacity":"0", "pointer-events":"none"
            });
        }
    });
    $('.hamburger').on("click", function(){
        $('html').animate({scrollTop:0}, 100);
    });
});