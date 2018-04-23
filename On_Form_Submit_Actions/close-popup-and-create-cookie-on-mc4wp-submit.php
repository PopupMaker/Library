<?php
/**
 *  Add the following code to your theme (or child-theme)
 *  'functions.php' file starting with 'add_action()'.
 * -------------------------------------------------------------------------- */
add_action( 'wp_footer', 'my_custom_popup_scripts', 500 );
/**
 *  Add custom JS script to footer to set Popup Maker cookie upon
 *  'MailChimp for WordPress' plugin form submission.
 *
 *  @since 1.0.0
 *
 *  @return void
 */

function my_custom_popup_scripts() { ?>
    <script type="text/javascript">
        (function ($, document, undefined) {

            jQuery(document).on('subscribe.mc4wp', '.popmake-content .mc4wp-form', function () {
                var $popup = PUM.getPopup(this);

                $popup.trigger('pumSetCookie');

                setTimeout(function () {
                    $popup.popmake('close');
                }, 5000); // 5 seconds
            });

        }(jQuery, document))
    </script><?php
}