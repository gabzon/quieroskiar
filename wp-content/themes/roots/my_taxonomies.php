<?php

add_action( 'init', 'domaine_regions', 0 );

function domaine_regions() {

// Labels part for the GUI

  $labels = array(
    'name' => _x( 'Regions', 'taxonomy general name' ),
    'singular_name' => _x( 'Region', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search regions' ),
    'popular_items' => __( 'Popular regions' ),
    'all_items' => __( 'All Regions' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit region' ),
    'update_item' => __( 'Update region' ),
    'add_new_item' => __( 'Add New region' ),
    'new_item_name' => __( 'New region Name' ),
    'separate_items_with_commas' => __( 'Separate regions with commas' ),
    'add_or_remove_items' => __( 'Add or remove regions' ),
    'choose_from_most_used' => __( 'Choose from the most used regions' ),
    'menu_name' => __( 'Regions' ),
  );

// Now register the non-hierarchical taxonomy like tag

  register_taxonomy('Regions','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'region' ),
  ));
}



add_action( 'init', 'resort_filters', 0 );

function resort_filters() {

// Labels part for the GUI

  $labels = array(
    'name' => _x( 'Filters', 'taxonomy general name' ),
    'singular_name' => _x( 'Filter', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Filters' ),
    'popular_items' => __( 'Popular Filters' ),
    'all_items' => __( 'All Filters' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Filter' ),
    'update_item' => __( 'Update Filter' ),
    'add_new_item' => __( 'Add New Filter' ),
    'new_item_name' => __( 'New Filter Name' ),
    'separate_items_with_commas' => __( 'Separate Filters with commas' ),
    'add_or_remove_items' => __( 'Add or remove Currencies' ),
    'choose_from_most_used' => __( 'Choose from the most used Filter' ),
    'menu_name' => __( 'Filters' ),
  );

// Now register the non-hierarchical taxonomy like tag

  register_taxonomy('Filters','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'filter' ),
  ));
}

?>
