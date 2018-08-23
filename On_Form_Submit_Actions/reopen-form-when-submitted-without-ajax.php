<?php
/*
/* Add the following code to your theme (or child-theme)
/*   'functions.php' file starting at 'add_action()'.
*/
add_action( 'wp_footer', 'pum14_popup_reg_form_check', 1000 );
/*
 * Reopen a non-AJAX submitted form after form submit.
 *
 * @since 1.0.0.
 *
 * @return void
 */
function pum14_popup_reg_form_check() {
	if ( isset( $_POST['form_id'] ) && $_POST['form_id'] == 'my_form' ) {
		?>
		<script type="text/javascript">
            PUM.open(123);
		</script>
		<?php
	}
}