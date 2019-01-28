<?php
/*
 * Plugin Name: PostPage Flex by Peter R. Stuhlmann
 * Description: Wordpress plugin, that integrates for example the recent posts in form of a tile view (flexbox) on any page.
 * Version: 1.0.0
 * Author: Peter R. Stuhlmann
 * Author URI: https://peter-stuhlmann-webentwicklung.de
 * Plugin URI: https://peter-stuhlmann-webentwicklung.de/wp-plugin/postpage-flex
 */


// Stylesheets and JavaScript files

function postPage_flex_enqueue_scripts() {
    wp_enqueue_style( 'postpage-flex-styles', plugin_dir_url( __FILE__ ) . "/assets/css/style.css", '', '20190128');
}
add_action( 'wp_enqueue_scripts', 'postPage_flex_enqueue_scripts' );


// Allows the integration of shortcodes in widget areas:
add_filter( 'widget_text', 'do_shortcode' );