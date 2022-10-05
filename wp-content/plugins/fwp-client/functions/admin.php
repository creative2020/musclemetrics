<?php
// ****************************************************
if (!function_exists('showme')) :
    /**
     * show em
     */
    function showme($obj)
    {
        echo "<pre>" . print_r($obj, true) . "</pre>";
    }
endif;

function fwp_log($message)
{
    $pluginlog = plugin_dir_path(__FILE__) . 'debug.log';

    if (is_array($message)) {
        file_put_contents($pluginlog, print_r($message, true), FILE_APPEND);
    } else {
        error_log($message . PHP_EOL, 3, $pluginlog);
    }
}

// ****************************************************
if (!function_exists('fwp_log')) :
    /**
     * writes to a fwp-log file
     */
    function fwp_log($message)
    {
        $fwplog = get_stylesheet_directory() . '/fwp-log.txt';

        if (is_array($message)) {
            file_put_contents($fwplog, print_r($message, true), FILE_APPEND);
        } else {
            error_log($message . PHP_EOL, 3, $fwplog);
        }
    }
endif;
