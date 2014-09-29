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

?>
