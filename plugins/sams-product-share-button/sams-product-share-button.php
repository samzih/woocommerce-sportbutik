<?php

/*
 * Plugin Name: Sam's Product Share Button
 * Description: Simple plugin for displaying a share button on a single product page under the product metadata (requires WooCommerce to be installed).
 * Version: 1.0
 * Author: Sam Azimi
 */

// loads the plugin's styling file
function load_plugin_style()
{
    wp_enqueue_style('style', plugins_url() . '/sams-product-share-button/sams-product-share-button-style.css', '', false, 'all');
}
add_action('wp_enqueue_scripts', 'load_plugin_style');


// share social media button
function sam_social_share_button()
{
    global $post;
    $url = get_permalink($post->ID); // gets the permalink of the current product
    $title = get_the_title($post->ID); // gets the title of the current product

    // create the Facebook sharing URL by appending the product URL to the Facebook sharing endpoint
    $facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($url);

    // output the HTML code for the Facebook sharing button
    echo '<a href="' . esc_url($facebook_url) . '" class="button social-share facebook share-on-facebook" target="_blank"><i class="fab fa-facebook-square"></i> ' . __('Dela på Facebook') . '</a>&nbsp;';
}
// add the sam_social_share_button function to the woocommerce_share action hook
add_action('woocommerce_share', 'sam_social_share_button');
