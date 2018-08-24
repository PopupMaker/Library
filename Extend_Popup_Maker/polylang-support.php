<?php

/**
 * Conditions are applied to popups based on the current page being viewing.
 *
 * Ex. Show Popup if the current page is ____ (AND/OR) ____
 *
 * All Conditions should return false by default AND only true if 100% matched.
 *
 * As a general rule of thumb when labeling your conditions,labels should
 * represent a true result by default.
 *
 * Ex. Labeling `is_admin` as `Not on admin`, would be confusing, instead label
 * it `On Admin` and use the negative button `(!)` when adding the condition to
 * your popup.
 *
 * If your condition needs additional information, such as selecting a specific
 * language, page, category for instance, you can use the 'fields' key to define
 * these extra options easily.
 *
 * Take the following example.
 *
 * The `pll_current_language( $lang )` function accepts a string lang to check
 * and returns true if the current page matches.
 *
 * To give it a little flexibility, we are going to allow multiple languages per
 * popup. This requires us to write a new function that will check each language
 * selected and return true if any match the current page.
 *
 * The extra field will also have select2 enabled making it a smart select box.
 *
 * Now when using this condition you will get an additional seclectbox
 * showing the available languages.
 */
add_filter( 'pum_get_conditions', 'pum_polylang_conditions' );
/*
 * Set a custom condition to check for use of a selected language.
 *
 * @since 1.0.0
 *
 * @param array $conditions An array to set the default condition
 * @return array
 */
function pum_polylang_conditions( $conditions ) {
	return array_merge( $conditions, array(
		'page_lang_selected' => array(
			'group'    => __( 'Pages' ),
			'name'     => __( 'Has Language: Selected' ),
			'callback' => 'pum_check_lang',
			'fields'   => array(
				'selected' => array(
					'placeholder' => __( 'Select Languages' ),
					'type'        => 'select',
					'multiple'    => true,
					'select2'     => true,
					'as_array'    => true,
					'options'     => pum_lang_options(),
				),
			),
		),
	) );
}


/**
 * Returns true if the current page has the selected language
 *
 * @param $settings
 *
 * @return bool
 */
function pum_check_lang( $settings ) {

	// Always return true if the polylang plugin & function isn't loaded.
	if ( ! function_exists( 'pll_current_language' ) ) {
		return true;
	}

	// Static caching of a reusable value.
	static $lang = null;
	// Static caching of a reusable value.
	if ( $lang === null ) {
		$lang = pll_current_language( 'slug' );
	}

	// Sanity check to make sure that the 'selected' key is a valid array.
	if ( ! isset( $settings['selected'] ) || ! is_array( $settings['selected'] ) ) {
		$settings['selected'] = array();
	}

	// Check each selected language against the
	foreach ( $settings['selected'] as $check ) {

		// If the selected language matches return true.
		if ( $lang == $check ) {
			return true;
		}

	}

	// If no languages matched, return false.
	return false;
}

/**
 * Returns an option list of all available languages.
 *
 * Uses static cached variable to prevent multiple query hits.
 *
 * @return array Cached list of languages.
 */
function pum_lang_options() {
	global $polylang;

	// Static caching of a reusable value.
	static $langs = null;

	// Prime empty cached value.
	if ( $langs === null ) {
		$langs = array();

		if ( ! empty( $polylang ) && method_exists( $polylang, 'get_languages_list' ) ) {

			$languages = $polylang->get_languages_list();

			foreach ( $languages as $lang ) {
				$langs[ $lang->name ] = $lang->slug;
			}

		} else if ( function_exists( 'pll_the_languages' ) ) {
			foreach ( pll_the_languages( array( 'raw' => 1 ) ) as $lang ) {
				$langs[ $lang['name'] ] = $lang['slug'];
			}
		}
	}

	// Return the cached value.
	return $langs;
}
