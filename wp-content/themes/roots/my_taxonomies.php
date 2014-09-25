<?php

add_action( 'init', 'domaine_locations', 0 );

function domaine_locations() {

// Labels part for the GUI

  $labels = array(
    'name' => _x( 'Locations', 'taxonomy general name' ),
    'singular_name' => _x( 'Location', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Locations' ),
    'popular_items' => __( 'Popular Locations' ),
    'all_items' => __( 'All Locations' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Location' ), 
    'update_item' => __( 'Update Location' ),
    'add_new_item' => __( 'Add New Location' ),
    'new_item_name' => __( 'New Location Name' ),
    'separate_items_with_commas' => __( 'Separate Locations with commas' ),
    'add_or_remove_items' => __( 'Add or remove Locations' ),
    'choose_from_most_used' => __( 'Choose from the most used Locations' ),
    'menu_name' => __( 'Locations' ),
  ); 

// Now register the non-hierarchical taxonomy like tag

  register_taxonomy('Locations','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'Location' ),
  ));
}


add_action( 'init', 'domaine_pays', 0 );

function domaine_pays() {

// Labels part for the GUI

  $labels = array(
    'name' => _x( 'Pays', 'taxonomy general name' ),
    'singular_name' => _x( 'Pay', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Pays' ),
    'popular_items' => __( 'Popular Pays' ),
    'all_items' => __( 'All Pays' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Pay' ), 
    'update_item' => __( 'Update Pay' ),
    'add_new_item' => __( 'Add New Pay' ),
    'new_item_name' => __( 'New Pay Name' ),
    'separate_items_with_commas' => __( 'Separate Pays with commas' ),
    'add_or_remove_items' => __( 'Add or remove Pays' ),
    'choose_from_most_used' => __( 'Choose from the most used Pays' ),
    'menu_name' => __( 'Pays' ),
  ); 

// Now register the non-hierarchical taxonomy like tag

  register_taxonomy('Pays','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'Pay' ),
  ));
}
?>