<?php

add_action( 'init', 'prefix_schools_register_taxonomies' );
add_action( 'init', 'prefix_agencies_register_taxonomies' );

function prefix_agencies_register_taxonomies() {

	/* Register the Department Agency taxonomy. */

	register_taxonomy(
		'agency',
		array( 'department' ),
		array(
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_admin_column' => true,
			'hierarchical'      => true,
			'query_var'         => 'agency',

			/* Capabilities. */
			'capabilities' => array(
				'manage_terms' => 'manage_departments',
				'edit_terms'   => 'manage_departments',
				'delete_terms' => 'manage_departments',
				'assign_terms' => 'edit_departments',
			),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'         => 'agencies',
				'with_front'   => false,
				'hierarchical' => true,
				'ep_mask'      => EP_NONE
			),

			/* Labels used when displaying taxonomy and terms. */
			'labels' => array(
				'name'                       => __( 'Department Agencies',           'rcdoc' ),
				'singular_name'              => __( 'Department Agency',                'rcdoc' ),
				'menu_name'                  => __( 'Department Agencies',             'rcdoc' ),
				'name_admin_bar'             => __( 'Department Agency',               'rcdoc' ),
				'search_items'               => __( 'Search Department Agencies',      'rcdoc' ),
				'popular_items'              => __( 'Popular Department Agencies',     'rcdoc' ),
				'all_items'                  => __( 'All Department Agencies',         'rcdoc' ),
				'edit_item'                  => __( 'Edit Department Agency',          'rcdoc' ),
				'view_item'                  => __( 'View Department Agency',          'rcdoc' ),
				'update_item'                => __( 'Update Department Agency',        'rcdoc' ),
				'add_new_item'               => __( 'Add New Department Agency',       'rcdoc' ),
				'new_item_name'              => __( 'New Department Agency Name',      'rcdoc' ),
				'parent_item'                => __( 'Parent Department Agency',        'rcdoc' ),
				'parent_item_colon'          => __( 'Parent Department Agency:',       'rcdoc' ),
				'separate_items_with_commas' => null,
				'add_or_remove_items'        => null,
				'choose_from_most_used'      => null,
				'not_found'                  => null,
			)
		)
	);
}



function prefix_schools_register_taxonomies() {

	/* Register the School System taxonomy. */

	register_taxonomy(
		'school_system',
		array( 'school' ),
		array(
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_admin_column' => true,
			'hierarchical'      => true,
			'query_var'         => 'school_system',

			/* Capabilities. */
			'capabilities' => array(
				'manage_terms' => 'manage_schools',
				'edit_terms'   => 'manage_schools',
				'delete_terms' => 'manage_schools',
				'assign_terms' => 'edit_schools',
			),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'         => 'schools/system',
				'with_front'   => false,
				'hierarchical' => true,
				'ep_mask'      => EP_NONE
			),

			/* Labels used when displaying taxonomy and terms. */
			'labels' => array(
				'name'                       => __( 'School Systems',           'rcdoc' ),
				'singular_name'              => __( 'School System',            'rcdoc' ),
				'menu_name'                  => __( 'School Systems',             'rcdoc' ),
				'name_admin_bar'             => __( 'School System',               'rcdoc' ),
				'search_items'               => __( 'Search School Systems',      'rcdoc' ),
				'popular_items'              => __( 'Popular School Systems',     'rcdoc' ),
				'all_items'                  => __( 'All School Systems',         'rcdoc' ),
				'edit_item'                  => __( 'Edit School System',          'rcdoc' ),
				'view_item'                  => __( 'View School System',          'rcdoc' ),
				'update_item'                => __( 'Update School System',        'rcdoc' ),
				'add_new_item'               => __( 'Add New School System',       'rcdoc' ),
				'new_item_name'              => __( 'New School System Name',      'rcdoc' ),
				'parent_item'                => __( 'Parent School System',        'rcdoc' ),
				'parent_item_colon'          => __( 'Parent School System:',       'rcdoc' ),
				'separate_items_with_commas' => null,
				'add_or_remove_items'        => null,
				'choose_from_most_used'      => null,
				'not_found'                  => null,
			)
		)
	);
}
