<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/docs/define-meta-boxes
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'WTF_';

global $meta_boxes;

$meta_boxes = array();

// 1st meta box
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box
	'id' => 'review_info',

	// Meta box title - Will appear at the drag and drop handle bar
	'title' => 'Review details',

	// Post types, accept custom post types as well - DEFAULT is array('post'); (optional)
	'pages' => array( 'review' ),

	// Where the meta box appear: normal (default), advanced, side; optional
	'context' => 'normal',

	// Order of meta box: high (default), low; optional
	'priority' => 'high',

	// List of meta fields
	'fields' => array(
		// TEXT
	array(
			'name'		=> 'Gameplay',
			'id'		=> "{$prefix}gameplay",
			'type'		=> 'select',
			// Array of 'key' => 'value' pairs for select box
			'options'	=> array(
				'1'		=> 'Один',
				'2'		=> 'Два',
				'3'		=> 'Три',
				'4'		=> 'Четыре',		
				'5'		=> 'Пять',
				'6'		=> 'Шесть',		
				'7'		=> 'Семь',
				'8'		=> 'Восемь',		
				'9'		=> 'Девять',
				'10'	=> 'Десять'
								
			),
			// Default value, can be string (single value) or array (for both single and multiple values)
			'std'		=> array( '5' ),
			'desc'		=> 'Укажите оценку gameplay'
		),
		
	
	array(
			'name'		=> 'Графика',
			'id'		=> "{$prefix}graphics",
			'type'		=> 'select',
			// Array of 'key' => 'value' pairs for select box
			'options'	=> array(
				'1'		=> 'Один',
				'2'		=> 'Два',
				'3'		=> 'Три',
				'4'		=> 'Четыре',		
				'5'		=> 'Пять',
				'6'		=> 'Шесть',		
				'7'		=> 'Семь',
				'8'		=> 'Восемь',		
				'9'		=> 'Девять',
				'10'	=> 'Десять'
								
			),
			// Default value, can be string (single value) or array (for both single and multiple values)
			'std'		=> array( '5' ),
			'desc'		=> 'Укажите оценку графики'
		),
		
	array(
			'name'		=> 'Звук',
			'id'		=> "{$prefix}audio",
			'type'		=> 'select',
			// Array of 'key' => 'value' pairs for select box
			'options'	=> array(
				'1'		=> 'Один',
				'2'		=> 'Два',
				'3'		=> 'Три',
				'4'		=> 'Четыре',		
				'5'		=> 'Пять',
				'6'		=> 'Шесть',		
				'7'		=> 'Семь',
				'8'		=> 'Восемь',		
				'9'		=> 'Девять',
				'10'	=> 'Десять'
								
			),
			// Default value, can be string (single value) or array (for both single and multiple values)
			'std'		=> array( '5' ),
			'desc'		=> 'Укажите оценку звука'
		),
		
	array(
			'name'		=> 'В целом',
			'id'		=> "{$prefix}overall",
			'type'		=> 'select',
			// Array of 'key' => 'value' pairs for select box
			'options'	=> array(
				'1'		=> 'Один',
				'2'		=> 'Два',
				'3'		=> 'Три',
				'4'		=> 'Четыре',		
				'5'		=> 'Пять',
				'6'		=> 'Шесть',		
				'7'		=> 'Семь',
				'8'		=> 'Восемь',		
				'9'		=> 'Девять',
				'10'	=> 'Десять'
								
			),
			// Default value, can be string (single value) or array (for both single and multiple values)
			'std'		=> array( '5' ),
			'desc'		=> 'Укажите общую оценку'
		)		
		
	)
);


// 2nd meta box
$meta_boxes[] = array(
	'id'		=> 'video_info',
	'title'		=> 'Информация о видео',
	'pages'		=> array( 'video' ),

	'fields'	=> array(
		// TEXTAREA
		array(
			'name'		=> 'Видео-код для вставки',
			'desc'		=> "Введите код для вставки видео, например с YouTube",
			'id'		=> "{$prefix}embed",
			'type'		=> 'textarea',
			'cols'		=> "40",
			'rows'		=> "8"
		)
	)
);






/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'YOUR_PREFIX_register_meta_boxes' );