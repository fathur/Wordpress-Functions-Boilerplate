<?php

/**
 * Change login logo
 */

/**
 * Change wordpress logo in top left admin area
 */
function annointed_admin_bar_remove() {
        global $wp_admin_bar;

        /* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
}

add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);


/**
 * Remove welcome to wordpress in admin area dashboard
 */

/**
 * Remove wordpress news in admin area dashboard
 */

/**
 * Remove thank you for createing with wordpress in bottom admin area
 */

/**
 * Remove admin bar in main website
 */