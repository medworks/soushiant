jQuery(document).ready(function(){
	// tooltips -----------------------------------------------------------------
	$('.tip[title]').qtip({
		position:{
			my: 'bottom center',
			at: 'center center',
			adjust: {
				x: -1,
				y: -14
			}
		},
		style: {
			classes: 'ui-tooltip-tipsy ui-tooltip-shadow'
		}		
	});

	// Slideshow -----------------------------------------------------------------
	$('.flexslider').flexslider({
		animation: "fade",
		controlNav: false,
		prevText: "",
		nextText: "",
	});
});