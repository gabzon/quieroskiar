<?php

// Register Custom Post Type
function services_post_type() {

   $labels = array(
      'name'                => _x( 'Services', 'Post Type General Name', 'roots' ),
      'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'roots' ),
      'menu_name'           => __( 'Services', 'roots' ),
      'parent_item_colon'   => __( 'Parent Service:', 'roots' ),
      'all_items'           => __( 'All Services', 'roots' ),
      'view_item'           => __( 'View Service', 'roots' ),
      'add_new_item'        => __( 'Add New Service', 'roots' ),
      'add_new'             => __( 'Add Service', 'roots' ),
      'edit_item'           => __( 'Edit Service', 'roots' ),
      'update_item'         => __( 'Update Service', 'roots' ),
      'search_items'        => __( 'Search Service', 'roots' ),
      'not_found'           => __( 'Not found', 'roots' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'roots' ),
   );
   $rewrite = array(
      'slug'                => 'service',
      'with_front'          => true,
      'pages'               => true,
      'feeds'               => true,
   );
   $args = array(
      'label'               => __( 'service', 'roots' ),
      'description'         => __( 'List of Services', 'roots' ),
      'labels'              => $labels,
      'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', ),
      'taxonomies'          => array( 'category', 'post_tag', ' regions' ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-clipboard',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'taxonomies'          => array( 'Regions'),
      'rewrite'             => $rewrite,
   );
   register_post_type( 'service', $args );

}

// Hook into the 'init' action
add_action( 'init', 'services_post_type', 0 );
