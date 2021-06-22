<?php
namespace Rmcc;
use Timber\Timber;

class CF7SubscribeSection extends Timber {

  public function __construct() {
    parent::__construct();
    // timber stuff. the usual stuff
    add_filter('timber/twig', array($this, 'add_to_twig'));
    add_filter('timber/context', array($this, 'add_to_context'));
    
    // enqueue plugin assets
    add_action('wp_enqueue_scripts', array($this, 'subscribe_assets'));
    
    // add the preloader markup function to rmcc_before_header theme location
    add_action('rmcc_before_footer', 'subscribe_html', 10);
  }
  
  public function subscribe_assets() {
    wp_enqueue_style(
      'cf7-subscribe-section',
      CF7_SUBSCRIBE_SECTION_URL . 'public/css/cf7-subscribe-section.css'
    );
  }

  public function add_to_twig($twig) { 
    $twig->addExtension(new \Twig_Extension_StringLoader());
    return $twig;
  }

  public function add_to_context($context) {
    return $context;    
  }

}