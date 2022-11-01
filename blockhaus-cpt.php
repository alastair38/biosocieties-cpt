<?php
/*
Plugin name: Blockhaus Custom Post Types
Description: Custom post types for this website. Deactivating this plugin will disable all post types except for pages and posts.
Text Domain: blockhaus
*/

// Register Taxonomy Publication Theme
function create_articles_and_reviews_featured_tax() {

	$labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'blockhaus' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'blockhaus' ),
		'search_items'      => __( 'Search Categories', 'blockhaus' ),
		'all_items'         => __( 'All Categories', 'blockhaus' ),
		'parent_item'       => __( 'Parent Category', 'blockhaus' ),
		'parent_item_colon' => __( 'Parent Category:', 'blockhaus' ),
		'edit_item'         => __( 'Edit Category', 'blockhaus' ),
		'update_item'       => __( 'Update Category', 'blockhaus' ),
		'add_new_item'      => __( 'Add New Category', 'blockhaus' ),
		'new_item_name'     => __( 'New Category Name', 'blockhaus' ),
		'menu_name'         => __( 'Categories', 'blockhaus' ),
	);
	$rewrite = array(
		'slug' => 'articles-and-reviews/type',
		'with_front' => true,
		'hierarchical' => false,
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Taxonomy for the Articles and Reviews custom post type', 'blockhaus' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => false,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
		'rewrite' => $rewrite,
	);
	register_taxonomy( 'articles_and_reviews_featured', array('articles-and-reviews'), $args );

}
add_action( 'init', 'create_articles_and_reviews_featured_tax' );

