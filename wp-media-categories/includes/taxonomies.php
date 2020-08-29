<?php

/**
 * Media Categories Taxonomies
 *
 * @package Media/Categories/Taxonomies
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Register media taxonomies
 *
 * @since 0.1.0
 */
function wp_media_categories_register_media_taxonomy() {
	$labels = array(
		'name'              => _x( 'Categories', 		'Taxonomy General Name', 'wp-media-categories' ),
		'singular_name'     => _x( 'Category', 			'Taxonomy Singular Name', 'wp-media-categories' ),
		'menu_name'			=> __( 'Categories',        'wp-media-categories' ),
		'all_items'			=> __( 'All Categories',    'wp-media-categories' ),
		'edit_item'			=> __( 'Edit Category',     'wp-media-categories' ),
		'view_item'			=> __( 'View Category',     'wp-media-categories' ),
		'update_item'		=> __( 'Update Category',   'wp-media-categories' ),
		'add_new_item'		=> __( 'Add New Category',  'wp-media-categories' ),
		'new_item_name'		=> __( 'New Category Name', 'wp-media-categories' ),
		'parent_item'		=> __( 'Parent Category',   'wp-media-categories' ),
		'parent_item_colon'	=> __( 'Parent Category:',  'wp-media-categories' ),
		'search_items'		=> __( 'Search Categories', 'wp-media-categories' )
	);

	$rewrite = array(
		'with_front'   => false,
		'heirarchical' => true,
		'slug'         => 'media-category'
	);

	$args = array(
		'labels'                => $labels,
		'rewrite' 				=> $rewrite,
		'hierarchical'			=> true,
		'show_ui'				=> true,
		'show_admin_column'		=> true,
		'public'				=> true,
		'show_in_nav_menus'		=> false,
		'query_var'				=> true,
		'update_count_callback'	=> 'wp_media_categories_update_count_callback',
		'show_in_rest'          => true,
		'rest_base'             => 'media-categories',
	);

	register_taxonomy( 'media_category', array( 'attachment' ), apply_filters( 'wp_media_categories_taxonomy_args', $args ) );
}
