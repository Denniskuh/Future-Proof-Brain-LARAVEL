var i=0;const slideCount=$(".quote__slider li").length;function quoteSlider(){setTimeout(function(){$("#quote"+i).animate({right:"120%"},2e3),++i>slideCount-1&&(i=0),$("#quote"+i).css("right","-60%"),$("#quote"+i).animate({right:"20%"},2e3),quoteSlider()},15e3)}quoteSlider();