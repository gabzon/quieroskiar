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
        'supports' => array('title','editor','thumbnail')
    );

    register_post_type( 'Domaine', $args ); /* Registramos y a funcionar */
}


// La función no será utilizada antes del 'init'.
add_action( 'init', 'my_custom_resort' );
/* Here's how to create your customized labels */
function my_custom_resort() {
  $labels = array(
        'name' => _x( 'Resorts', 'post type general name' ),
        'singular_name' => _x( 'Resort', 'post type singular name' ),
        'add_new' => _x( 'Add new', 'Resort' ),
        'add_new_item' => __( 'Add new Resort' ),
        'edit_item' => __( 'Edit Resort' ),
        'new_item' => __( 'New Resort' ),
        'view_item' => __( 'View Resort' ),
        'search_items' => __( 'Search Resorts' ),
        'not_found' =>  __( 'No Resorts found' ),
        'not_found_in_trash' => __( 'Could not find any Resort in the trash' ),
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
        'hierarchical' => true,
        'menu_position' => null,
		    'taxonomies' => array( 'Regions','Filters'),//'editor',
        'supports' => array('title','editor','thumbnail','page-attributes')
    );

    register_post_type( 'Resort', $args ); /* Registramos y a funcionar */
}

// La función no será utilizada antes del 'init'.
add_action( 'init', 'my_custom_services' );
/* Here's how to create your customized labels */
function my_custom_services() {
  $labels = array(
        'name' => _x( 'Services', 'post type general name' ),
        'singular_name' => _x( 'Service', 'post type singular name' ),
        'add_new' => _x( 'Add new', 'Service' ),
        'add_new_item' => __( 'Add new Service' ),
        'edit_item' => __( 'Edit Service' ),
        'new_item' => __( 'New Service' ),
        'view_item' => __( 'View Service' ),
        'search_items' => __( 'Search Services' ),
        'not_found' =>  __( 'No Services found' ),
        'not_found_in_trash' => __( 'Could not find any Service in the trash' ),
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
        'taxonomies' => array( 'Regions'),
        'supports' => array( 'title', 'thumbnail','page-attributes')
    );

    register_post_type( 'Service', $args ); /* Registramos y a funcionar */
}
