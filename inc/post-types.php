<?php

add_action( 'init', 'doc_archives_register_post_types' );
add_action( 'init', 'doc_developments_register_post_types' );
add_action( 'init', 'doc_hispanic_ministries_register_post_types' );
add_action( 'init', 'doc_info_techs_register_post_types' );
add_action( 'init', 'doc_chancerys_register_post_types' );
add_action( 'init', 'doc_finances_register_post_types' );
add_action( 'init', 'doc_housings_register_post_types' );
add_action( 'init', 'doc_liturgys_register_post_types' );
add_action( 'init', 'doc_plannings_register_post_types' );
add_action( 'init', 'doc_properties_register_post_types' );
add_action( 'init', 'doc_schools_register_post_types' );
add_action( 'init', 'doc_tribunals_register_post_types' );
add_action( 'init', 'doc_vocations_register_post_types' );




function doc_vocations_register_post_types() {

	register_post_type(
		'vocation',
		array(
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => false,
			'show_in_admin_bar'   => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-businessman',
			'can_export'          => true,
			'delete_with_user'    => false,
			'hierarchical'        => false,
			'has_archive'         => 'vocations',
			'query_var'           => 'vocation',
			'capability_type'     => 'post',
			// 'map_meta_cap'        => true,
            //
			// /* Capabilities. */
			// 'capabilities' => array(
            //
			// 	// meta caps (don't assign these to roles)
			// 	'edit_post'              => 'edit_vocation',
			// 	'read_post'              => 'read_vocation',
			// 	'delete_post'            => 'delete_vocation',
            //
			// 	// primitive/meta caps
			// 	'create_posts'           => 'create_vocations',
            //
			// 	// primitive caps used outside of map_meta_cap()
			// 	'edit_posts'             => 'edit_vocations',
			// 	'edit_others_posts'      => 'manage_vocations',
			// 	'publish_posts'          => 'manage_vocations',
			// 	'read_private_posts'     => 'read',
            //
			// 	// primitive caps used inside of map_meta_cap()
			// 	'read'                   => 'read',
			// 	'delete_posts'           => 'manage_vocations',
			// 	'delete_private_posts'   => 'manage_vocations',
			// 	'delete_published_posts' => 'manage_vocations',
			// 	'delete_others_posts'    => 'manage_vocations',
			// 	'edit_private_posts'     => 'edit_vocations',
			// 	'edit_published_posts'   => 'edit_vocations'
			// ),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'       => 'vocations',
				'with_front' => false,
				'pages'      => true,
				'feeds'      => true,
				'ep_mask'    => EP_PERMALINK,
			),

			/* What features the post type supports. */
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
                'post-formats'
			),

			/* Labels used when displaying the posts. */
			'labels' => array(
				'name'               => __( 'Vocations',                   'rcdoc' ),
				'singular_name'      => __( 'Vocation',                    'rcdoc' ),
				'menu_name'          => __( 'Vocations',                   'rcdoc' ),
				'name_admin_bar'     => __( 'Vocation',                    'rcdoc' ),
				'add_new'            => __( 'Add New',                        'rcdoc' ),
				'add_new_item'       => __( 'Add New Vocation',            'rcdoc' ),
				'edit_item'          => __( 'Edit Vocation',               'rcdoc' ),
				'new_item'           => __( 'New Vocation',                'rcdoc' ),
				'view_item'          => __( 'View Vocation',               'rcdoc' ),
				'search_items'       => __( 'Search Vocations',            'rcdoc' ),
				'not_found'          => __( 'No vocations found',          'rcdoc' ),
				'not_found_in_trash' => __( 'No vocations found in trash', 'rcdoc' ),
				'all_items'          => __( 'Vocations',                   'rcdoc' ),
			)
		)
	);
}



