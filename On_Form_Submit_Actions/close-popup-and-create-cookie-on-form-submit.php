<?php

add_action( 'wp_footer', 'my_custom_popup_scripts', 500 );
/**
 *  Add custom JS script to footer to set a cookie that targets a popup by it's ID.
 *
 *  Note: Popups are assigned a unique ID of '#popmake-{integer}'.
 *  From the WP Admin, view 'Popup Maker' -> 'All Popups' -> 'CSS Classes (column)'
 *  to locate the popup ID formatted as 'popmake-{integer}'. Change the placeholder
 *  ID ( '#popmake-967' ) in this code sample with your site's unique popup ID.
 *
 *  @since 1.0.0
 *
 *  @return void
 */
function my_custom_popup_scripts() { ?>
	<script type="text/javascript">
        (function ($, document, undefined) {

            jQuery('#popmake-967').trigger('pumSetCookie');

            setTimeout(function () {
                jQuery('#popmake-967').popmake('close');
            }, 5000); // 5 seconds

        }(jQuery, document))
	</script><?php
}