// Register Custom Post Type Articles / Reviews
function create_articles_reviews_cpt() {

	$labels = array(
		'name' => _x( 'Articles and Reviews', 'Post Theme General Name', 'blockhaus' ),
		'singular_name' => _x( 'Articles and Review', 'Post Theme Singular Name', 'blockhaus' ),
		'menu_name' => _x( 'Articles and Reviews', 'Admin Menu text', 'blockhaus' ),
		'name_admin_bar' => _x( 'Articles and Review', 'Add New on Toolbar', 'blockhaus' ),
		'archives' => __( 'Articles and Review Archives', 'blockhaus' ),
		'attributes' => __( 'Articles and Review Attributes', 'blockhaus' ),
		'parent_item_colon' => __( 'Parent Articles and Review:', 'blockhaus' ),
		'all_items' => __( 'All Articles and Reviews', 'blockhaus' ),
		'add_new_item' => __( 'Add New Articles and Review', 'blockhaus' ),
		'add_new' => __( 'Add New', 'blockhaus' ),
		'new_item' => __( 'New Articles and Review', 'blockhaus' ),
		'edit_item' => __( 'Edit Articles and Review', 'blockhaus' ),
		'update_item' => __( 'Update Articles and Review', 'blockhaus' ),
		'view_item' => __( 'View Articles and Review', 'blockhaus' ),
		'view_items' => __( 'View Articles and Reviews', 'blockhaus' ),
		'search_items' => __( 'Search Articles and Reviews', 'blockhaus' ),
		'not_found' => __( 'Not found', 'blockhaus' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'blockhaus' ),
		'featured_image' => __( 'Featured Image', 'blockhaus' ),
		'set_featured_image' => __( 'Set featured image', 'blockhaus' ),
		'remove_featured_image' => __( 'Remove featured image', 'blockhaus' ),
		'use_featured_image' => __( 'Use as featured image', 'blockhaus' ),
		'insert_into_item' => __( 'Insert into Articles and Review', 'blockhaus' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Articles and Review', 'blockhaus' ),
		'items_list' => __( 'Articles and Reviews list', 'blockhaus' ),
		'items_list_navigation' => __( 'Articles and Reviews list navigation', 'blockhaus' ),
		'filter_items_list' => __( 'Filter Articles and Reviews list', 'blockhaus' ),
	);
	$rewrite = array(
		'slug' => 'articles-and-reviews',
		'with_front' => false,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'Articles and Review', 'blockhaus' ),
		'description' => __( '', 'blockhaus' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-media-document',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => $rewrite,
	);
	register_post_type( 'articles-and-reviews', $args );

}
add_action( 'init', 'create_articles_reviews_cpt', 0 );





// Register Custom Post Type Videos
function create_video_cpt() {

	$labels = array(
		'name' => _x( 'Videos', 'Post Theme General Name', 'blockhaus' ),
		'singular_name' => _x( 'Video', 'Post Theme Singular Name', 'blockhaus' ),
		'menu_name' => _x( 'Videos', 'Admin Menu text', 'blockhaus' ),
		'name_admin_bar' => _x( 'Video', 'Add New on Toolbar', 'blockhaus' ),
		'archives' => __( 'Video Archives', 'blockhaus' ),
		'attributes' => __( 'Video Attributes', 'blockhaus' ),
		'parent_item_colon' => __( 'Parent Video:', 'blockhaus' ),
		'all_items' => __( 'All Videos', 'blockhaus' ),
		'add_new_item' => __( 'Add New Video', 'blockhaus' ),
		'add_new' => __( 'Add New', 'blockhaus' ),
		'new_item' => __( 'New Video', 'blockhaus' ),
		'edit_item' => __( 'Edit Video', 'blockhaus' ),
		'update_item' => __( 'Update Video', 'blockhaus' ),
		'view_item' => __( 'View Video', 'blockhaus' ),
		'view_items' => __( 'View Videos', 'blockhaus' ),
		'search_items' => __( 'Search Video', 'blockhaus' ),
		'not_found' => __( 'Not found', 'blockhaus' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'blockhaus' ),
		'featured_image' => __( 'Featured Image', 'blockhaus' ),
		'set_featured_image' => __( 'Set featured image', 'blockhaus' ),
		'remove_featured_image' => __( 'Remove featured image', 'blockhaus' ),
		'use_featured_image' => __( 'Use as featured image', 'blockhaus' ),
		'insert_into_item' => __( 'Insert into Video', 'blockhaus' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Video', 'blockhaus' ),
		'items_list' => __( 'Videos list', 'blockhaus' ),
		'items_list_navigation' => __( 'Videos list navigation', 'blockhaus' ),
		'filter_items_list' => __( 'Filter Videos list', 'blockhaus' ),
	);
	$rewrite = array(
		'slug' => 'videos',
		'with_front' => true,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'Video', 'blockhaus' ),
		'description' => __( '', 'blockhaus' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-video',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		// 'template' => array(	
		// array( 'core/group', array(), array(
		// 	array( 'core/paragraph', array(
		// 			'placeholder' => 'Add Publication details...',
		// 			'className' => 'pub-details'
		// 	) )
	
		// 	) )
		// ),
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => $rewrite,
	);
	register_post_type( 'video', $args );

}
add_action( 'init', 'create_video_cpt', 0 );

// Register Custom Post Type Journal Editions

function create_journal_editions_cpt() {

	$labels = array(
		'name' => _x( 'Journal Editions', 'Post Theme General Name', 'blockhaus' ),
		'singular_name' => _x( 'Journal Edition', 'Post Theme Singular Name', 'blockhaus' ),
		'menu_name' => _x( 'Journal Editions', 'Admin Menu text', 'blockhaus' ),
		'name_admin_bar' => _x( 'Journal Edition', 'Add New on Toolbar', 'blockhaus' ),
		'archives' => __( 'Journal Edition Archives', 'blockhaus' ),
		'attributes' => __( 'Journal Edition Attributes', 'blockhaus' ),
		'parent_item_colon' => __( 'Parent Journal Edition:', 'blockhaus' ),
		'all_items' => __( 'All Journal Editions', 'blockhaus' ),
		'add_new_item' => __( 'Add New Journal Edition', 'blockhaus' ),
		'add_new' => __( 'Add New', 'blockhaus' ),
		'new_item' => __( 'New Journal Edition', 'blockhaus' ),
		'edit_item' => __( 'Edit Journal Edition', 'blockhaus' ),
		'update_item' => __( 'Update Journal Edition', 'blockhaus' ),
		'view_item' => __( 'View Journal Edition', 'blockhaus' ),
		'view_items' => __( 'View Journal Editions', 'blockhaus' ),
		'search_items' => __( 'Search Journal Edition', 'blockhaus' ),
		'not_found' => __( 'Not found', 'blockhaus' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'blockhaus' ),
		'featured_image' => __( 'Featured Image', 'blockhaus' ),
		'set_featured_image' => __( 'Set featured image', 'blockhaus' ),
		'remove_featured_image' => __( 'Remove featured image', 'blockhaus' ),
		'use_featured_image' => __( 'Use as featured image', 'blockhaus' ),
		'insert_into_item' => __( 'Insert into Journal Edition', 'blockhaus' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Journal Edition', 'blockhaus' ),
		'items_list' => __( 'Journal Editions list', 'blockhaus' ),
		'items_list_navigation' => __( 'Journal Editions list navigation', 'blockhaus' ),
		'filter_items_list' => __( 'Filter Journal Editions list', 'blockhaus' ),
	);
	$rewrite = array(
		'slug' => 'journal-editions',
		'with_front' => true,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'Journal Editions', 'blockhaus' ),
		'description' => __( '', 'blockhaus' ),
		'labels' => $labels,
		'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode(file_get_contents( plugin_dir_path( __FILE__ ) . 'assets/document.svg' )),
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
    'template'              => array(
      array(
          'core/pattern',
          array(
              'slug' => 'blockhaus/blockhaus-quote-with-image',
          ),
      ),
  ),
  
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => $rewrite,
	);
	register_post_type( 'journal_editions', $args );

}
add_action( 'init', 'create_journal_editions_cpt', 0 );


function my_pre_get_posts( $query ) {
    
	// do not modify queries in the admin
	if( is_admin() ) {
			
			return $query;
			
	}
	

	// only modify queries for 'event' post type
	if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'articles-and-reviews' ) {
			
			$query->set('orderby', 'meta_value');    
			$query->set('meta_key', 'featured_article');    
			$query->set('order', 'DESC'); 
			
			
	}
	

	// return
	return $query;

}

add_action('pre_get_posts', 'my_pre_get_posts');
// Modify excerpt for publications archive

// function blockhaus_modify_publication_excerpt() {
 
// 	global $post;
	 
// 	$blocks = parse_blocks( $post->post_content );

	
	 
// 	foreach ( $blocks as $block ) {

// 			// Publication meta block name
// 			if ( 'acf/Publication-meta' === $block['blockName'] ) {
// 					//$content .= apply_filters( 'the_content', render_block( $block ) );
				
// 					 // echo render_block($block);
			 
				
// 				echo apply_filters( 'the_content', render_block( $block ) );
					 
// 				 break;
					 
// 			}
			 
// 	}
	 
// }

// function blockhaus_change_publication_posts_per_page( $query ) {
 
//  if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'Publication' ) ) {
// 	 $query->set( 'posts_per_page', '10' );
//  }

// }
// add_action( 'pre_get_posts', 'blockhaus_change_publication_posts_per_page' );