function doc_tribunals_register_post_types() {

	register_post_type(
		'tribunal',
		array(
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-analytics',
			'can_export'          => true,
			'delete_with_user'    => false,
			'hierarchical'        => false,
			'has_archive'         => 'tribunals',
			'query_var'           => 'tribunal',
			'capability_type'     => 'post',
			// 'map_meta_cap'        => true,
            //
			// /* Capabilities. */
			// 'capabilities' => array(
            //
			// 	// meta caps (don't assign these to roles)
			// 	'edit_post'              => 'edit_tribunal',
			// 	'read_post'              => 'read_tribunal',
			// 	'delete_post'            => 'delete_tribunal',
            //
			// 	// primitive/meta caps
			// 	'create_posts'           => 'create_tribunals',
            //
			// 	// primitive caps used outside of map_meta_cap()
			// 	'edit_posts'             => 'edit_tribunals',
			// 	'edit_others_posts'      => 'manage_tribunals',
			// 	'publish_posts'          => 'manage_tribunals',
			// 	'read_private_posts'     => 'read',
            //
			// 	// primitive caps used inside of map_meta_cap()
			// 	'read'                   => 'read',
			// 	'delete_posts'           => 'manage_tribunals',
			// 	'delete_private_posts'   => 'manage_tribunals',
			// 	'delete_published_posts' => 'manage_tribunals',
			// 	'delete_others_posts'    => 'manage_tribunals',
			// 	'edit_private_posts'     => 'edit_tribunals',
			// 	'edit_published_posts'   => 'edit_tribunals'
			// ),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'       => 'tribunals',
				'with_front' => false,
				'pages'      => true,
				'feeds'      => true,
				'ep_mask'    => EP_PERMALINK,
			),

			/* What features the post type supports. */
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
                'post-formats'
			),

			/* Labels used when displaying the posts. */
			'labels' => array(
				'name'               => __( 'Tribunals',                   'rcdoc' ),
				'singular_name'      => __( 'Tribunal',                    'rcdoc' ),
				'menu_name'          => __( 'Tribunals',                   'rcdoc' ),
				'name_admin_bar'     => __( 'Tribunal',                    'rcdoc' ),
				'add_new'            => __( 'Add New',                        'rcdoc' ),
				'add_new_item'       => __( 'Add New Tribunal',            'rcdoc' ),
				'edit_item'          => __( 'Edit Tribunal',               'rcdoc' ),
				'new_item'           => __( 'New Tribunal',                'rcdoc' ),
				'view_item'          => __( 'View Tribunal',               'rcdoc' ),
				'search_items'       => __( 'Search Tribunals',            'rcdoc' ),
				'not_found'          => __( 'No tribunals found',          'rcdoc' ),
				'not_found_in_trash' => __( 'No tribunals found in trash', 'rcdoc' ),
				'all_items'          => __( 'Tribunals',                   'rcdoc' ),
			)
		)
	);
}



function doc_schools_register_post_types() {

	register_post_type(
		'school',
		array(
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => false,
			'show_in_admin_bar'   => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-welcome-learn-more',
			'can_export'          => true,
			'delete_with_user'    => false,
			'hierarchical'        => false,
			'has_archive'         => 'schools',
			'query_var'           => 'school',
			'capability_type'     => 'post',
			// 'map_meta_cap'        => true,
            //
			// /* Capabilities. */
			// 'capabilities' => array(
            //
			// 	// meta caps (don't assign these to roles)
			// 	'edit_post'              => 'edit_school',
			// 	'read_post'              => 'read_school',
			// 	'delete_post'            => 'delete_school',
            //
			// 	// primitive/meta caps
			// 	'create_posts'           => 'create_schools',
            //
			// 	// primitive caps used outside of map_meta_cap()
			// 	'edit_posts'             => 'edit_schools',
			// 	'edit_others_posts'      => 'manage_schools',
			// 	'publish_posts'          => 'manage_schools',
			// 	'read_private_posts'     => 'read',
            //
			// 	// primitive caps used inside of map_meta_cap()
			// 	'read'                   => 'read',
			// 	'delete_posts'           => 'manage_schools',
			// 	'delete_private_posts'   => 'manage_schools',
			// 	'delete_published_posts' => 'manage_schools',
			// 	'delete_others_posts'    => 'manage_schools',
			// 	'edit_private_posts'     => 'edit_schools',
			// 	'edit_published_posts'   => 'edit_schools'
			// ),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'       => 'schools',
				'with_front' => false,
				'pages'      => true,
				'feeds'      => true,
				'ep_mask'    => EP_PERMALINK,
			),

			/* What features the post type supports. */
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
                'post-formats'
			),

			/* Labels used when displaying the posts. */
			'labels' => array(
				'name'               => __( 'Schools',                   'rcdoc' ),
				'singular_name'      => __( 'School',                    'rcdoc' ),
				'menu_name'          => __( 'Schools',                   'rcdoc' ),
				'name_admin_bar'     => __( 'School',                    'rcdoc' ),
				'add_new'            => __( 'Add New',                        'rcdoc' ),
				'add_new_item'       => __( 'Add New School',            'rcdoc' ),
				'edit_item'          => __( 'Edit School',               'rcdoc' ),
				'new_item'           => __( 'New School',                'rcdoc' ),
				'view_item'          => __( 'View School',               'rcdoc' ),
				'search_items'       => __( 'Search Schools',            'rcdoc' ),
				'not_found'          => __( 'No schools found',          'rcdoc' ),
				'not_found_in_trash' => __( 'No schools found in trash', 'rcdoc' ),
				'all_items'          => __( 'Schools',                   'rcdoc' ),
			)
		)
	);
}



