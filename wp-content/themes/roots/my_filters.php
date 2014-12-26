<?php

/*
Change the domaine title - post type: domaine
*/
function change_domaine_title( $title ){
     $screen = get_current_screen();
     if  ( 'domaine' == $screen->post_type ) {
          $title = 'Enter domaine name here';
     }
     return $title;
}
add_filter( 'enter_title_here', 'change_domaine_title' );


function change_thumbnail_name( $content ) {
    global $current_screen;

    if( 'resort' == $current_screen->post_type )
        return $content = str_replace( __( 'Set featured image' ), __( 'Upload Resort Logo'), $content);
    else
        return $content;
}
add_filter( 'admin_post_thumbnail_html', 'change_thumbnail_name' );
