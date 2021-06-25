<?php

function subscribe_html() {
  
  $context = Timber::context();
  
  Timber::render('subscribe.twig', $context);
}