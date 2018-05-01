<?php
/**
 *  Customize content via the Popup Maker custom AJAX function.
 *
 * @since 1.0.0
 *
 * @return void
 */
function popmake_remote_content_ajax() {
	echo 'Hello ' . $_REQUEST['name'] . ', you chose option ' . $_REQUEST['custom'];
}