<?php
/**
 *  Note: Copy the code snippet below starting on line 9 and either add it to the
 *  'functions.php' file of your project theme (or child-theme), or the editor of a
 *  WordPress plugin such as 'My Custom Functions'
 *  ( see: https://wordpress.org/plugins/my-custom-functions/ ).
 *
 */
add_action( 'wp_footer', 'my_custom_popup_scripts', 500 );
/**
 *  Resize a slider window within a popup container.
 *
 *  @since 1.0.0
 *
 *  @return void
 */
function my_custom_popup_scripts() { ?>
	<script type="text/javascript">
        (function ($, document, undefined) {

            jQuery('.pum').on('pumAfterOpen', function () {
                jQuery(window).trigger('resize');
            });

        }(jQuery, document))
	</script><?php
}