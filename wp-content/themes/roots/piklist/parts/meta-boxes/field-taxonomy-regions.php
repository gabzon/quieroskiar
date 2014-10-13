<?php
/*
Title: Select one Region
Post Type: resort
Order: 10
Priority: default
Context: side
Collapse: false
*/
piklist('field',array(
  'type' => 'select'
  ,'scope' => 'taxonomy'
  ,'field' => 'Regions'
  ,'label' => 'Regions:'
  ,'columns' => 5
  ,'choices' => piklist(
    get_terms('Regions', array(
      'hide_empty' => false
    ))
    ,array(
      'term_id'
      ,'name'
    )
  )
));
?>
