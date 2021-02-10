<?php


// CPT UI adding to WP categories and tags
function my_cptui_add_post_types_to_archives( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;    
	}

	if ( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
		$cptui_post_types = cptui_get_post_type_slugs();

		$query->set(
			'post_type',
			array_merge(
				array( 'post' ),
				$cptui_post_types
			)
		);
	}
}
add_filter( 'pre_get_posts', 'my_cptui_add_post_types_to_archives' );

// changing posts per page
function my_cptui_change_posts_per_page( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
       return;
    }

    if ( is_post_type_archive( 'product' ) ) {
       $query->set( 'posts_per_page', 6 );
    }
}
add_filter( 'pre_get_posts', 'my_cptui_change_posts_per_page' );

// ensuring search functionality for custom post types
function my_cptui_add_post_type_to_search( $query ) {
	if ( is_admin() ) {
		return;
	}

	if ( $query->is_search() ) {
		$cptui_post_types = cptui_get_post_type_slugs();
		$query->set(
			'post_type',
			array_merge(
				array( 'post' ), 
				$cptui_post_types
			)
		);
	}
}
add_filter( 'pre_get_posts', 'my_cptui_add_post_type_to_search' );

// adding cptui post types to the RSS feeds
function my_cptui_add_post_types_to_rss( $query ) {
	if ( ! $query->is_feed() ) {
		return;    
	}

	$cptui_post_types = cptui_get_post_type_slugs();

	$query->set(
		'post_type',
		array_merge(
			array( 'post' ),
			$cptui_post_types
		)
	);
}
add_filter( 'pre_get_posts', 'my_cptui_add_post_types_to_rss' );


//custom function to get the description of custom post type
function my_cptui_post_type_description( $post_type_slug = '' ) {
	$mytype = get_post_type_object( $post_type_slug );
	if ( ! empty( $mytype ) ) {
		echo $the_post_type->description;
	}
}