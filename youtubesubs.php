<?php
/**
* Plugin Name: Youtube Subs Counter
* Plugin URI: https://shanjoel.com
* Description: Handle Particular Youtube Channel's Subs Count
* Version: 1.0.0
* Author: Shan Joel
* Author URI: https://shanjoel.com
*/

//Exit if access directly - security purpose
if (!defined('ABSPATH')) {
    exit;
}

// Load scripts
require_once(plugin_dir_path(__FILE__) . '/includes/youtubesubs-scripts.php');

// Load class
require_once(plugin_dir_path(__FILE__) . '/includes/youtubesubs-class.php');


// Register widget
function register_youtubesubs()
{
    register_widget('Youtube_Subs_Widget');
}

// Hook in function
add_action('widgets_init', 'register_youtubesubs');
