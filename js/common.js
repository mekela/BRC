$(document).ready(function() {
	//fancybox
	$('.fancybox').fancybox({
		helpers: {
			overlay: {
				locked: false
			}
		}
	});
	
	//bxslider
	$('.slider_banner ul').bxSlider({});

	//menu
	$( ".menu_trigger" ).click(function() {
	  $( this ).next().slideToggle( "slow");
	});
});