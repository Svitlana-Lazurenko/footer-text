<?php
/*
Plugin Name: Footer Text
Description: A plugin for adding custom text to the footer via the admin panel.
Version: 1.0.0
Author: svitlasvit
Author URI: https://svitlasvit.pp.ua
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(__FILE__) . 'inc/settings-page.php';
require_once plugin_dir_path(__FILE__) . 'inc/footer-text.php';

function ft_enqueue_styles()
{
    wp_enqueue_style(
        'ft-styles',
        plugin_dir_url(__FILE__) . 'css/styles.css',
        [],
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'ft_enqueue_styles');
