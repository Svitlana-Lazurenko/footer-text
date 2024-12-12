<?php

if (!defined('ABSPATH')) {
    exit;
}

function ft_add_footer_text()
{
    $custom_text = get_option('ft_footer_text', '');
    if (!empty($custom_text)) {
        echo '<p class="ft-footer-text">' . esc_html($custom_text) . '</p>';
    }
}
add_action('wp_footer', 'ft_add_footer_text');
