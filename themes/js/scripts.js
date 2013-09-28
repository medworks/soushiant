jQuery(document).ready(function(){
	// tooltips -----------------------------------------------------------------
	$('.tip[title]').qtip({
		position:{
			my: 'bottom center',
			at: 'center center',
			adjust: {
				x: 10,
				y: -20
			}
		},
		style: {
			classes: 'cream'
		}		
	});

	// Slideshow -----------------------------------------------------------------
	$('.flexslider').flexslider({
		animation: "fade",
		controlNav: false,
		directionNav: false,
		prevText: "",
		nextText: "",
	});
});