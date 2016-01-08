$(function() {

	$(".animated").each(function(i) {
	  	var $item = $(this);
	  	setTimeout(function() {
	    	$item.addClass("fadeInUp");
	  	}, 500 * (i / 2));
	});

});