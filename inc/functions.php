<?php

function subscribe_section() {
  $context = Timber::context();
  $out = Timber::compile('subscribe-section.twig', $context);
  return $out;
}