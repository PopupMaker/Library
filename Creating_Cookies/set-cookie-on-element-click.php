<?php
/**
 *  Note 1: Replace the placeholder string below ('css-selector-for-the-close-button')
 *  with the actual CSS selector (HTML ID or class attribute) assigned to the target
 *  attachment (for example, image or graphic).
 *
 *  Note 2: Replace the popup ID used below ('#popmake-123') with the
 *  value '#popmake-{integer}' used within your popup.  From the WP Admin, refer
 *  to 'Popup Maker' -> 'All Popups' -> 'CSS Classes (column)' -> to find
 *  the popup ID.
 *
 *  Add the following code to your theme (or child-theme)
 *  'functions.php' file starting with 'add_action()'.
 * -------------------------------------------------------------------------- */
add_action( 'wp_footer', 'my_custom_popup_scripts', 500 );
/**
 *  Close a popup by targeting a specific HTML element within a popup container.
 *
 * @since 1.0.0
 *
 * @return void
 */
function my_custom_popup_scripts() { ?>

    <script type="text/javascript">

        (function ($, document, undefined) {
            $('css-selector-for-the-close-button').click(function (e) {
                $('#popmake-123').trigger('pumSetCookie');
            });
        }(jQuery, document))

    </script><?php

}