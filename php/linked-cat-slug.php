<?php
add_action ( 'category_edit_form_fields', function( $tag ){
  $linked_slug = get_term_meta( $tag->term_id, '_linked_slug', true ); ?>
  <tr class='form-field'>
      <th scope='row'><label for='cat_page_title'><?php _e('Slug for linked language category'); ?></label></th>
      <td>
          <input type='text' name='linked_slug' id='linked_slug' value='<?php echo $linked_slug ?>'>
          <p class='description'><?php _e('Slug for linked category'); ?></p>
      </td>
  </tr> <?php
});
add_action ( 'edited_category', function( $term_id ) {
  if ( isset( $_POST['linked_slug'] ) )
      update_term_meta( $term_id , '_linked_slug', $_POST['linked_slug'] );
});