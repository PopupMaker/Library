<?php

function custom_nav_menu_walker( $walker ) {
	global $wp_version;
        // Here to prevent false warnings from If Menu and plugins that notify you of nav menu walker replacement.
	if ( doing_filter( 'plugins_loaded' ) ) {
		return $walker;
	}

        // Return early if another plugin/theme is using the same custom fields walker we are. We are already compatible.
	if ( $walker == 'Walker_Nav_Menu_Edit_Custom_Fields' ) {
		return $walker;
	}

        // Load the proper walker class based on current WP version.
	if ( ! class_exists( 'Walker_Nav_Menu_Edit_Custom_Fields' ) ) {
		if ( version_compare( $wp_version, '3.6', '>=' ) ) {
			require_once 'menus/class-nav-menu-edit-custom-fields.php';
		} else {
			require_once 'menus/class-nav-menu-edit-custom-fields-deprecated.php';
		}
	}

	return 'Walker_Nav_Menu_Edit_Custom_Fields';
}