<?php

function open_charity_preprocess_field(&$variables) {

  if ($variables['element']['#field_name'] == 'field_full_width_title') {
	  $variables['classes_array'][]="featured__title";

  }
}


function open_charity_field__field_full_width_text__full_width_image_block(&$variables) { 

	 $markup = $variables['element'][0]['#markup'];
	 $css_class = '';
	 switch($variables['element']['#view_mode']){
		 case 'full_width_featured':
			$css_class = "featured__text";
		 break;
	 }




}

function open_charity_field__field_column_items__3_col_grid(&$variables) { 
	 
	 $array_len = count($variables['element']['#items']);
	 $render_items = [];
	 for($i=0; $i<$array_len; $i++){
		 $render_items[] = array_values($variables['element'][$i]["entity"]["paragraphs_item"])[0];
		 
	 }
	 $render_arr = [];
	 $render_arr['items'] = $render_items;

	 
	 return $render_arr;

}

function open_charity_field__field_body_items__landing_page(&$variables) { 
	 
	 $array_len = count($variables['element']['#items']);
	 $render_items = [];
	 for($i=0; $i<$array_len; $i++){
		 $render_items[] = array_values($variables['element'][$i]["entity"]["paragraphs_item"])[0];
		 
	 }
	 $render_arr = [];
	 $render_arr['items'] = $render_items;

	 
	 return $render_arr;
}

function open_charity_css_alter(&$css) { 
   unset($css[drupal_get_path('module','system').'/system.menus.css']); 
}



