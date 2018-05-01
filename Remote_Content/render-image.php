<?php
/**
 *  Render image source HTML dynamically via AJAX.
 *  Note: Change the function prefix ( 'popmake_449_' ) to reference the
 *  popup ID used on your site.
 *
 * @since      1.0.0
 *
 * @return void
 */
function popmake_449_remote_content_ajax() {
	echo '<img src="' . ( isset( $_REQUEST['img_src'] ) ? $_REQUEST['img_src'] : '' ) . '" />';
}