function doc_properties_register_post_types() {

	register_post_type(
		'property',
		array(
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => false,
			'show_in_admin_bar'   => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-building',
			'can_export'          => true,
			'delete_with_user'    => false,
			'hierarchical'        => false,
			'has_archive'         => 'properties',
			'query_var'           => 'property',
			'capability_type'     => 'post',
			// 'map_meta_cap'        => true,
            //
			// /* Capabilities. */
			// 'capabilities' => array(
            //
			// 	// meta caps (don't assign these to roles)
			// 	'edit_post'              => 'edit_property',
			// 	'read_post'              => 'read_property',
			// 	'delete_post'            => 'delete_property',
            //
			// 	// primitive/meta caps
			// 	'create_posts'           => 'create_properties',
            //
			// 	// primitive caps used outside of map_meta_cap()
			// 	'edit_posts'             => 'edit_properties',
			// 	'edit_others_posts'      => 'manage_properties',
			// 	'publish_posts'          => 'manage_properties',
			// 	'read_private_posts'     => 'read',
            //
			// 	// primitive caps used inside of map_meta_cap()
			// 	'read'                   => 'read',
			// 	'delete_posts'           => 'manage_properties',
			// 	'delete_private_posts'   => 'manage_properties',
			// 	'delete_published_posts' => 'manage_properties',
			// 	'delete_others_posts'    => 'manage_properties',
			// 	'edit_private_posts'     => 'edit_properties',
			// 	'edit_published_posts'   => 'edit_properties'
			// ),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'       => 'properties',
				'with_front' => false,
				'pages'      => true,
				'feeds'      => true,
				'ep_mask'    => EP_PERMALINK,
			),

			/* What features the post type supports. */
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
                'post-formats'
			),

			/* Labels used when displaying the posts. */
			'labels' => array(
				'name'               => __( 'Properties',                   'rcdoc' ),
				'singular_name'      => __( 'Property',                    'rcdoc' ),
				'menu_name'          => __( 'Properties',                   'rcdoc' ),
				'name_admin_bar'     => __( 'Property',                    'rcdoc' ),
				'add_new'            => __( 'Add New',                        'rcdoc' ),
				'add_new_item'       => __( 'Add New Property',            'rcdoc' ),
				'edit_item'          => __( 'Edit Property',               'rcdoc' ),
				'new_item'           => __( 'New Property',                'rcdoc' ),
				'view_item'          => __( 'View Property',               'rcdoc' ),
				'search_items'       => __( 'Search Properties',            'rcdoc' ),
				'not_found'          => __( 'No properties found',          'rcdoc' ),
				'not_found_in_trash' => __( 'No properties found in trash', 'rcdoc' ),
				'all_items'          => __( 'Properties',                   'rcdoc' ),
			)
		)
	);
}



function doc_plannings_register_post_types() {

	register_post_type(
		'planning',
		array(
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => false,
			'show_in_admin_bar'   => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-networking',
			'can_export'          => true,
			'delete_with_user'    => false,
			'hierarchical'        => false,
			'has_archive'         => 'plannings',
			'query_var'           => 'planning',
			'capability_type'     => 'post',
			// 'map_meta_cap'        => true,
            //
			// /* Capabilities. */
			// 'capabilities' => array(
            //
			// 	// meta caps (don't assign these to roles)
			// 	'edit_post'              => 'edit_planning',
			// 	'read_post'              => 'read_planning',
			// 	'delete_post'            => 'delete_planning',
            //
			// 	// primitive/meta caps
			// 	'create_posts'           => 'create_plannings',
            //
			// 	// primitive caps used outside of map_meta_cap()
			// 	'edit_posts'             => 'edit_plannings',
			// 	'edit_others_posts'      => 'manage_plannings',
			// 	'publish_posts'          => 'manage_plannings',
			// 	'read_private_posts'     => 'read',
            //
			// 	// primitive caps used inside of map_meta_cap()
			// 	'read'                   => 'read',
			// 	'delete_posts'           => 'manage_plannings',
			// 	'delete_private_posts'   => 'manage_plannings',
			// 	'delete_published_posts' => 'manage_plannings',
			// 	'delete_others_posts'    => 'manage_plannings',
			// 	'edit_private_posts'     => 'edit_plannings',
			// 	'edit_published_posts'   => 'edit_plannings'
			// ),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'       => 'plannings',
				'with_front' => false,
				'pages'      => true,
				'feeds'      => true,
				'ep_mask'    => EP_PERMALINK,
			),

			/* What features the post type supports. */
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
                'post-formats'
			),

			/* Labels used when displaying the posts. */
			'labels' => array(
				'name'               => __( 'Plannings',                   'rcdoc' ),
				'singular_name'      => __( 'Planning',                    'rcdoc' ),
				'menu_name'          => __( 'Plannings',                   'rcdoc' ),
				'name_admin_bar'     => __( 'Planning',                    'rcdoc' ),
				'add_new'            => __( 'Add New',                        'rcdoc' ),
				'add_new_item'       => __( 'Add New Planning',            'rcdoc' ),
				'edit_item'          => __( 'Edit Planning',               'rcdoc' ),
				'new_item'           => __( 'New Planning',                'rcdoc' ),
				'view_item'          => __( 'View Planning',               'rcdoc' ),
				'search_items'       => __( 'Search Plannings',            'rcdoc' ),
				'not_found'          => __( 'No plannings found',          'rcdoc' ),
				'not_found_in_trash' => __( 'No plannings found in trash', 'rcdoc' ),
				'all_items'          => __( 'Plannings',                   'rcdoc' ),
			)
		)
	);
}



