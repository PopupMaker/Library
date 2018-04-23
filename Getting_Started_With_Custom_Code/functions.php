<?php
/**
 *  Add the following code to your theme (or child-theme)
 *  'functions.php' file starting with 'add_action()'.
 * -------------------------------------------------------------------------- */
add_action( 'wp_footer', 'my_custom_popup_scripts', 500 );
/**
 *  Add custom JavaScript scripts to the footer of your site theme.
 *
 * @since 1.0.0
 *
 * @return void
 */
function my_custom_popup_scripts() { ?>
	<script type="text/javascript">
        (function ($, document, undefined) {

            // Your custom code goes here.

        }(jQuery, document))
	</script><?php
}