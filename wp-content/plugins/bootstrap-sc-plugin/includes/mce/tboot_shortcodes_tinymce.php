<?php
/**
 * This file has all the main shortcode functions
 * @package Twitter Bootstrap Shortcodes Plugin
 * @since 1.0
 * @author Brad Williams : http://bragthemes.com
 * @copyright Copyright (c) 2013, Brad Williams
 * @link http://bragthemes.com
 * @License: GNU General Public License version 3.0
 * @License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 */

function tboot_add_mce_button() {
	// check user permissions
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// check if WYSIWYG is enabled
	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'tboot_add_tinymce_plugin' );
		add_filter( 'mce_buttons', 'tboot_register_mce_button' );
	}
}
add_action('admin_head', 'tboot_add_mce_button');


function tboot_add_tinymce_plugin( $plugin_array ) {
	$plugin_array['tboot_mce_button'] = plugins_url( '/js/tboot_shortcodes_tinymce.js', __FILE__ );
	return $plugin_array;
}


function tboot_register_mce_button( $buttons ) {
	array_push( $buttons, 'tboot_mce_button' );
	return $buttons;
}


function tboot_mce_css() {
	wp_enqueue_style('tboot-tc', plugins_url('/css/tboot_tinymce_style.css', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'tboot_mce_css' );