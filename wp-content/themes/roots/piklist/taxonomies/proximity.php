<?php

// Register Custom Taxonomy
function proximity_taxonomy() {

   $labels = array(
      'name'                       => _x( 'Proximities', 'Taxonomy General Name', 'roots' ),
      'singular_name'              => _x( 'Proximity', 'Taxonomy Singular Name', 'roots' ),
      'menu_name'                  => __( 'Proximity', 'roots' ),
      'all_items'                  => __( 'All Proximity', 'roots' ),
      'parent_item'                => __( 'Parent Proximity', 'roots' ),
      'parent_item_colon'          => __( 'Parent Proximity:', 'roots' ),
      'new_item_name'              => __( 'New Proximity Name', 'roots' ),
      'add_new_item'               => __( 'Add New Proximity', 'roots' ),
      'edit_item'                  => __( 'Edit Proximity', 'roots' ),
      'update_item'                => __( 'Update Proximity', 'roots' ),
      'separate_items_with_commas' => __( 'Separate proximity with commas', 'roots' ),
      'search_items'               => __( 'Search Proximity', 'roots' ),
      'add_or_remove_items'        => __( 'Add or remove Proximity', 'roots' ),
      'choose_from_most_used'      => __( 'Choose from the most used Proximity', 'roots' ),
      'not_found'                  => __( 'Not Found', 'roots' ),
   );
   $args = array(
      'labels'                     => $labels,
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
   );
   register_taxonomy( 'proximity', array( 'post', ' resort', ' service', ' domain' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'proximity_taxonomy', 0 );
