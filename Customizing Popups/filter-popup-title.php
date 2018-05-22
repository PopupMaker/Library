<?php

function customize_popup_title( $title, $popup_id ) {
    if ( $popup_id === 123 ) { 
         $title = '';  // Modify $title however you like for only popup 123.
    } 
​
    return $title;
}

add_filter( 'pum_popup_get_title', 'customize_popup_title' );
