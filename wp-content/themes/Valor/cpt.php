<?php

// Video Post type

add_action('init', 'video_register');

function video_register() {

	$labels = array(
		'name' => _x('Видео', 'post type general name'),
		'singular_name' => _x('Video', 'post type singular name'),
		'add_new' => _x('Добавить видео', 'video'),
		'add_new_item' => __('Добавить видео'),
		'edit_item' => __('Редактировать видео'),
		'new_item' => __('Новые видео'),
		'view_item' => __('Смотреть запись с видео'),
		'search_items' => __('Поиск видео'),
		'not_found' =>  __('Ничего не найдено'),
		'not_found_in_trash' => __('Ничего не найдено в корзине'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => null,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 

	register_post_type( 'video' , $args );
}


// Review Post type

add_action('init', 'review_register');

function review_register() {

	$labels = array(
		'name' => _x('Обзоры', 'post type general name'),
		'singular_name' => _x('Обзоры', 'post type singular name'),
		'add_new' => _x('Добавить', 'review'),
		'add_new_item' => __('Добавить обзор'),
		'edit_item' => __('Редактировать обзор'),
		'new_item' => __('Новый обзор'),
		'view_item' => __('Смотреть Обзор'),
		'search_items' => __('Поиск обзора'),
		'not_found' =>  __('Ничего не найдено'),
		'not_found_in_trash' => __('Ничего не найдено в корзине'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => null,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 

	register_post_type( 'review' , $args );
}



// Custom Taxonomy

function add_console_taxonomies() {

	register_taxonomy('console', 'review', array(
		// Hierarchical taxonomy (like categories)
		'hierarchical' => true,
		// This array of options controls the labels displayed in the WordPress Admin UI
		'labels' => array(
			'name' => _x( 'Рубрики', 'taxonomy general name' ),
			'singular_name' => _x( 'Рубрика', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search consoles' ),
			'all_items' => __( 'Все рубрики' ),
			'parent_item' => __( 'Parent Console' ),
			'parent_item_colon' => __( 'Parent Console:' ),
			'edit_item' => __( 'Edit Console' ),
			'update_item' => __( 'Update Console' ),
			'add_new_item' => __( 'Добавить новую рубрику' ),
			'new_item_name' => __( 'New Console Name' ),
			'menu_name' => __( 'Рубрики' ),
		),
		// Control the slugs used for this taxonomy
		'rewrite' => array(
			'slug' => 'console', // This controls the base slug that will display before each term
			'with_front' => false, // Don't display the category base before "/locations/"
			'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
		),
	));
}
add_action( 'init', 'add_console_taxonomies', 0 );

?>