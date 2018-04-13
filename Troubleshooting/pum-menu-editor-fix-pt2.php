<?php

add_action( 'wp_nav_menu_item_custom_fields', '_my_custom_nav_menu_fields', 10, 4 );
/**
 *  Add custom fields to WordPress navigation menu
 *
 *  @since 1.0.0
 *
 *  @param $item_id
 *  @param $item        object
 *  @param $depth
 *  @param $args
 *
 * @return void
 */
function _my_custom_nav_menu_fields( $item_id, $item, $depth, $args ) {
	wp_nonce_field( 'pum-menu-editor-nonce', 'pum-menu-editor-nonce' ); ?>

	<p class="field-popup_id  description  description-wide">

		<label for="edit-menu-item-popup_id-<?php echo $item->ID; ?>">
			<?php _e( 'Trigger a Popup', 'popup-maker' ); ?><br />

			<select name="menu-item-pum[<?php echo $item->ID; ?>][popup_id]" id="edit-menu-item-popup_id-<?php echo $item->ID; ?>" class="widefat  edit-menu-item-popup_id">
				<option value=""></option>
				<?php foreach ( PUM_Modules_Menu::popup_list() as $option => $label ) : ?>
					<option value="<?php echo $option; ?>" <?php selected( $option, $item->popup_id ); ?>>
						<?php echo esc_html( $label ); ?>
					</option>
				<?php endforeach; ?>
			</select>

			<span class="description"><?php _e( 'Choose a popup to trigger when this item is clicked.', 'popup-maker' ); ?></span>
		</label>

	</p>

	<?php
}