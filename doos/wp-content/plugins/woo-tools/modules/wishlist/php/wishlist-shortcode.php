<?php
/**
 * WooCommerce Tool
 *
 * @author ThemeFarmer
 * @version 1.0.0
 * @package WooCommerce Tool
 *
 */

if (!defined('ABSPATH')) {
	exit;
}

function woocommerce_tool_wishlist_shortcode($atts) {
	$wishlist = TFWC_TOOL_Wishilst::get_instance();
	ob_start();
	$wishlist->print_wishlist();
	return ob_get_clean();
	// $wishlist->send_wishlist_over_ajax();
}
add_shortcode('tfwc_tool_wishilst', 'woocommerce_tool_wishlist_shortcode');