<?php
/**
 * Enqueue scripts and styles.
 */
function base_scripts() {

    wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.css');

}
add_action( 'wp_enqueue_scripts', 'base_scripts' );


/**
 * Register custom post types
 */
function create_post_types() {

	register_post_type( 'Products',
		array(
			'labels' => array(
				'name' => __( 'Products' ),
				'singular_name' => __( 'Product' )
			),
		'public' => true,
		'publicly_queryable' => true,
        'show_in_rest' => true,
		'has_archive' => true,
		'show_in_menu' => true,
		'hierarchical' => true,
        'menu_icon' =>  'dashicons-products',
		'rewrite' => array( 'slug' => 'products', 'with_front' => false ),
		)
	);

}
add_action( 'init', 'create_post_types' );