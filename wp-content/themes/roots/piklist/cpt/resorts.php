<?php
// Register Custom Post Type
function resort_post_type() {

   $labels = array(
      'name'                => _x( 'Resorts', 'Post Type General Name', 'roots' ),
      'singular_name'       => _x( 'Resort', 'Post Type Singular Name', 'roots' ),
      'menu_name'           => __( 'Resorts', 'roots' ),
      'parent_item_colon'   => __( 'Parent Resort:', 'roots' ),
      'all_items'           => __( 'All Resorts', 'roots' ),
      'view_item'           => __( 'View Resort', 'roots' ),
      'add_new_item'        => __( 'Add New Resort', 'roots' ),
      'add_new'             => __( 'Add Resort', 'roots' ),
      'edit_item'           => __( 'Edit Resort', 'roots' ),
      'update_item'         => __( 'Update Resort', 'roots' ),
      'search_items'        => __( 'Search Resort', 'roots' ),
      'not_found'           => __( 'Not found', 'roots' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'roots' ),
   );
   $rewrite = array(
      'slug'                => 'resort',
      'with_front'          => true,
      'pages'               => true,
      'feeds'               => true,
   );
   $args = array(
      'label'               => __( 'resort', 'roots' ),
      'description'         => __( 'List of resorts', 'roots' ),
      'labels'              => $labels,
      'supports'            => array( 'title', 'editor', 'thumbnail'),
      'taxonomies'          => array( 'category', 'post_tag','proximity' ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-admin-home',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'rewrite'             => $rewrite,
      'taxonomies'          => array( 'Regions','Filters', 'proximity')
   );
   register_post_type( 'resort', $args );
}

// Hook into the 'init' action
add_action( 'init', 'resort_post_type', 5 );
