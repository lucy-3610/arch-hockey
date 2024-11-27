<?php
/*
Thunder Bolt 2 - Functions and Definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Add Column Support to Gravity Forms
@package Thunder_Bolt_2	
Updated Version: 1.0
*/

//***** Gravity Forms: 2 Column Filter ***//

function gform_column_splits($content, $field, $value, $lead_id, $form_id) {
	if(IS_ADMIN) return $content; // only modify HTML on the front end

	$form = RGFormsModel::get_form_meta($form_id, true);
	$form_class = array_key_exists('cssClass', $form) ? $form['cssClass'] : '';
	$form_classes = preg_split('/[\n\r\t ]+/', $form_class, -1, PREG_SPLIT_NO_EMPTY);
	$fields_class = array_key_exists('cssClass', $field) ? $field['cssClass'] : '';
	$field_classes = preg_split('/[\n\r\t ]+/', $fields_class, -1, PREG_SPLIT_NO_EMPTY);
	
	// multi-column form functionality
	if($field['type'] == 'section') {

		// check for the presence of multi-column form classes
		// these classes are on the forms
		$form_class_matches = array_intersect($form_classes, array('form_columns'));

		// check for the presence of section break column classes
		// check for section breaks with the correct class
		$field_class_matches = array_intersect($field_classes, array('gform_column'));

		// if field is a column break in a multi-column form, perform the list split
		if(!empty($form_class_matches) && !empty($field_class_matches)) { // make sure to target only multi-column forms

			// retrieve the form's field list classes for consistency
			$ul_classes = GFCommon::get_ul_classes($form).' '.$field['cssClass'];

			// close current field's li and ul and begin a new list with the same form field list classes
			return '</li></ul><ul class="'.$ul_classes.'"><li class="gfield gsection empty">';

		}
	}

	return $content;
}
add_filter('gform_field_content', 'gform_column_splits', 10, 5);