$(document).ready(function(){$(window).scroll(function(){$(window).scrollTop()>100?$(".hamburger").css({opacity:"1","pointer-events":"auto"}):$(".hamburger").css({opacity:"0","pointer-events":"none"})}),$(".hamburger").click(function(){$("html").animate({scrollTop:0},100)})});