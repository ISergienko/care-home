

jQuery( document ).ready(function() {

	if ( jQuery(document).scrollTop() > 0 ) {

		jQuery('.spanMy').css('opacity',1);
	} else {

		jQuery('.spanMy').css('opacity',0);
	}

	jQuery(window).scroll(function(){
		if ( jQuery(document).scrollTop() > 0 ) {

			jQuery('.spanMy').css('opacity',1);
		} else {
			jQuery('.spanMy').css('opacity',0);
		}
	});
});