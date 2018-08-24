<?php

/**
 * Targeting conditions are applied to popups based on the current page being viewed.
 *
 * Ex. Show Popup if the current page is ____ (AND/OR) ____
 *
 * By default, all Conditions should return false AND only return true if 100% matched.
 *
 * As a general rule of thumb when labeling conditions, labels should
 * represent a true result by default.
 *
 * Ex. Labeling `is_admin` as `Not on admin` would be confusing. Instead label
 * the condition `On Admin` and use the negative button `(!)` when adding the condition to
 * your popup.
 *
 * Take the following example.
 *
 * We want to show a popup when a password protected page is _unlocked_.
 * The condition 'post_password_required' would then return false (the page is unlocked).
 * It is the only existing function to do so. Rather then create a condition
 * "Password Protected: Unlocked", we set the default state to _locked_. The function
 * checks for a locked condition.
 *
 * To set the inverse (opposite) condition of 'post locked', click the (!) icon to the
 * left of the condition field. Now the condition checks for NOT 'post_locked'.
 */

add_filter( 'pum_get_conditions', 'pum_password_page_conditions' );
/*
 * Set a custom condition for password page locked.
 *
 * @since 1.0.0.
 *
 * @param array $conditions An array to set the default condition
 * @return array
 */
function pum_password_page_conditions( $conditions ) {
	return array_merge( $conditions, array(
		'password_page_unlocked' => array(
			'group'    => __( 'Pages' ),
			// Can match any existing group.
			'name'     => __( 'Password Protected: Locked' ),
			// Label to identify it in the list
			'callback' => 'post_password_required',
			// Where the magic happens we will call post_password_required() in this case.
		),
	) );
}
