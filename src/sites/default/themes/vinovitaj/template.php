<?php
function vinovitaj_preprocess_html(&$variables) {
  drupal_add_css('http://fonts.googleapis.com/css?family=Fondamento', array('type' => 'external'));
  drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans:400,600', array('type' => 'external'));
  drupal_add_css('http://fonts.googleapis.com/css?family=Parisienne', array('type' => 'external'));
}
?>
