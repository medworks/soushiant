jQuery(document).ready(function(){
	// tooltips -----------------------------------------------------------------
	$('.tip[title]').qtip({
		position:{
			my: 'bottom center',
			at: 'top center',
			adjust: {
				x: -1,
				y: -14
			}
		},
		style: {
			classes: 'ui-tooltip-tipsy ui-tooltip-shadow'
		}		
	});
});