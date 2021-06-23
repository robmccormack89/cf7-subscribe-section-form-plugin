<?php
/*
Plugin Name: Subscribe Section for CF7 by RMcC
Plugin URI: #
Description: A custom subscribe/signup section with CF7 form. Requires a CF7 form called "Subscribe" to exist, e.g [contact-form-7 title="Subscribe"]. 
Version: 1.0.0
Author: robmccormack89
Author URI: #
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE
Text Domain: cf7-subscribe-section
Domain Path: /languages/
*/

// don't run if someone access this file directly
defined('ABSPATH') || exit;

// define some constants
if (!defined('CF7_SUBSCRIBE_SECTION_PATH')) define('CF7_SUBSCRIBE_SECTION_PATH', plugin_dir_path( __FILE__ ));
if (!defined('CF7_SUBSCRIBE_SECTION_URL')) define('CF7_SUBSCRIBE_SECTION_URL', plugin_dir_url( __FILE__ ));

// require action functions 
require_once('inc/functions.php');

// require the composer autoloader
if (file_exists($composer_autoload = __DIR__.'/vendor/autoload.php')) require_once $composer_autoload;

// then require the main plugin class. this class extends Timber/Timber which is required via composer
new Rmcc\CF7SubscribeSection;