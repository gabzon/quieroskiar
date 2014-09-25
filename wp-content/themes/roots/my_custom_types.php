<?php

// La función no será utilizada antes del 'init'.
add_action( 'init', 'my_custom_domaine' );
/* Here's how to create your customized labels */
function my_custom_domaine() {
  $labels = array(
        'name' => _x( 'Domaine', 'post type general name' ),
        'singular_name' => _x( 'Domaine', 'post type singular name' ),
        'add_new' => _x( 'Add new', 'Domaine' ),
        'add_new_item' => __( 'Add new Domaine' ),
        'edit_item' => __( 'Edit Domaine' ),
        'new_item' => __( 'New Domaine' ),
        'view_item' => __( 'View Domaine' ),
        'search_items' => __( 'Search Domaine' ),
        'not_found' =>  __( 'No Domaine found' ),
        'not_found_in_trash' => __( 'Could not find any Domaine in the trash' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
		'taxonomies' => array( 'Locations' ),
        'supports' => array('title','thumbnail')
    );
 
    register_post_type( 'Domaine', $args ); /* Registramos y a funcionar */
}

// La función no será utilizada antes del 'init'.
add_action( 'init', 'my_custom_station' );
/* Here's how to create your customized labels */
function my_custom_station() {
  $labels = array(
        'name' => _x( 'Stations', 'post type general name' ),
        'singular_name' => _x( 'Station', 'post type singular name' ),
        'add_new' => _x( 'Add new', 'Station' ),
        'add_new_item' => __( 'Add new Station' ),
        'edit_item' => __( 'Edit Station' ),
        'new_item' => __( 'New Station' ),
        'view_item' => __( 'View Station' ),
        'search_items' => __( 'Search Stations' ),
        'not_found' =>  __( 'No Stations found' ),
        'not_found_in_trash' => __( 'Could not find any Station in the trash' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
		'taxonomies' => array( 'Pays' ),
        'supports' => array('title')
    );
 
    register_post_type( 'station', $args ); /* Registramos y a funcionar */
}

// La función no será utilizada antes del 'init'.
add_action( 'init', 'my_custom_hotels' );
/* Here's how to create your customized labels */
function my_custom_hotels() {
  $labels = array(
        'name' => _x( 'Hotels', 'post type general name' ),
        'singular_name' => _x( 'Hotel', 'post type singular name' ),
        'add_new' => _x( 'Add new', 'Hotel' ),
        'add_new_item' => __( 'Add new Hotel' ),
        'edit_item' => __( 'Edit Hotel' ),
        'new_item' => __( 'New Hotel' ),
        'view_item' => __( 'View Hotel' ),
        'search_items' => __( 'Search Hotels' ),
        'not_found' =>  __( 'No Hotels found' ),
        'not_found_in_trash' => __( 'Could not find any Hotel in the trash' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
 
    register_post_type( 'Hotel', $args ); /* Registramos y a funcionar */
}

// Custom type "SPA"
add_action( 'init', 'my_custom_spa' );

function my_custom_spa() {
  $labels = array(
        'name' => _x( 'Spa', 'post type general name' ),
        'singular_name' => _x( 'Spa', 'post type singular name' ),
        'add_new' => _x( 'Add new', 'Spa' ),
        'add_new_item' => __( 'Add new Spa' ),
        'edit_item' => __( 'Edit Spa' ),
        'new_item' => __( 'New Spa' ),
        'view_item' => __( 'View Spa' ),
        'search_items' => __( 'Search Spa' ),
        'not_found' =>  __( 'No Spa found' ),
        'not_found_in_trash' => __( 'Could not find any Spa in the trash' ),
        'parent_item_colon' => ''
    );
 
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
 
    register_post_type( 'Spa', $args ); 
}

// Custom type "Medical Services"
add_action( 'init', 'my_custom_medical_services' );

function my_custom_medical_services() {
  $labels = array(
        'name' => _x( 'Medical Services', 'post type general name' ),
        'singular_name' => _x( 'Medical Services', 'post type singular name' ),
        'add_new' => _x( 'Add new', 'Medical Services' ),
        'add_new_item' => __( 'Add new Medical Service' ),
        'edit_item' => __( 'Edit Medical Service' ),
        'new_item' => __( 'New Medical Service' ),
        'view_item' => __( 'View Medical Service' ),
        'search_items' => __( 'Search Medical Service' ),
        'not_found' =>  __( 'No Medical Service found' ),
        'not_found_in_trash' => __( 'Could not find any Medical Service in the trash' ),
        'parent_item_colon' => ''
    );
 
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
 
    register_post_type( 'Medical-Service', $args ); 
}

// Custom type "Restaurants"
add_action( 'init', 'my_custom_restaurants' );

function my_custom_restaurants() {
  $labels = array(
        'name' => _x( 'Restaurant', 'post type general name' ),
        'singular_name' => _x( 'Restaurants', 'post type singular name' ),
        'add_new' => _x( 'Add new', 'Restaurants' ),
        'add_new_item' => __( 'Add new Restaurant' ),
        'edit_item' => __( 'Edit Restaurant' ),
        'new_item' => __( 'New Restaurant' ),
        'view_item' => __( 'View Restaurant' ),
        'search_items' => __( 'Search Restaurant' ),
        'not_found' =>  __( 'No Restaurant found' ),
        'not_found_in_trash' => __( 'Could not find any Restaurant in the trash' ),
        'parent_item_colon' => ''
    );
 
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
 
    register_post_type( 'Restaurant', $args ); 
}

// Custom type "Contacs"
add_action( 'init', 'my_custom_contacts' );

function my_custom_contacts() {
  $labels = array(
        'name' => _x( 'Contacts', 'post type general name' ),
        'singular_name' => _x( 'Contacts', 'post type singular name' ),
        'add_new' => _x( 'Add new', 'Contacts' ),
        'add_new_item' => __( 'Add new Contact' ),
        'edit_item' => __( 'Edit Contact' ),
        'new_item' => __( 'New Contact' ),
        'view_item' => __( 'View Contact' ),
        'search_items' => __( 'Search Contact' ),
        'not_found' =>  __( 'No Contact found' ),
        'not_found_in_trash' => __( 'Could not find any Contact in the trash' ),
        'parent_item_colon' => ''
    );
 
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
 
    register_post_type( 'Contact', $args ); 
}
?>