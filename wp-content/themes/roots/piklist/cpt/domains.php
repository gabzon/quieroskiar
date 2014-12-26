<?php

// Register Custom Post Type
function domain_post_type() {

   $labels = array(
      'name'                => _x( 'Domains', 'Post Type General Name', 'roots' ),
      'singular_name'       => _x( 'Domain', 'Post Type Singular Name', 'roots' ),
      'menu_name'           => __( 'Domains', 'roots' ),
      'parent_item_colon'   => __( 'Parent Domain:', 'roots' ),
      'all_items'           => __( 'All Domains', 'roots' ),
      'view_item'           => __( 'View Domain', 'roots' ),
      'add_new_item'        => __( 'Add New Domain', 'roots' ),
      'add_new'             => __( 'Add Domain', 'roots' ),
      'edit_item'           => __( 'Edit Domain', 'roots' ),
      'update_item'         => __( 'Update Domain', 'roots' ),
      'search_items'        => __( 'Search Domain', 'roots' ),
      'not_found'           => __( 'Not found', 'roots' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'roots' ),
   );
   $rewrite = array(
      'slug'                => 'domain',
      'with_front'          => true,
      'pages'               => true,
      'feeds'               => true,
   );
   $args = array(
      'label'               => __( 'domain', 'roots' ),
      'description'         => __( 'List of domains', 'roots' ),
      'labels'              => $labels,
      'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', ),
      'taxonomies'          => array( 'category', 'post_tag', ' regions', ' Locations' ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-location-alt',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'taxonomies'          => array( 'Locations' ),
      'rewrite'             => $rewrite,
   );
   register_post_type( 'domain', $args );

}

// Hook into the 'init' action
add_action( 'init', 'domain_post_type', 0 );
