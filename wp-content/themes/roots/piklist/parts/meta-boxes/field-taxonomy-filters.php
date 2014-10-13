<?php
/*
Title: Select one or more Filters
Post Type: resort
Order: 2
Priority: default
Context: side
Collapse: true
*/

piklist('field', array(
  'type' => 'checkbox'
  ,'scope' => 'taxonomy'
  ,'field' => 'Filters'
  ,'label' => 'Filters:'
  ,'choices' => piklist(
    get_terms('Filters', array(
      'hide_empty' => false
    ))
    ,array(
      'term_id'
      ,'name'
    )
  )
));
?>
