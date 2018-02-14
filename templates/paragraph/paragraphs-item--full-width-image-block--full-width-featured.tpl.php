<?php

/**
 * @file
 * Default theme implementation for paragraph items.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) field collection item label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-field-collection-item
 *   - field-collection-item-{field_name}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
    <?php
	
	$THUMBNAIL_STYLE = $content['field_full_width_image'][0]['#image_style'];
	$file_uri = $content['field_full_width_image'][0]['#item']['uri'];
	
	$default_thumbnail = file_create_url($file_uri);
	if(!empty($THUMBNAIL_STYLE)){
		$default_thumbnail = image_style_url($THUMBNAIL_STYLE, $file_uri);
	
	}
	unset($content['field_full_width_image']);
	$content['field_full_width_title']['#attributes'] = array(
		'class' => array("featured__title"),
	);
	//dpm($content);

?>
<div class="featured" style="background-image:url('<?php print $default_thumbnail; ?>');" <?php print $content_attributes; ?>>

<div class="featured__content">
	<h2 class="featured__title">
		<?php print render($content['field_full_width_title'][0]['#markup']); ?>
	</h2>
	<div class="featured__text">
		<?php print render($content['field_full_width_text'][0]['#markup']); ?>
	</div>
</div>

</div>
