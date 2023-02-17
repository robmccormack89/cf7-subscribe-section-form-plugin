<?php
/*
Plugin Name: Subscribe Section by RMcC
Plugin URI: #
Description: Add a subscribe form to your site using the [subscribe_section] shortcode. You can add a nested shortcode (for a form) to the subscribe_section using translations. This plugin is translation-ready.
Version: 1.0.0
Author: robmccormack89
Author URI: #
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE
Text Domain: subscribe-section
Domain Path: /languages/
*/

// don't run if someone access this file directly
defined('ABSPATH') || exit;

// define some constants
if (!defined('SUBSCRIBE_SECTION_PATH')) define('SUBSCRIBE_SECTION_PATH', plugin_dir_path( __FILE__ ));
if (!defined('SUBSCRIBE_SECTION_URL')) define('SUBSCRIBE_SECTION_URL', plugin_dir_url( __FILE__ ));
if (!defined('SUBSCRIBE_SECTION_BASE')) define('SUBSCRIBE_SECTION_BASE', dirname(plugin_basename( __FILE__ )));

// require the composer autoloader
if (file_exists($composer_autoload = __DIR__.'/vendor/autoload.php')) require_once $composer_autoload;

// then require the main plugin class. this class extends Timber/Timber which is required via composer
new Rmcc\SubscribeSection;

// require action functions 
require_once('inc/functions.php');