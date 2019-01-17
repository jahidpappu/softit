<?php 



add_action('cmb2_admin_init', 'custom_metaboxes');

function custom_metaboxes(){

	$metabox = new_cmb2_box(array(
		'object_types' => array('post'),
		'title' => 'Additional Fields',
		'id' => 'additional-fields'
	));

	$metabox->add_field(array(
		'name' => 'Subtitle',
		'id' => 'subtitle',
		'type' => 'text',
		'default' => 'this is the subtitle',
		'desc' => 'this will add subtitle below title'
	));

	$metabox->add_field(array(
		'name' => 'Sub Description',
		'id' => 'sub-description',
		'type' => 'wysiwyg',
		'options' => array(
			'wpautop' => true,
			'textarea_rows' => get_option('default_post_edit_rows', 2)
		)
	));




	$arekta = new_cmb2_box(array(
		'id' => 'arekta',
		'object_types' => array('basic-testimonials'),
		'title' => 'Additional Fields'
	));

	$arekta->add_field(array(
		'id' => 'designation',
		'type' => 'text',
		'name' => 'Designation'
	));

	$arekta->add_field(array(
		'id' => 'motamot',
		'type' => 'wysiwyg',
		'name' => 'Montobbo',
		'options' => array(
			'textarea_rows' => get_option('default_post_edit_rows', 4)
		)
	));




}