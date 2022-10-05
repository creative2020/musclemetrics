<?php

/**
 * Plugin Name: FWP Client
 * Plugin URI: https://2020creative.com/
 * Description: Plugin for custom functions by 2020creative.com
 * Version: 1.0.0
 * Author: Jeff Potts, 2020 CREATIVE LLC
 * License: License: GPLv2 or later
 */

if (!defined('ABSPATH')) {
    die();
}

// adding the js file
function fwp_load_scripts()
{
    wp_enqueue_script('fwp-plugin-script',  plugin_dir_url(__FILE__) . 'fwp-script.js', [], '1.1', true);
    wp_enqueue_style('fwp-plugin-style', plugin_dir_url(__FILE__) . 'fwp-style.css');
}
add_action('wp_enqueue_scripts', 'fwp_load_scripts');

// ****************************************************
// Functions
// ****************************************************

// Admin
include(plugin_dir_path(__FILE__) . 'functions/admin.php');

// Force login
// include(plugin_dir_path(__FILE__) . 'functions/force-login.php');

// Submenu
include(plugin_dir_path(__FILE__) . 'functions/submenu.php');

// Tools
include(plugin_dir_path(__FILE__) . 'tools/tools.php');

// ****************************************************
if (!function_exists('fwp_get_start_date')) :
    /**
     * get start date from tribe_events
     */
    function fwp_get_start_date($post_id)
    {
        // post
        $post = get_post($post_id);

        // get event start date
        if ($post->post_type == 'tribe_events') {
            $post_meta = get_post_meta($post->ID);
            $start_date = $post_meta['_EventStartDate'][0];
            $start_date = strtotime($start_date);
            $start_date = date('m/d/y', $start_date);

            // return
            return $start_date;
        } else {
            return false;
        }
    }
endif;

// ****************************************************
if (!function_exists('fwp_get_future_events')) :
    /**
     * get the future events list
     */
    function name()
    {
        $return = 'Hello';
        return $return;
    }
endif;
