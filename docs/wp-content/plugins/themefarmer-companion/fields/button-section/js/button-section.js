jQuery(document).ready(function($) {
	jQuery('.themefarmer-toggle-section').click(function(event) {
		event.stopPropagation();
		// event.preventDefault();
		if(jQuery(this).parent().is('.themefarmer-section-hidden')){
			jQuery(this).parent().removeClass('themefarmer-section-hidden');			
		}else{
			jQuery(this).parent().addClass('themefarmer-section-hidden');
		}

		jQuery(this).children('.dashicons').toggleClass(function() {
			if(jQuery(this).is('.dashicons-visibility')){
				jQuery(this).removeClass('dashicons-visibility');
				return 'dashicons-hidden';
			}else{
				jQuery(this).removeClass('dashicons-hidden');
				return 'dashicons-visibility';
			}
		});
		jQuery(document).trigger('section_toggle_clicked');
	});
});

/*sub-accordion-panel-mega_store_homepage*/