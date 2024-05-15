<?php

// Personer

add_action('init', 'person_create_posttype_person');

function person_create_posttype_person() {
	register_post_type(
		'person',
		array(
			'labels' => array(
				'name' => __('Personer', 'websepeed-personer-domain'),
				'singular_name' => __('Person', 'websepeed-personer-domain'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-businessman',
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'page-attributes',
			),
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'person',
			),
		)
	);

}

function person_posttype_function() {
	webspeed_person_create_posttype_person();
}

register_activation_hook(__FILE__, 'person_posttype_function');