function doc_liturgys_register_post_types() {

	register_post_type(
		'liturgy',
		array(
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => false,
			'show_in_admin_bar'   => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-book',
			'can_export'          => true,
			'delete_with_user'    => false,
			'hierarchical'        => false,
			'has_archive'         => 'liturgys',
			'query_var'           => 'liturgy',
			'capability_type'     => 'post',
			// 'map_meta_cap'        => true,
            //
			// /* Capabilities. */
			// 'capabilities' => array(
            //
			// 	// meta caps (don't assign these to roles)
			// 	'edit_post'              => 'edit_liturgy',
			// 	'read_post'              => 'read_liturgy',
			// 	'delete_post'            => 'delete_liturgy',
            //
			// 	// primitive/meta caps
			// 	'create_posts'           => 'create_liturgys',
            //
			// 	// primitive caps used outside of map_meta_cap()
			// 	'edit_posts'             => 'edit_liturgys',
			// 	'edit_others_posts'      => 'manage_liturgys',
			// 	'publish_posts'          => 'manage_liturgys',
			// 	'read_private_posts'     => 'read',
            //
			// 	// primitive caps used inside of map_meta_cap()
			// 	'read'                   => 'read',
			// 	'delete_posts'           => 'manage_liturgys',
			// 	'delete_private_posts'   => 'manage_liturgys',
			// 	'delete_published_posts' => 'manage_liturgys',
			// 	'delete_others_posts'    => 'manage_liturgys',
			// 	'edit_private_posts'     => 'edit_liturgys',
			// 	'edit_published_posts'   => 'edit_liturgys'
			// ),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'       => 'liturgys',
				'with_front' => false,
				'pages'      => true,
				'feeds'      => true,
				'ep_mask'    => EP_PERMALINK,
			),

			/* What features the post type supports. */
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
                'post-formats'
			),

			/* Labels used when displaying the posts. */
			'labels' => array(
				'name'               => __( 'Liturgys',                   'rcdoc' ),
				'singular_name'      => __( 'Liturgy',                    'rcdoc' ),
				'menu_name'          => __( 'Liturgys',                   'rcdoc' ),
				'name_admin_bar'     => __( 'Liturgy',                    'rcdoc' ),
				'add_new'            => __( 'Add New',                        'rcdoc' ),
				'add_new_item'       => __( 'Add New Liturgy',            'rcdoc' ),
				'edit_item'          => __( 'Edit Liturgy',               'rcdoc' ),
				'new_item'           => __( 'New Liturgy',                'rcdoc' ),
				'view_item'          => __( 'View Liturgy',               'rcdoc' ),
				'search_items'       => __( 'Search Liturgys',            'rcdoc' ),
				'not_found'          => __( 'No liturgys found',          'rcdoc' ),
				'not_found_in_trash' => __( 'No liturgys found in trash', 'rcdoc' ),
				'all_items'          => __( 'Liturgys',                   'rcdoc' ),
			)
		)
	);
}



