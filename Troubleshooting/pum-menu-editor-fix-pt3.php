<?php
// Note: Priority of 11 is important, as WordPress overwrites anything before that.
add_filter( 'manage_nav-menus_columns', '_my_nav_menu_columns', 11 );
/**
 *  Description.
 *
 *  @since 1.0.0
 *
 *  @param array $columns
 *
 *  @return array
 */

function _my_nav_menu_columns( $columns = array() ) {
	$columns['popup_id'] = __( 'Popup', 'popup-maker' );
	return $columns;
}