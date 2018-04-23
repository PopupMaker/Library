<?php
/**
 *  Note 1: Replace the popup ID used below ('#popmake-123') with the
 *  value '#popmake-{integer} used with your popup.  From the WP Admin, refer
 *  to 'Popup Maker' -> 'All Popups' -> 'CSS Classes (column)' -> to find
 *  the popup ID.
 *
 *  Note 2: Use the cookie ID ('pum-{integer}' linked to the popup ID above
 *  for the code used on your site.
 *
 *  Add the following code to your theme (or child-theme)
 *  'functions.php' file starting with 'add_action()'.
 * -------------------------------------------------------------------------- */
add_action( 'wp_footer', 'my_custom_popup_scripts', 500 );
/**
 * Set a cookie to close a popup on form submit.
 *
 * @since 1.0.0
 *
 * @return void
 */

function my_custom_popup_scripts() { ?>
    <script type="text/javascript">
        (function ($, document, undefined) {

            jQuery('#popmake-123 form').on('submit', function () {
                jQuery.pm_cookie(
                    'pum-123', // The cookie name that is checked prior to auto opening.
                    true, // Setting a cookie value of true.
                    '10 years', // Plain english time frame.
                    '/' // Cookie path of '/' means site wide.
                );
            });

        }(jQuery, document))
    </script><?php
}