function doc_housings_register_post_types() {

	register_post_type(
		'housing',
		array(
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => false,
			'show_in_admin_bar'   => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-admin-multisite',
			'can_export'          => true,
			'delete_with_user'    => false,
			'hierarchical'        => false,
			'has_archive'         => 'housings',
			'query_var'           => 'housing',
			'capability_type'     => 'post',
			// 'map_meta_cap'        => true,
            //
			// /* Capabilities. */
			// 'capabilities' => array(
            //
			// 	// meta caps (don't assign these to roles)
			// 	'edit_post'              => 'edit_housing',
			// 	'read_post'              => 'read_housing',
			// 	'delete_post'            => 'delete_housing',
            //
			// 	// primitive/meta caps
			// 	'create_posts'           => 'create_housings',
            //
			// 	// primitive caps used outside of map_meta_cap()
			// 	'edit_posts'             => 'edit_housings',
			// 	'edit_others_posts'      => 'manage_housings',
			// 	'publish_posts'          => 'manage_housings',
			// 	'read_private_posts'     => 'read',
            //
			// 	// primitive caps used inside of map_meta_cap()
			// 	'read'                   => 'read',
			// 	'delete_posts'           => 'manage_housings',
			// 	'delete_private_posts'   => 'manage_housings',
			// 	'delete_published_posts' => 'manage_housings',
			// 	'delete_others_posts'    => 'manage_housings',
			// 	'edit_private_posts'     => 'edit_housings',
			// 	'edit_published_posts'   => 'edit_housings'
			// ),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'       => 'housings',
				'with_front' => false,
				'pages'      => true,
				'feeds'      => true,
				'ep_mask'    => EP_PERMALINK,
			),

			/* What features the post type supports. */
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
                'post-formats'
			),

			/* Labels used when displaying the posts. */
			'labels' => array(
				'name'               => __( 'Housings',                   'rcdoc' ),
				'singular_name'      => __( 'Housing',                    'rcdoc' ),
				'menu_name'          => __( 'Housings',                   'rcdoc' ),
				'name_admin_bar'     => __( 'Housing',                    'rcdoc' ),
				'add_new'            => __( 'Add New',                        'rcdoc' ),
				'add_new_item'       => __( 'Add New Housing',            'rcdoc' ),
				'edit_item'          => __( 'Edit Housing',               'rcdoc' ),
				'new_item'           => __( 'New Housing',                'rcdoc' ),
				'view_item'          => __( 'View Housing',               'rcdoc' ),
				'search_items'       => __( 'Search Housings',            'rcdoc' ),
				'not_found'          => __( 'No housings found',          'rcdoc' ),
				'not_found_in_trash' => __( 'No housings found in trash', 'rcdoc' ),
				'all_items'          => __( 'Housings',                   'rcdoc' ),
			)
		)
	);
}



function doc_finances_register_post_types() {

	register_post_type(
		'finance',
		array(
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => false,
			'show_in_admin_bar'   => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-portfolio',
			'can_export'          => true,
			'delete_with_user'    => false,
			'hierarchical'        => false,
			'has_archive'         => 'finances',
			'query_var'           => 'finance',
			'capability_type'     => 'post',
			// 'map_meta_cap'        => true,
            //
			// /* Capabilities. */
			// 'capabilities' => array(
            //
			// 	// meta caps (don't assign these to roles)
			// 	'edit_post'              => 'edit_finance',
			// 	'read_post'              => 'read_finance',
			// 	'delete_post'            => 'delete_finance',
            //
			// 	// primitive/meta caps
			// 	'create_posts'           => 'create_finances',
            //
			// 	// primitive caps used outside of map_meta_cap()
			// 	'edit_posts'             => 'edit_finances',
			// 	'edit_others_posts'      => 'manage_finances',
			// 	'publish_posts'          => 'manage_finances',
			// 	'read_private_posts'     => 'read',
            //
			// 	// primitive caps used inside of map_meta_cap()
			// 	'read'                   => 'read',
			// 	'delete_posts'           => 'manage_finances',
			// 	'delete_private_posts'   => 'manage_finances',
			// 	'delete_published_posts' => 'manage_finances',
			// 	'delete_others_posts'    => 'manage_finances',
			// 	'edit_private_posts'     => 'edit_finances',
			// 	'edit_published_posts'   => 'edit_finances'
			// ),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'       => 'finances',
				'with_front' => false,
				'pages'      => true,
				'feeds'      => true,
				'ep_mask'    => EP_PERMALINK,
			),

			/* What features the post type supports. */
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
                'post-formats'
			),

			/* Labels used when displaying the posts. */
			'labels' => array(
				'name'               => __( 'Finances',                   'rcdoc' ),
				'singular_name'      => __( 'Finance',                    'rcdoc' ),
				'menu_name'          => __( 'Finances',                   'rcdoc' ),
				'name_admin_bar'     => __( 'Finance',                    'rcdoc' ),
				'add_new'            => __( 'Add New',                        'rcdoc' ),
				'add_new_item'       => __( 'Add New Finance',            'rcdoc' ),
				'edit_item'          => __( 'Edit Finance',               'rcdoc' ),
				'new_item'           => __( 'New Finance',                'rcdoc' ),
				'view_item'          => __( 'View Finance',               'rcdoc' ),
				'search_items'       => __( 'Search Finances',            'rcdoc' ),
				'not_found'          => __( 'No finances found',          'rcdoc' ),
				'not_found_in_trash' => __( 'No finances found in trash', 'rcdoc' ),
				'all_items'          => __( 'Finances',                   'rcdoc' ),
			)
		)
	);
}



