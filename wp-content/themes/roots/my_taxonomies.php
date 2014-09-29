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


add_action( 'init', 'domaine_currency', 0 );

function domaine_currency() {

// Labels part for the GUI

  $labels = array(
    'name' => _x( 'Currencies', 'taxonomy general name' ),
    'singular_name' => _x( 'Currency', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Currencies' ),
    'popular_items' => __( 'Popular Currencies' ),
    'all_items' => __( 'All Currencies' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Currency' ),
    'update_item' => __( 'Update Currency' ),
    'add_new_item' => __( 'Add New Currency' ),
    'new_item_name' => __( 'New Currency Name' ),
    'separate_items_with_commas' => __( 'Separate Currencies with commas' ),
    'add_or_remove_items' => __( 'Add or remove Currencies' ),
    'choose_from_most_used' => __( 'Choose from the most used Currencies' ),
    'menu_name' => __( 'Currency' ),
  );

// Now register the non-hierarchical taxonomy like tag

  register_taxonomy('Currencies','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'Currency' ),
  ));
}
?>
