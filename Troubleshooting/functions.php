<?php
// Add the following 'add_action()' and custom function to your theme
// (or preferably child-theme) 'functions.php' file.
// Copy the code block below the dotted line and add to your site.
// ------------------------------------------------------
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