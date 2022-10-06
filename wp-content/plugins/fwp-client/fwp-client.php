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
    function fwp_get_future_events()
    {
        // query events
        $args = [
            'post_type' => 'tribe_events',
            'post_status' => 'publish',
            'posts_per_page' => 10,
            'orderby' => 'DSC',
            'order' => 'date',
        ];

        $q = new WP_Query($args);

        $future_posts = [];

        foreach ($q->posts as $post) {
            // showme($post);
            if (is_event_past($post->ID) != true) {
                $start_date = fwp_get_start_date($post->ID);
                array_push($future_posts, ['id' => $post->ID, 'start_date' => $start_date]);
            }
        }
        usort($future_posts, function ($item1, $item2) {
            return $item1['start_date'] <=> $item2['start_date'];
        });
        return $future_posts;
    }

endif;

// ****************************************************
if (!function_exists('is_event_past')) :
    /**
     * check if the start date is before today
     */
    function is_event_past($post_id)
    {
        // start date
        $start_date = fwp_get_start_date($post_id);
        $start_timestamp = strtotime($start_date);

        // today
        $today = time();

        if ($today > $start_timestamp) {
            return true;
        }
    }
endif;

// ****************************************************
if (!function_exists('fwp_display_next_event')) :
    /**
     * display the next event
     */
    function fwp_display_next_event()
    {
        $events = fwp_get_future_events();
        if (empty($events)) {
            return 'Coming Soon.';
        }
        $next_event = $events[0];
        // pull meta for each post

        $post = get_post($next_event['id']);
        $permalink = get_permalink($post->ID);
        // get event start date
        $start_date = fwp_get_start_date($post->ID);

        $size = '250,125';
        $image = get_the_post_thumbnail($post->ID, $size, $attr = null);

        //get section html
        ob_start();
?>
        <a href="<?= $permalink ?>">
            <div id="tt-list-event" class="row">
                <?php if (empty($image)) {
                    $next_col_size = '12';
                } else { ?>
                    <div id="tt-list-img" class="col-sm-3">
                        <?= $image; ?>
                    </div>
                    <?php $next_col_size = '9'; ?>
                <?php } ?>
                <div id="<?= $post->post_title ?>" class="col-sm-<?= $next_col_size; ?>">
                    <div>
                        <h5 style="color:white;"><?= $start_date ?></h5>
                        <h2 style="margin-bottom:5px;"><?= $post->post_title ?></h2>
                    </div>
                </div>
                <div id="tt-event-btn" class="col-sm-12 mt-4">
                    <?php echo do_shortcode('[tt_btn link="' . $permalink . '" block="y"]Register[/tt_btn]'); ?>
                </div>

            </div>
        </a>
        <?php
        $output = ob_get_contents();
        ob_end_clean();

        /* Restore original Post Data */
        wp_reset_postdata();
        return $output;
    }
endif;

// ****************************************************
if (!function_exists('fwp_display_upcoming_events')) :
    /**
     * display the next events 2 - 4
     */
    function fwp_display_upcoming_events()
    {
        $events = fwp_get_future_events();

        $count = count($events);
        if ($count <= 1) {
            return 'Coming Soon.';
        }
        $i = 1;
        while ($i <= 4 && $i < $count) :
            $post = get_post($events[$i]['id']);
            $permalink = get_permalink($post->ID);
            // get event start date
            $start_date = fwp_get_start_date($post->ID);
            //get section html
            ob_start();
        ?>
            <a class="row p-0 m-0" href="<?= $permalink ?>">
                <div id="<?= $post->post_title ?>" class="col-sm-12 p-0" style="border-left:2px solid black;">
                    <h5 style="margin:0 0 0 0;color:black;"><?= $start_date ?></h5>
                    <h4 style="margin:0 0 5px 0;"><?= $post->post_title ?></h4>
                </div>
            </a>
<?php
            $i++;
        endwhile;
        $output = ob_get_contents();
        ob_end_clean();

        /* Restore original Post Data */
        wp_reset_postdata();
        return $output;
    }
endif;
