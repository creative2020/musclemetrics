<?php
function v_getUrl()
{
    $url  = isset($_SERVER['HTTPS']) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http';
    $url .= '://' . $_SERVER['SERVER_NAME'];
    $url .= in_array($_SERVER['SERVER_PORT'], array('80', '443')) ? '' : ':' . $_SERVER['SERVER_PORT'];
    $url .= $_SERVER['REQUEST_URI'];

    return $url;
}
function v_forcelogin()
{

    /**
     * show admin bar only for admins and editors
     */
    if (!current_user_can('edit_posts')) {
        add_filter('show_admin_bar', '__return_false');
    }

    if (!is_user_logged_in()) {
        $url = v_getUrl();

        $whitelist = apply_filters('v_forcelogin_whitelist', array());
        $redirect_url = apply_filters('v_forcelogin_redirect', $url);
        if (preg_replace('/\?.*/', '', $url) != preg_replace('/\?.*/', '', wp_login_url()) && !in_array($url, $whitelist)) {
            // manually set login redirect
            // $redirect_url = '/beta';

            wp_safe_redirect(wp_login_url($redirect_url), 302);
            exit();
        }
    }
}
add_action('init', 'v_forcelogin');
