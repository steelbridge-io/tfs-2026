<?php

// Add image field to category add form
function add_category_image_field() {
 ?>
 <div class="form-field term-group">
	<label for="category-image-id"><?php _e('Category Image', 'textdomain'); ?></label>
	<input type="hidden" id="category-image-id" name="category-image-id" class="custom_media_url" value="">
	<div id="category-image-wrapper"></div>
	<p>
	 <input type="button" class="button button-secondary ct_tax_media_button" id="ct_tax_media_button" name="ct_tax_media_button" value="<?php _e('Add Image', 'textdomain'); ?>" />
	 <input type="button" class="button button-secondary ct_tax_media_remove" id="ct_tax_media_remove" name="ct_tax_media_remove" value="<?php _e('Remove Image', 'textdomain'); ?>" />
	</p>
 </div>
<?php
}
add_action('category_add_form_fields', 'add_category_image_field', 10, 2);

// Add image field to category edit form
function edit_category_image_field($term) {
 $image_id = get_term_meta($term->term_id, 'category-image-id', true);
 ?>
 <tr class="form-field term-group-wrap">
	<th scope="row">
	 <label for="category-image-id"><?php _e('Category Image', 'textdomain'); ?></label>
	</th>
	<td>
	 <input type="hidden" id="category-image-id" name="category-image-id" value="<?php echo $image_id; ?>">
	 <div id="category-image-wrapper">
<?php if($image_id) { ?>
<?php echo wp_get_attachment_image($image_id, 'medium'); ?>
<?php } ?>
	 </div>
	 <p>
		<input type="button" class="button button-secondary ct_tax_media_button" id="ct_tax_media_button" name="ct_tax_media_button" value="<?php _e('Add Image', 'textdomain'); ?>" />
		<input type="button" class="button button-secondary ct_tax_media_remove" id="ct_tax_media_remove" name="ct_tax_media_remove" value="<?php _e('Remove Image', 'textdomain'); ?>" />
	 </p>
	</td>
 </tr>
<?php
}
add_action('category_edit_form_fields', 'edit_category_image_field', 10, 2);

// Save category image
function save_category_image($term_id) {
 if(isset($_POST['category-image-id']) && '' !== $_POST['category-image-id']){
	add_term_meta($term_id, 'category-image-id', $_POST['category-image-id'], true);
 }
}
add_action('created_category', 'save_category_image', 10, 2);

// Update category image
function updated_category_image($term_id) {
 if(isset($_POST['category-image-id']) && '' !== $_POST['category-image-id']){
	update_term_meta($term_id, 'category-image-id', $_POST['category-image-id']);
 } else {
	update_term_meta($term_id, 'category-image-id', '');
 }
}
add_action('edited_category', 'updated_category_image', 10, 2);

// Add media uploader script
function category_image_script() {
 if (! isset($_GET['taxonomy']) || $_GET['taxonomy'] != 'category') {
	return;
 }
 ?>
 <script>
     jQuery(document).ready(function($) {
         var file_frame;

         $(document).on('click', '.ct_tax_media_button', function(event) {
             event.preventDefault();

             if (file_frame) {
                 file_frame.open();
                 return;
             }

             file_frame = wp.media.frames.file_frame = wp.media({
                 title: 'Select a image to upload',
                 button: {
                     text: 'Use this image',
                 },
                 multiple: false
             });

             file_frame.on('select', function() {
                 var attachment = file_frame.state().get('selection').first().toJSON();
                 $('#category-image-id').val(attachment.id);
                 $('#category-image-wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
                 $('#category-image-wrapper .custom_media_image').attr('src',attachment.url).css('display','block');
             });

             file_frame.open();
         });

         $(document).on('click', '.ct_tax_media_remove', function() {
             $('#category-image-id').val('');
             $('#category-image-wrapper').html('');
         });
     });
 </script>
<?php
}
add_action('admin_footer', 'category_image_script');