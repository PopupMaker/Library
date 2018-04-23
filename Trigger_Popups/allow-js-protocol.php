<?php

// Copy everything below this line //
add_filter( 'kses_allowed_protocols', 'my_allowed_protocols' );
/**
 *  Description
 *
 *  @since 1.0.0
 *
 *  @param $protocols
 *
 *  @return array
 */
function my_allowed_protocols ( $protocols ) {
	$protocols[] = "javascript";
	return $protocols;
}