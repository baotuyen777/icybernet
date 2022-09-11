<?php
/**
 * Adding Image Field
 * @return void
 */
function category_add_image( $term ) {

    ?>
    <div class="form-field">
        <label for="taxImage"><?php _e( 'Image', 'david' ); ?></label>

        <input type="text" name="taxImage" id="taxImage" value="">
    </div>
    <?php
}
add_action( 'category_add_form_fields', 'category_add_image', 10, 2 );