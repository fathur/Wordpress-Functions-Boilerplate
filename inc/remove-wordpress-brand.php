<?php

/**
 * Change login logo
 */
function custom_login_logo()
{
    echo '<style  type="text/css"> h1 a {  background-image:url(' . get_bloginfo('template_directory') . '/images/logo_admin.png)  !important; } </style>';
}
add_action('login_head',  'custom_login_logo');

/**
 * Remove wordpress logo in top left admin area
 */
function remove_logo_admin_bar() {
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('wp-logo');
}

add_action('wp_before_admin_bar_render', 'remove_logo_admin_bar', 0);



/**
 * Remove welcome to wordpress in admin area dashboard
 */


/**
 * Remove thank you for createing with wordpress in bottom admin area
 */
function custom_dashboard_footer() {
	echo 'Thank you for creating with <a href="http://www.fostrom.com" target="__blank">Fostrom</a>';
}
add_filter('admin_footer_text', 'custom_dashboard_footer');

/**
 * Remove admin bar in main website
 */
// REMOVE META BOXES FROM WORDPRESS DASHBOARD FOR ALL USERS
function remove_dashboard_widgets()
{
    // Globalize the metaboxes array, this holds all the widgets for wp-admin
    global $wp_meta_boxes;

    //print_r($wp_meta_boxes); die();
     
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );
remove_action('welcome_panel', 'wp_welcome_panel');
