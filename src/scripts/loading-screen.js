$(window).on("load",function(){
    $(".loader-wrapper").delay(1000).queue(function(next){
        $(".loader-wrapper").css({transform: 'translateY(-100vh)'});
        next();
    });
});