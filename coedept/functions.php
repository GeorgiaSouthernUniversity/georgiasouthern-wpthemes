<?php
/**
 * Child Theme Functions are loaded first before parent theme - see gsucollege/functions.php.
 */

add_filter('admin_init', 'gsu_general_settings_register_fields');
 
function gsu_general_settings_register_fields()
{
    register_setting('general', 'gsudept_link', 'esc_attr');
    add_settings_field('gsudept_link', '<label for="gsudept_link">'.__('Department Link' , 'gsudept_link' ).'</label>' , 'gsu_general_settings_fields_html', 'general');
}

 
function gsu_general_settings_fields_html()
{
    $value = get_option( 'gsudept_link' );
    echo '<input type="text" id="gsudept_link" name="gsudept_link" class="regular-text" value="' . $value . '" />';
}