function doc_chancerys_register_post_types() {

	register_post_type(
		'chancery',
		array(
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => false,
			'show_in_admin_bar'   => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-shield-alt',
			'can_export'          => true,
			'delete_with_user'    => false,
			'hierarchical'        => false,
			'has_archive'         => 'chancerys',
			'query_var'           => 'chancery',
			'capability_type'     => 'post',
			// 'map_meta_cap'        => true,
            //
			// /* Capabilities. */
			// 'capabilities' => array(
            //
			// 	// meta caps (don't assign these to roles)
			// 	'edit_post'              => 'edit_chancery',
			// 	'read_post'              => 'read_chancery',
			// 	'delete_post'            => 'delete_chancery',
            //
			// 	// primitive/meta caps
			// 	'create_posts'           => 'create_chancerys',
            //
			// 	// primitive caps used outside of map_meta_cap()
			// 	'edit_posts'             => 'edit_chancerys',
			// 	'edit_others_posts'      => 'manage_chancerys',
			// 	'publish_posts'          => 'manage_chancerys',
			// 	'read_private_posts'     => 'read',
            //
			// 	// primitive caps used inside of map_meta_cap()
			// 	'read'                   => 'read',
			// 	'delete_posts'           => 'manage_chancerys',
			// 	'delete_private_posts'   => 'manage_chancerys',
			// 	'delete_published_posts' => 'manage_chancerys',
			// 	'delete_others_posts'    => 'manage_chancerys',
			// 	'edit_private_posts'     => 'edit_chancerys',
			// 	'edit_published_posts'   => 'edit_chancerys'
			// ),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'       => 'chancerys',
				'with_front' => false,
				'pages'      => true,
				'feeds'      => true,
				'ep_mask'    => EP_PERMALINK,
			),

			/* What features the post type supports. */
			'supports' => array(
                'title',
				'editor',
				'author',
				'thumbnail',
                'post-formats'
			),

			/* Labels used when displaying the posts. */
			'labels' => array(
				'name'               => __( 'Chancerys',                   'rcdoc' ),
				'singular_name'      => __( 'Chancery',                    'rcdoc' ),
				'menu_name'          => __( 'Chancerys',                   'rcdoc' ),
				'name_admin_bar'     => __( 'Chancery',                    'rcdoc' ),
				'add_new'            => __( 'Add New',                        'rcdoc' ),
				'add_new_item'       => __( 'Add New Chancery',            'rcdoc' ),
				'edit_item'          => __( 'Edit Chancery',               'rcdoc' ),
				'new_item'           => __( 'New Chancery',                'rcdoc' ),
				'view_item'          => __( 'View Chancery',               'rcdoc' ),
				'search_items'       => __( 'Search Chancerys',            'rcdoc' ),
				'not_found'          => __( 'No chancerys found',          'rcdoc' ),
				'not_found_in_trash' => __( 'No chancerys found in trash', 'rcdoc' ),
				'all_items'          => __( 'Chancerys',                   'rcdoc' ),
			)
		)
	);
}



function doc_info_techs_register_post_types() {

	register_post_type(
		'info_tech',
		array(
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => false,
			'show_in_admin_bar'   => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-desktop',
			'can_export'          => true,
			'delete_with_user'    => false,
			'hierarchical'        => false,
			'has_archive'         => 'info_techs',
			'query_var'           => 'info_tech',
			'capability_type'     => 'post',
			// 'map_meta_cap'        => true,
            //
			// /* Capabilities. */
			// 'capabilities' => array(
            //
			// 	// meta caps (don't assign these to roles)
			// 	'edit_post'              => 'edit_info_tech',
			// 	'read_post'              => 'read_info_tech',
			// 	'delete_post'            => 'delete_info_tech',
            //
			// 	// primitive/meta caps
			// 	'create_posts'           => 'create_info_techs',
            //
			// 	// primitive caps used outside of map_meta_cap()
			// 	'edit_posts'             => 'edit_info_techs',
			// 	'edit_others_posts'      => 'manage_info_techs',
			// 	'publish_posts'          => 'manage_info_techs',
			// 	'read_private_posts'     => 'read',
            //
			// 	// primitive caps used inside of map_meta_cap()
			// 	'read'                   => 'read',
			// 	'delete_posts'           => 'manage_info_techs',
			// 	'delete_private_posts'   => 'manage_info_techs',
			// 	'delete_published_posts' => 'manage_info_techs',
			// 	'delete_others_posts'    => 'manage_info_techs',
			// 	'edit_private_posts'     => 'edit_info_techs',
			// 	'edit_published_posts'   => 'edit_info_techs'
			// ),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'       => 'info_techs',
				'with_front' => false,
				'pages'      => true,
				'feeds'      => true,
				'ep_mask'    => EP_PERMALINK,
			),

			/* What features the post type supports. */
			'supports' => array(
                'title',
				'editor',
				'author',
				'thumbnail',
                'post-formats'
			),

			/* Labels used when displaying the posts. */
			'labels' => array(
				'name'               => __( 'Information Technologies',                   'rcdoc' ),
				'singular_name'      => __( 'Information Technology',                    'rcdoc' ),
				'menu_name'          => __( 'Information Technologies',                   'rcdoc' ),
				'name_admin_bar'     => __( 'Information Technology',                    'rcdoc' ),
				'add_new'            => __( 'Add New',                        'rcdoc' ),
				'add_new_item'       => __( 'Add New Information Technology',            'rcdoc' ),
				'edit_item'          => __( 'Edit Information Technology',               'rcdoc' ),
				'new_item'           => __( 'New Information Technology',                'rcdoc' ),
				'view_item'          => __( 'View Information Technology',               'rcdoc' ),
				'search_items'       => __( 'Search Information Technologies',            'rcdoc' ),
				'not_found'          => __( 'No info_techs found',          'rcdoc' ),
				'not_found_in_trash' => __( 'No info_techs found in trash', 'rcdoc' ),
				'all_items'          => __( 'Information Technologies',                   'rcdoc' ),
			)
		)
	);
}



