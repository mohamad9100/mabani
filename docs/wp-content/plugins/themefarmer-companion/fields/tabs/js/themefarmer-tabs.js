jQuery(document).ready(function($) {
	var update = function() {
		jQuery(document).find('.themefarmer-tab-radio').each(function(index, item) {
			var $parent = jQuery(this).parents('.themefarmer-tab-control');
			var controls = jQuery(this).data('controls');
			if($parent.hasClass('active')){
				jQuery.each(controls, function(i, val) {
					 jQuery('#customize-control-'+val).css('display', 'list-item');
				});
			}else{
				jQuery.each(controls, function(i, val) {
					 jQuery('#customize-control-'+val).css('display', 'none');
				});
			}
		});
	}
	update();
	jQuery(document).on('click', '.themefarmer-tab-control', function(event) {
		var id = jQuery(this).parents('.themefarmer-tabs').attr('id');
		jQuery('.themefarmer-tab-control-'+id).removeClass('active');
		jQuery(this).addClass('active');
		update();
	});
});