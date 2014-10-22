<?php
/*
Title: Select one or more Regions
Post Type: resort
Order: 10
Priority: default
Context: side
Collapse: false
*/

piklist('field',array(
  'type' => 'checkbox'
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