function doc_hispanic_ministries_register_post_types() {

	register_post_type(
		'hispanic_ministry',
		array(
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => false,
			'show_in_admin_bar'   => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-share-alt',
			'can_export'          => true,
			'delete_with_user'    => false,
			'hierarchical'        => false,
			'has_archive'         => 'hispanic_ministries',
			'query_var'           => 'hispanic_ministry',
			'capability_type'     => 'post',
			// 'map_meta_cap'        => true,
            //
			// /* Capabilities. */
			// 'capabilities' => array(
            //
			// 	// meta caps (don't assign these to roles)
			// 	'edit_post'              => 'edit_hispanic_ministry',
			// 	'read_post'              => 'read_hispanic_ministry',
			// 	'delete_post'            => 'delete_hispanic_ministry',
            //
			// 	// primitive/meta caps
			// 	'create_posts'           => 'create_hispanic_ministries',
            //
			// 	// primitive caps used outside of map_meta_cap()
			// 	'edit_posts'             => 'edit_hispanic_ministries',
			// 	'edit_others_posts'      => 'manage_hispanic_ministries',
			// 	'publish_posts'          => 'manage_hispanic_ministries',
			// 	'read_private_posts'     => 'read',
            //
			// 	// primitive caps used inside of map_meta_cap()
			// 	'read'                   => 'read',
			// 	'delete_posts'           => 'manage_hispanic_ministries',
			// 	'delete_private_posts'   => 'manage_hispanic_ministries',
			// 	'delete_published_posts' => 'manage_hispanic_ministries',
			// 	'delete_others_posts'    => 'manage_hispanic_ministries',
			// 	'edit_private_posts'     => 'edit_hispanic_ministries',
			// 	'edit_published_posts'   => 'edit_hispanic_ministries'
			// ),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'       => 'hispanic_ministries',
				'with_front' => false,
				'pages'      => true,
				'feeds'      => true,
				'ep_mask'    => EP_PERMALINK,
			),

			/* What features the post type supports. */
			'supports' => array(
                'title',
				'editor',
				'author',
				'thumbnail',
                'post-formats'
			),

			/* Labels used when displaying the posts. */
			'labels' => array(
				'name'               => __( 'Hispanic Ministries',                   'rcdoc' ),
				'singular_name'      => __( 'Hispanic Ministry',                    'rcdoc' ),
				'menu_name'          => __( 'Hispanic Ministries',                   'rcdoc' ),
				'name_admin_bar'     => __( 'Hispanic Ministry',                    'rcdoc' ),
				'add_new'            => __( 'Add New',                        'rcdoc' ),
				'add_new_item'       => __( 'Add New Hispanic Ministry',            'rcdoc' ),
				'edit_item'          => __( 'Edit Hispanic Ministry',               'rcdoc' ),
				'new_item'           => __( 'New Hispanic Ministry',                'rcdoc' ),
				'view_item'          => __( 'View Hispanic Ministry',               'rcdoc' ),
				'search_items'       => __( 'Search Hispanic Ministries',            'rcdoc' ),
				'not_found'          => __( 'No hispanic_ministries found',          'rcdoc' ),
				'not_found_in_trash' => __( 'No hispanic_ministries found in trash', 'rcdoc' ),
				'all_items'          => __( 'Hispanic Ministries',                   'rcdoc' ),
			)
		)
	);
}



