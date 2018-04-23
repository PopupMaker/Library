<?php
/**
 *  Add the following code to your theme (or child-theme)
 *  'functions.php' file starting with 'add_action()'.
 * -------------------------------------------------------------------------- */
add_action( 'after_setup_theme', 'remove_pum_shortcode_ui' );
/**
 *  Remove the shortcode user interface.
 *
 *  @since 1.0.0
 *
 *  @return void
 */
function remove_pum_shortcode_ui() {
	if ( class_exists( 'PUM_Admin_Shortcode_UI' ) ) {
		remove_action( 'admin_init', array( PUM_Admin_Shortcode_UI::instance(), 'init_editor' ), 20 );
	}
}