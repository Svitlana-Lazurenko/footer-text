<?php

if (!defined('ABSPATH')) {
    exit;
}

function ft_create_menu()
{
    add_options_page(
        'Footer Text Settings',   // Name of page
        'Footer Settings',        // Name in menu
        'manage_options',         // Access rights
        'ft-settings',            // Service name
        'ft_settings_page_html'   // Callback for displaying the page
    );
}
add_action('admin_menu', 'ft_create_menu');

// Displaying HTML on the settings page
function ft_settings_page_html()
{
    // Check access rights
    if (!current_user_can('manage_options')) {
        return;
    }

    // Save the settings
    if (isset($_POST['ft_footer_text'])) {
        update_option('ft_footer_text', sanitize_text_field($_POST['ft_footer_text']));
        echo '<div class="updated"><p>Settings saved.</p></div>';
    }

    // Get the current value of the option
    $current_text = get_option('ft_footer_text', '');

?>
    <div class="wrap">
        <h1>Footer Text Settings</h1>
        <form method="post">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">
                        <label for="ft_footer_text">Footer text</label>
                    </th>
                    <td>
                        <input type="text" id="ft_footer_text" name="ft_footer_text" value="<?php echo esc_attr($current_text); ?>" style="width: 100%;">
                        <p class="description">Enter the text that will be displayed in the footer.</p>
                    </td>
                </tr>
            </table>
            <?php submit_button('Зберегти'); ?>
        </form>
    </div>
<?php
}
