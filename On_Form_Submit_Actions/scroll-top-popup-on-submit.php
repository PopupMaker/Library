<?php
/**
 *  Note 1: Replace the placeholder strings 'form_id' and 'my_form'
 *  in the example below with the actual values from your use case.
 *
 *  Note 2: From the WP Admin, refer to 'Popup Maker' ->
 *  'All Popups' -> 'CSS Classes (column)' -> to find the popup ID
 *  mumber specific to the popop that contains the form. Replace the
 *  number below ('123') with the integer value from your popup inside
 *  the string '#pum-{integer}'.
 *
 *  Add the following code to your theme (or child-theme)
 *  'functions.php' file starting with 'add_action()'.
 * -------------------------------------------------------------------------- */
add_action( 'wp_footer', 'pum14_popup_reg_form_check', 1000 );
/*
 *  Scroll back to top of screen after popup form submit.
 *
 *  @since 1.0.0
 *
 *  @return void
 */
function pum14_popup_reg_form_check() {
	if ( isset( $_POST['form_id'] ) && $_POST['form_id'] == 'my_form' ) {
		?>
        <script type="text/javascript">
            jQuery('#pum-123').animate({'scrollTop': 0}, 1000);
        </script>
		<?php
	}
}