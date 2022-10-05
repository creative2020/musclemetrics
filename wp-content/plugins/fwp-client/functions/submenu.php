<?php
// Add menu
function plugin_menu()
{
    add_submenu_page("tools.php", "Dev Tools", "FWP 2020 Creative", "manage_options", "fwp_dev_tools", "fwp_dev_tools", 20);
}
add_action("admin_menu", "plugin_menu");

function fwp_dev_tools()
{
    include(plugin_dir_path(__FILE__) . '../tools/tools.php');
    include(plugin_dir_path(__FILE__) . '../tools/view.php');
}
