<?php
/**
 *  Note 1: Replace the placeholder popup ID used below ('#pum-123') with
 *  the value '#pum-{integer}'.  From the WP Admin, refer to 'Popup Maker'
 *  -> 'All Popups' -> 'CSS Classes (column)' -> to find the integer value
 *  assigned to the popup targeted to close with this code snippet.
 *
 *  Note 2: In the code example below, the units of time are milliseconds (ms).
 *  1 second = 1000 ms; 10 seconds = 10000 ms.
 *
 *  Add the following code to your theme (or child-theme)
 *  'functions.php' file starting with 'add_action()'.
 * -------------------------------------------------------------------------- */
add_action( 'wp_footer', 'my_custom_popup_scripts', 500 );
/**
 * Add a script to automatically close a popup after X seconds.
 *
 * @since 1.0.0
 *
 * @return void
 */
function my_custom_popup_scripts() { ?>
    <script type="text/javascript">
        (function ($, document, undefined) {

            $('#pum-123') // Change 123 to your popup ID number.
                .on('pumAfterOpen', function () {
                    var $popup = $(this);
                    setTimeout(function () {
                        $popup.popmake('close');
                    }, 10000); // 10 Seconds
                });

        }(jQuery, document))
    </script><?php
}