function doc_developments_register_post_types() {

	register_post_type(
		'development',
		array(
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => false,
			'show_in_admin_bar'   => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-chart-bar',
			'can_export'          => true,
			'delete_with_user'    => false,
			'hierarchical'        => false,
			'has_archive'         => 'developments',
			'query_var'           => 'development',
			'capability_type'     => 'post',
			// 'map_meta_cap'        => true,
            //
			// /* Capabilities. */
			// 'capabilities' => array(
            //
			// 	// meta caps (don't assign these to roles)
			// 	'edit_post'              => 'edit_development',
			// 	'read_post'              => 'read_development',
			// 	'delete_post'            => 'delete_development',
            //
			// 	// primitive/meta caps
			// 	'create_posts'           => 'create_developments',
            //
			// 	// primitive caps used outside of map_meta_cap()
			// 	'edit_posts'             => 'edit_developments',
			// 	'edit_others_posts'      => 'manage_developments',
			// 	'publish_posts'          => 'manage_developments',
			// 	'read_private_posts'     => 'read',
            //
			// 	// primitive caps used inside of map_meta_cap()
			// 	'read'                   => 'read',
			// 	'delete_posts'           => 'manage_developments',
			// 	'delete_private_posts'   => 'manage_developments',
			// 	'delete_published_posts' => 'manage_developments',
			// 	'delete_others_posts'    => 'manage_developments',
			// 	'edit_private_posts'     => 'edit_developments',
			// 	'edit_published_posts'   => 'edit_developments'
			// ),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'       => 'developments',
				'with_front' => false,
				'pages'      => true,
				'feeds'      => true,
				'ep_mask'    => EP_PERMALINK,
			),

			/* What features the post type supports. */
			'supports' => array(
                'title',
				'editor',
				'author',
				'thumbnail',
                'post-formats'
			),

			/* Labels used when displaying the posts. */
			'labels' => array(
				'name'               => __( 'Developments',                   'rcdoc' ),
				'singular_name'      => __( 'Development',                    'rcdoc' ),
				'menu_name'          => __( 'Developments',                   'rcdoc' ),
				'name_admin_bar'     => __( 'Development',                    'rcdoc' ),
				'add_new'            => __( 'Add New',                        'rcdoc' ),
				'add_new_item'       => __( 'Add New Development',            'rcdoc' ),
				'edit_item'          => __( 'Edit Development',               'rcdoc' ),
				'new_item'           => __( 'New Development',                'rcdoc' ),
				'view_item'          => __( 'View Development',               'rcdoc' ),
				'search_items'       => __( 'Search Developments',            'rcdoc' ),
				'not_found'          => __( 'No developments found',          'rcdoc' ),
				'not_found_in_trash' => __( 'No developments found in trash', 'rcdoc' ),
				'all_items'          => __( 'Developments',                   'rcdoc' ),
			)
		)
	);
}



function doc_archives_register_post_types() {

	register_post_type(
		'archive',
		array(
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => false,
			'show_in_admin_bar'   => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-archive',
			'can_export'          => true,
			'delete_with_user'    => false,
			'hierarchical'        => false,
			'has_archive'         => 'archives',
			'query_var'           => 'archive',
			'capability_type'     => 'post',
			// 'map_meta_cap'        => true,
            //
			// /* Capabilities. */
			// 'capabilities' => array(
            //
			// 	// meta caps (don't assign these to roles)
			// 	'edit_post'              => 'edit_archive',
			// 	'read_post'              => 'read_archive',
			// 	'delete_post'            => 'delete_archive',
            //
			// 	// primitive/meta caps
			// 	'create_posts'           => 'create_archives',
            //
			// 	// primitive caps used outside of map_meta_cap()
			// 	'edit_posts'             => 'edit_archives',
			// 	'edit_others_posts'      => 'manage_archives',
			// 	'publish_posts'          => 'manage_archives',
			// 	'read_private_posts'     => 'read',
            //
			// 	// primitive caps used inside of map_meta_cap()
			// 	'read'                   => 'read',
			// 	'delete_posts'           => 'manage_archives',
			// 	'delete_private_posts'   => 'manage_archives',
			// 	'delete_published_posts' => 'manage_archives',
			// 	'delete_others_posts'    => 'manage_archives',
			// 	'edit_private_posts'     => 'edit_archives',
			// 	'edit_published_posts'   => 'edit_archives'
			// ),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'       => 'archives',
				'with_front' => false,
				'pages'      => true,
				'feeds'      => true,
				'ep_mask'    => EP_PERMALINK,
			),

			/* What features the post type supports. */
			'supports' => array(
                'title',
				'editor',
				'author',
				'thumbnail',
                'post-formats'
			),

			/* Labels used when displaying the posts. */
			'labels' => array(
				'name'               => __( 'Archives',                   'rcdoc' ),
				'singular_name'      => __( 'Archive',                    'rcdoc' ),
				'menu_name'          => __( 'Archives',                   'rcdoc' ),
				'name_admin_bar'     => __( 'Archive',                    'rcdoc' ),
				'add_new'            => __( 'Add New',                    'rcdoc' ),
				'add_new_item'       => __( 'Add New Archive',            'rcdoc' ),
				'edit_item'          => __( 'Edit Archive',               'rcdoc' ),
				'new_item'           => __( 'New Archive',                'rcdoc' ),
				'view_item'          => __( 'View Archive',               'rcdoc' ),
				'search_items'       => __( 'Search Archives',            'rcdoc' ),
				'not_found'          => __( 'No archives found',          'rcdoc' ),
				'not_found_in_trash' => __( 'No archives found in trash', 'rcdoc' ),
				'all_items'          => __( 'Archives',                   'rcdoc' ),
			)
		)
	);
}
