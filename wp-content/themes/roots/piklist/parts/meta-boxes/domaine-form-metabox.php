<?php
/*
Title: New Domaine information
Post Type: domaine
*/
/*piklist('field', array(
    'type' => 'editor'
    ,'field' => 'description_content'
    ,'scope' => 'post'
    ,'label' => 'Domaine Description'
    ,'description' => 'Enter a description of the domaine'
    ,'options' => array (
      'wpautop' => true
      ,'media_buttons' => true
      ,'tabindex' => ''
      ,'editor_css' => ''
      ,'editor_class' => ''
      ,'teeny' => false
      ,'dfw' => false
      ,'tinymce' => true
      ,'quicktags' => true
      ,'drag_drop_upload' => true
    )
    ,'on_post_status' => array(
      'value' => 'lock'
    )
  ));*/

  piklist('field',array(
	'type' => 'text'
	,'field' => 'domaine_website'
	,'label' => 'Domaine Website'
  ,'description' => 'Optional'
	,'columns' => 12
	,'attributes' => array(
		'placeholder' => 'Enter the website'
		))
	);

?>
