<?php

/**
 * @file
 * Default theme implementation for a single paragraph item.
 *
 * Available variables:
 * - $content: An array of content items. Use render($content) to print them
 *   all, or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity
 *   - entity-paragraphs-item
 *   - paragraphs-item-{bundle}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened into
 *   a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<?php 

$className ="";
if(!empty($content['field_column_item_layout_style'])){
	switch($content['field_column_item_layout_style']['#items'][0]['value']){
		case 'style_get_involved':
			$className = "three-col-wrapper--get-involved";
			break;
		case 'style_our_mission':
			$className = "three-col-wrapper--our-mission";
			break;
		default:
			//dpm($content['field_column_item_layout_style']['#items'][0]['value']);
		
	}
	
	
	
}?>

<?php ?>
<div class="three-col-wrapper <?php print $className;?>">
<div class="three-col-wrapper__container">

	
	
	<?php if (!empty($content['field_3_col_title'])): ?>
	<h2 class="three-col-wrapper__title">
	<?php print render($content['field_3_col_title'][0]); 
	?>
	</h2>
	<?php endif ?>
	

			
	<?php if (!empty($content['field_3_col_header_text'])): ?>
	<div class="three-col-wrapper__body_text">
	<?php 
		print render($content['field_3_col_header_text'][0]);
			
	?>
	</div>
	<?php endif ?>
	
	<div class="three-col-wrapper__col_content ">
	<?php 
	
	if(!empty($content['field_column_items'])){
		print render($content['field_column_items']); 
	}
	
	
	?>
	</div>
	<?php 
	//print render($content); ?>
	</div>
</div>
