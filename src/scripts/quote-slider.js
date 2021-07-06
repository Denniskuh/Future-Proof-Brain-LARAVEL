var i = 0;
const slideCount = $('.quote__slider li').length;

function quoteSlider() {
	setTimeout(function() {
		// Move $("#quote" + i) off to the left
		$("#quote" + i).animate({
			right: "120%"
		}, 2000);
		// Change selected quote
		i++;
        //IF YOU ARE ON THE LAST QUOTE THEN RESET
		if(i > (slideCount - 1)) {
			i = 0;
		}
		// Move $("#quote" + i) to right side then back to middle
		$("#quote" + i).css("right", "-60%");
		$("#quote" + i).animate({
			right: "20%"
		}, 2000);
		quoteSlider();
	}, 15000);

};
//RUN THE FUNCTION
quoteSlider();