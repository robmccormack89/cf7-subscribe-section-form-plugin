<?php

function subscribe_html() {
  
  // if timber::locations is empty (another plugin hasn't already added to it), make it an array
  if(!Timber::$locations) Timber::$locations = array();

  // add a new views path to the locations array
  array_push(
    Timber::$locations, 
    CF7_SUBSCRIBE_SECTION_PATH . 'views'
  );
  
  $context = Timber::context();
  
  Timber::render('subscribe.twig', $context);
}