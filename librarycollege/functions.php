<?php
/**
 * Child Theme Functions are loaded first before parent theme - see gsucollege/functions.php.
 */

register_sidebar(array(
  'name' => __( 'Home Page Banner' ),
  'id' => 'home-banner',
  'description' => __( 'Use the Image Widget to upload a 620px x 163px image.' ),
  'before_widget' => '',
  'after_widget'  => "",
  'before_title' => '',
  'after_title' => ''
));

register_sidebar(array(
  'name' => __( 'Home Search' ),
  'id' => 'home-search',
  'description' => __( 'Use a text widget to insert search scripts.' ),
  'before_widget' => '',
  'after_widget'  => "",
  'before_title' => '',
  'after_title' => ''
));