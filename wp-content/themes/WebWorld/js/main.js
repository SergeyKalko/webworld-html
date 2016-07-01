window.onload = function() {
	$('.footer-block h3').on('click', function() {
		$(this).css('color','#707070');
	});

    
    $('.block-wrap').on('click', function(event) {
    	event.preventDefault();
    	$('.block-wrap').removeClass('active');
        $(this).toggleClass('active');
    });

	$('.content-title').on('click', function() {
		$(this).find('strong').css('color','red');
	});

	$('.news-block').on('mouseover', function() {
    	$(this).css("background-color", "lightblue"); 
	});

	$('.news-block').on('mouseout', function() {
    	$(this).css("background-color", "#eeeeee"); 
    });
};
