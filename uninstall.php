<?php
// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

if (!function_exists('sp_uninstall'))
{
    /**
     * Run on Plugin's Uninstall
     * @since 1.0
     * @version 1.0
     */
    function sp_uninstall()
    {
        //Run Uninstall logic here
    }
}
